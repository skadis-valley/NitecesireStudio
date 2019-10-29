<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
class OrderScrapframeController extends Controller
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
       $produks = DB::table('produks')->where('kategori_produk', '=', 'Scrapframe')->get();
       return view('orderScrapframe', compact('produks', 'response')); 
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
     $detailOrder = $request['acara'] . ", " . $request['tema'] . ", " . $request['quote'] . ", " . $request['infoTambahan'] . ", " . $request['warnaFrame'] . ", " . $request['orientasiFrame'] . ", " . explode("," ,$request['tipeService'])[1];

     $tambah->id_user_order = Auth::id();    

     $idProduk = explode(",", $request['produk2']);


     $tambah->id_produk_order = $idProduk[0];
        //$tambah->status_order = "pesan";
     $tambah->alamat_pengiriman_order = $request['alamat'] . ", " . $request['kab_id'];
     $tambah->detail_order = $detailOrder;
     $tambah->status_order = "Menunggu Transfer";
     $tambah->created_at = date('Y-m-d H:i:s');
     $tambah->updated_at = date('Y-m-d H:i:s');
     $harga = $request['totalHarganya'];
     $tambah->harga_order = $request['hargaTotalnya'];
     $tambah->tanggal_order = date("Y/m/d");
     $tambah->upload_bukti_transfer = "Belum Upload Bukti";

     //$order = DB::select(DB::raw("SELECT * FROM `orders` WHERE orders.id_order = ". $id));
     $id = DB::table('orders')
     ->orderByRaw('id_order DESC limit 1')
     ->get()[0]->id_order;
     (int)$id++;
     $file       = $request->file('gambar');
     $fileName   = $file->getClientOriginalName();
     $request->file('gambar')->move("image/", $id . "_A.jpg");
     $tambah->foto_1_order = $id . "_A.jpg";
     if($request->file('gambar2')){
        $file2       = $request->file('gambar2');
        $fileName2   = $file2->getClientOriginalName();
        $request->file('gambar2')->move("image/", $id . "_B.jpg");
        $tambah->foto_2_order = $id . "_B.jpg";
    }
    if($request->file('gambar3')){
        $file3       = $request->file('gambar3');
        $fileName3   = $file3->getClientOriginalName();
        $request->file('gambar3')->move("image/", $id . "_C.jpg");
        $tambah->foto_3_order = $id . "_C.jpg";
    }
    if($request->file('gambar4')){
        $file4       = $request->file('gambar4');
        $fileName4   = $file4->getClientOriginalName();
        $request->file('gambar4')->move("image/", $id . "_D.jpg");
        $tambah->foto_4_order = $id . "_D.jpg";
    }
    if($request->file('gambar5')){
        $file5       = $request->file('gambar5');
        $fileName5   = $file5->getClientOriginalName();
        $request->file('gambar5')->move("image/", $id . "_E.jpg");
        $tambah->foto_5_order = $id . "_E.jpg";
    }

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
    public function edit(Request $request)
    {
        $asal = $request['asal'];
        $id_kabupaten = $request['kab_id'];
        $kurir = $request['kurir'];
        $berat = 1;

        $curl = curl_init();
        curl_setopt_array($curl, array(
          CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
          CURLOPT_RETURNTRANSFER => true,
          CURLOPT_ENCODING => "",
          CURLOPT_MAXREDIRS => 10,
          CURLOPT_TIMEOUT => 30,
          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
          CURLOPT_CUSTOMREQUEST => "POST",
          CURLOPT_POSTFIELDS => "origin=".$asal."&destination=".$id_kabupaten."&weight=".$berat."&courier=".$kurir."",
          CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
            "key: 20abcef3dbf0bc2149a7412bc9b60005"
        ),
      ));

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) 
        {   
            echo "cURL Error #:" . $err;
        } 
        else 
        {
          return $response;
        }
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
