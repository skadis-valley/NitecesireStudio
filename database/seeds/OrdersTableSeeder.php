<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class OrdersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

    	$faker = Faker::create('id_ID');
    	$emp = DB::table('users')->first();
    	$emp2 = DB::table('produks')->first();
    	$stat = ['pesan', 'dikirim', 'lunas'];

    	DB::table('orders')->insert([
    		'id_user_order' => $emp->id,
            'id_produk_order' => $emp2->id_produk,
    		'tanggal_order' => $faker->date($format = 'Y-m-d', $max = 'now'),
    		'status_order' => $stat[array_rand($stat)],
            'alamat_pengiriman_order' => $faker->address(),
            'detail_order' => 'pakai aman',
            'harga_order' => 250000
            
    		]);
    	       DB::table('orders')->insert([
            'id_user_order' => $emp->id,
            'id_produk_order' => $emp2->id_produk,
            'tanggal_order' => $faker->date($format = 'Y-m-d', $max = 'now'),
            'status_order' => $stat[array_rand($stat)],
            'alamat_pengiriman_order' => $faker->address(),
            'detail_order' => 'pakai aman',
            'harga_order' => 250000
            
            ]);
        
    }
}
