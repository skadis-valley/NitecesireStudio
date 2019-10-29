<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting_gambar;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try 
        {
            if(auth()->user()->isAdmin == 1)
            {
                return view('dashboard.beranda');    
            }
            else 
            {
                    //$gambars = setting_gambar::orderBy('id_setting_gambar', 'asc')->get();
               $produks = DB::table('produks')->where('kategori_produk', '=', 'Scrapframe')->get();
            return view('home', compact('produks')); 
            }
        } 
        catch(Exeption $e) {
            $produks = DB::table('produks')->where('kategori_produk', '=', 'Scrapframe')->get();
            return view('home', compact('produks')); 
        }
        
        
    }
    public function indexAdmin()
    {
        return view('dashboard.beranda');
    }
    public function about()
    {
        return view('about');
        
    }
    public function contact()
    {
        return view('contact');
    }
    public function product()
    {
        return view('product');
    }
}
