<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class OrderCartController extends Controller
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
        $currentUser = Auth::id();
        $orderCart = DB::select(DB::raw("SELECT id_order, kategori_produk, nama_produk, ukuran_produk, detail_order, tanggal_order, alamat_pengiriman_order, harga_order, status_order, upload_bukti_transfer FROM `orders`, `produks` WHERE orders.id_produk_order = produks.id_produk AND orders.id_user_order = ". $currentUser));
        return view('orderCart', compact('orderCart'));
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
    public function update(Request $request)
    {
        $id = $request['id'];
        $order = DB::select(DB::raw("SELECT * FROM `orders` WHERE orders.id_order = ". $id));
            $file = $request->file('gambar');
            $filename = $file->getClientOriginalName();
            $request->file('gambar')->move("evidence/", strval($id) . ".jpg");
        DB::table('orders')
            ->where('id_order', $id)
            ->update(['upload_bukti_transfer' => $id,
                'status_order' => 'Transfered, your order is in progress']);
        $currentUser = Auth::id();
        $orderCart = DB::select(DB::raw("SELECT id_order, kategori_produk, nama_produk, ukuran_produk, detail_order, tanggal_order, alamat_pengiriman_order, harga_order, status_order, upload_bukti_transfer FROM `orders`, `produks` WHERE orders.id_produk_order = produks.id_produk AND orders.id_user_order = ". $currentUser));
        return view('orderCart', compact('orderCart'));
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
