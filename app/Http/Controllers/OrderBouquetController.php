<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderBouquetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        //
        $curl = curl_init();    
       curl_setopt_array($curl, array(
          CURLOPT_URL => "http://api.rajaongkir.com/starter/city",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "GET",
          CURLOPT_HTTPHEADER => array(
            "key: 20abcef3dbf0bc2149a7412bc9b60005"
        ),
      ));

       $response = curl_exec($curl);
       $err = curl_error($curl);

       curl_close($curl);
 
        $produks = DB::table('produks')->where('kategori_produk', '=', 'Carricature Bouquet')->get();
        return view('orderBouquet', compact('produks', 'response'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tambah = new Order();
        $detailOrder = $request['acara'] . ", " . $request['tema'] . ", warna bouquet " . $request['warnaBouquet'] . ", warna bunga " . $request['warnaBunga'] . ", " . $request['tipeService'];
        $infoTambahan = $request['infoTambahan']; 
        if(is_null($infoTambahan)){
            $detailOrder = $detailOrder . ", Tidak ada info tambahan";
        } 
        else{
            $detailOrder = $detailOrder . ", " . $request['infoTambahan'];
        }
        if(is_null($request['tambahSafePackage'])){
            $detailOrder = $detailOrder . ", Tidak pakai Safe Package";    
        }
        else 
        {
            $detailOrder = $detailOrder . ", Pakai Safe Package";
        }
        
        $tambah->id_user_order = Auth::id();    


        $tambah->id_produk_order = explode("," ,$request['idProduk'])[3];
        //$tambah->status_order = "pesan";
        $tambah->alamat_pengiriman_order = $request['alamat'] . ", " . $request['kab_id'];
        $tambah->detail_order = $detailOrder;
        $tambah->status_order = "Menunggu Transfer";
        $harga = $request['totalHarganya'];
        $tambah->harga_order = $request['hargaTotalnya'];
        $tambah->tanggal_order = date("Y/m/d");
        $tambah->upload_bukti_transfer = "Belum Upload Bukti";
        $id = DB::table('orders')->orderBy('id_order', 'desc')->first()->id_order + 1;
        Session::flash('flash_msg', $id);
        $file       = $request->file('gambar');
        $filename = $file->getClientOriginalName();
        $request->file('gambar')->move("image/", strval($id) . "_A");
        $tambah->foto_1_order = $filename;
        if($request->file('gambar2')){
            $file2       = $request->file('gambar2');
            $filename2 = $file2->getClientOriginalName();
            $request->file('gambar2')->move("image/", $id . "_B");
            $tambah->foto_2_order = $filename2;
        }
        $tambah->created_at = date('Y-m-d H:i:s');
        $tambah->updated_at = date('Y-m-d H:i:s');
        $tambah->save();
        Session::flash('flash_msg', 'Success to order, please transfer and upload your transfer evidence');
        return redirect()->to('/orderCart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
