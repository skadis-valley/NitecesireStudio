<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingGambarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_gambars', function (Blueprint $table) {
            $table->increments('id_setting_gambar');
            $table->string('nama_gambar');
            $table->string('path_gambar');
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
        Schema::dropIfExists('setting_gambars');
    }
}
