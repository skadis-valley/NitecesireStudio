<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$faker = Faker::create('id_ID');
    	DB::table('users')->insert([
    		'name' => 'admin',
    		'email' => 'admin@gmail.com',
    		'password' => bcrypt('123'),
    		'alamat_user' => $faker->address,
    		'telepon_user' => $faker->phoneNumber,
    		'isAdmin' => 1
    		]);
    	foreach(range(0,10) as $i){
    		DB::table('users')->insert([
    			'name' => $faker->name,
    			'email' => $faker->email,
    			'password' => bcrypt('123'),
    			'alamat_user' => $faker->address,
    			'telepon_user' => $faker->phoneNumber,
    			'isAdmin' => 0
    			]);
    	}
    }
}
