<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;
use Illuminate\Support\Facades\DB;
class ProductController extends Controller
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
        $products = Produk::orderBy('kategori_produk', 'asc')->get();
        return view('master.masterProduk', compact('products'));
        //$namaProduk = $request->namaProduk;
        //
        
        //return view('about');
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
        //
        $tambah = new Produk();
        $tambah->nama_produk = $request['namaAdd'];
        $tambah->kategori_produk = $request['kategoriAdd'];
        $tambah->ukuran_produk = $request['ukuranAdd'];

     //$order = DB::select(DB::raw("SELECT * FROM `orders` WHERE orders.id_order = ". $id));
        $id = DB::table('produks')
        ->orderByRaw('id_produk DESC limit 1')
        ->get()[0]->id_produk;
        (int)$id++;
        $file       = $request->file('gambarAdd');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambarAdd')->move("img/", $id . ".jpg");
        $tambah->gambar_produk = "img/" . $id . ".jpg";
        $tambah->status_produk = 1;
        $tambah->harga_produk = $request['hargaAdd'];

        $tambah->save();

        $products = Produk::orderBy('id_produk', 'asc')->get();
        return view('master.masterProduk', compact('products'));
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
        $id = $request->idAdd;

        $produk = DB::select(DB::raw("SELECT * FROM `produks` WHERE produks.id_produk = " .$id));
        //$order = Order::find($id);

        return $produk;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       $id = $request->idAdd;
       $nama = $request->namaAdd2;
       $kategori = $request->kategoriAdd2;
       $status = $request->statusAdd2;
       $ukuran = $request->ukuranAdd2;
       $harga = $request->hargaAdd2;
        $file       = $request->file('gambarAdd2');
        $fileName   = $file->getClientOriginalName();
        $request->file('gambarAdd2')->move("img/", $id . ".jpg");
       //$id = $request->id;
       //$order = DB::select(DB::raw("SELECT * FROM `orders` WHERE orders.id_order = ". $id));

       DB::table('produks')
       ->where('id_produk', $id)
       ->update(['nama_produk' => $nama, 'kategori_produk' => $kategori, 'status_produk' => $status,
        'ukuran_produk' => $ukuran, 'harga_produk' => $harga, 'gambar_produk' => "img/" . $id . ".jpg"]);
      $products = Produk::orderBy('kategori_produk', 'asc')->get();
        return view('master.masterProduk', compact('products'));
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
