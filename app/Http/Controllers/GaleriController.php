<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\setting_gambar;

use Illuminate\Support\Facades\DB;
class GaleriController extends Controller
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
        $gambars = setting_gambar::orderBy('id_setting_gambar', 'asc')->get();
        return view('master.masterGaleri', compact('gambars'));
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
       $tambah = new setting_gambar();
       $tambah->nama_gambar = $request['namaAdd1'];
       $tambah->tipe_setting = $request['settingAdd1'];

     //$order = DB::select(DB::raw("SELECT * FROM `orders` WHERE orders.id_order = ". $id));
       $id = DB::table('setting_gambars')
       ->orderByRaw('id_setting_gambar DESC limit 1')
       ->get()[0]->id_setting_gambar;
       (int)$id++;
       $file       = $request->file('gambarAdd1');
       $fileName   = $file->getClientOriginalName();
       $request->file('gambarAdd1')->move("images/", $id . ".jpg");
       $tambah->path_gambar = "images/" . $id . ".jpg";
       $tambah->save();
       $gambars = setting_gambar::orderBy('id_setting_gambar', 'asc')->get();
       return view('master.masterGaleri', compact('gambars'));
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
