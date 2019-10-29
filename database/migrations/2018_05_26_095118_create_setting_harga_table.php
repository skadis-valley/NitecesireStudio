<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingHargaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_harga', function (Blueprint $table) {
            $table->increments('id_harga');
            $table->string('nama_harga');
            $table->string('harga_harga');
            $table->string('tipe_setting');
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
        Schema::dropIfExists('setting_harga');
    }
}
