<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class SettingGambarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('setting_gambars')->insert([
            'nama_gambar' => 'home front',
            'path_gambar' => 'home_front.jpg',
            'tipe_setting' => 'home',
            'created_at' => Carbon::now()->format('Y-m-d H:i:s');
        ]);
    }
}
