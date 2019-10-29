<?php

use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$produks = DB::table('produks')->get();
	return view('home', compact('produks')); 
    //return view('home');
});

Auth::routes();

Route::get('/beranda', 'HomeController@indexAdmin')->name('admin');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', 'HomeController@about')->name('about');
Route::get('/contact', 'HomeController@contact')->name('contact');
Route::get('admin/routes', 'HomeController@admin')->middleware('admin');

Route::get('/order', 'OrderController@order');
Route::get('/order/scrapframe', 'OrderScrapframeController@index');
Route::get('/order/bouquet', 'OrderBouquetController@index');
Route::get('/order/paperflower', 'OrderPaperFlowerController@index');
Route::get('/order/popupcard', 'OrderPopUpCardController@index');

Route::post('/order/scrapframe/order', 'OrderScrapframeController@store');
Route::post('/order/bouquet/order', 'OrderBouquetController@store');
Route::post('/order/paperflower/order', 'OrderPaperFlowerController@store');
Route::post('/order/popupcard/order', 'OrderPopUpCardController@store');

Route::get('/orderCart', 'OrderCartController@index');
Route::post('/order/uploadEvidence', 'OrderCartController@update');

Route::get('/master/user', 'UserController@index');

Route::get('/master/galeri', 'GaleriController@index');
Route::post('/master/galeri/store', 'GaleriController@store');

Route::get('/master/product', 'ProductController@index');
Route::post('/master/product/store', 'ProductController@store');
Route::post('/master/product/edit', 'ProductController@edit');
Route::post('/master/product/update', 'ProductController@update');


Route::get('/master/order', 'OrderController@index');
Route::post('/master/order/edit', 'OrderController@edit');
Route::post('/master/order/update', 'OrderController@update');

Route::get('laporan/produk', 'LaporanProdukController@index');

Route::post('/order/getPrice/edit', 'OrderPaperFlowerController@edit');

