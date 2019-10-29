<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Galeri extends Model
{
     protected $fillable = ['nama_gambar', 'path_gambar', 'tipe_setting'];
}
