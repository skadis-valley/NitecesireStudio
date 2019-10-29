<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id_order');
            $table->unsignedinteger('id_user_order');
            $table->unsignedinteger('id_produk_order');
            $table->date('tanggal_order');
            $table->string('status_order');
            $table->string('alamat_pengiriman_order');
            $table->string('detail_order');
            $table->string('foto_1_order')->default('null');
            $table->string('foto_2_order')->default('null');
            $table->string('foto_3_order')->default('null');
            $table->string('foto_4_order')->default('null');
            $table->string('foto_5_order')->default('null');
            $table->integer('harga_order');
            $table->string('upload_bukti_transfer')->default('null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
