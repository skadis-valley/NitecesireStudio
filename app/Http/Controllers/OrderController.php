<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $order = DB::select(DB::raw("SELECT * FROM `orders`, `produks`, `users` WHERE orders.id_produk_order = produks.id_produk AND orders.id_user_order = users.id"));
         
        //$order = DB::select(DB::raw("SELECT kategori_produk, nama_produk, ukuran_produk, SUM(harga_order) ,COUNT(id_produk_order) FROM `orders` ,`produks` WHERE id_produk_order = id_produk AND status_order = 'done and sending to you place' GROUP By id_produk_order"));
        return view('master.masterOrder', compact('order'));
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
    public function edit(Request $request)
    {
        //
        $id = $request->id;

        $order = DB::select(DB::raw("SELECT * FROM `orders`, `produks`, `users` WHERE orders.id_order = " .$id. " AND orders.id_produk_order = produks.id_produk AND orders.id_user_order = users.id"));
        //$order = Order::find($id);

        return $order;
        
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
        //
        $id = $request->id;
        $alamat = $request->alamat;
        $detailOrder = $request->detailOrder;
        $status = $request->statusOrder;

        
        $id = $request->id;
        $order = DB::select(DB::raw("SELECT * FROM `orders` WHERE orders.id_order = ". $id));
           
        DB::table('orders')
            ->where('id_order', $id)
            ->update(['status_order' => $status,
                'alamat_pengiriman_order' => $alamat, 'detail_order' => $detailOrder]);
        $order = DB::select(DB::raw("SELECT * FROM `orders`, `produks`, `users` WHERE orders.id_produk_order = produks.id_produk AND orders.id_user_order = users.id"));
        
        return view('master.masterOrder', compact('order'));
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

    public function order()
    {


    	return view('order');



    }
}
