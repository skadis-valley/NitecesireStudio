<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    protected $fillable = ['nama_produk', 'kategori_produk', 'ukuran_produk', 'harga_produk', 'status_produk'];


    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
