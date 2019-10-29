<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class setting_gambar extends Model
{
    protected $fillable = ['nama_gambar', 'path_gambar', 'tipe_setting'];
}
