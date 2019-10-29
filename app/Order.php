<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public $timestamps = false;
    protected $fillable = ['id_user_order', 'tanggal_order', 'status_order', 'harga_order'];

    public function produk()
    {
        return $this->belongsTo(Produk::class);
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }

}
