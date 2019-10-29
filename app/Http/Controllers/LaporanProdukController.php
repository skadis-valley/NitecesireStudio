<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;
use Illuminate\Support\Facades\DB;

class LaporanProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $order = DB::select(DB::raw("SELECT MONTHNAME( tanggal_order ) as BULAN,  YEAR(tanggal_order) as YEAR, status_produk,  tabelPendapatan.pendapatan as pendapatan, kategori_produk, nama_produk, ukuran_produk, SUM(harga_order) as total_penjualan ,COUNT(id_produk_order) as total_produk_terjual FROM (SELECT SUM(harga_order) as pendapatan, EXTRACT(YEAR_MONTH FROM tanggal_order) as perTanggal FROM `orders` WHERE status_order = 'done and sending to you place' GROUP By EXTRACT( YEAR_MONTH FROM tanggal_order ) ORDER BY EXTRACT(YEAR_MONTH FROM tanggal_order) DESC) as tabelPendapatan ,`orders` ,`produks` WHERE id_produk_order = id_produk AND tabelPendapatan.perTanggal = EXTRACT(YEAR_MONTH FROM tanggal_order) AND status_order = 'done and sending to you place' GROUP By EXTRACT( YEAR_MONTH FROM tanggal_order ), tabelPendapatan.pendapatan, kategori_produk, nama_produk, ukuran_produk, status_produk, MONTHNAME( tanggal_order ), YEAR(tanggal_order) ORDER BY EXTRACT(YEAR_MONTH FROM tanggal_order) DESC"));
        return view('laporan.laporanProduk', compact('order'));
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
