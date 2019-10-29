<?php

use Illuminate\Database\Seeder;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	//Scrapframe
    	//Single
        DB::table('produks')->insert([
            'nama_produk' => 'single',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '15 cm x 15 cm',
            'harga_produk' => 135000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'single',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '15 cm x 25 cm',
            'harga_produk' => 145000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'single',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '20 cm x 20 cm',
            'harga_produk' => 145000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'single',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '20 cm x 30 cm',
            'harga_produk' => 155000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'single',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '25 cm x 25 cm',
            'harga_produk' => 155000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'single',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '30 cm x 30 cm',
            'harga_produk' => 170000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'single',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '30 cm x 40 cm',
            'harga_produk' => 185000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        //Double
        DB::table('produks')->insert([
            'nama_produk' => 'double',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '15 cm x 15 cm',
            'harga_produk' => 200000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'double',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '15 cm x 25 cm',
            'harga_produk' => 210000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'double',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '20 cm x 20 cm',
            'harga_produk' => 210000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'double',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '20 cm x 30 cm',
            'harga_produk' => 220000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'double',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '25 cm x 25 cm',
            'harga_produk' => 220000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'double',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '30 cm x 30 cm',
            'harga_produk' => 240000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'double',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '30 cm x 40 cm',
            'harga_produk' => 260000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        //TRIPLE
        DB::table('produks')->insert([
            'nama_produk' => 'triple',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '15 cm x 15 cm',
            'harga_produk' => 270000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'triple',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '15 cm x 25 cm',
            'harga_produk' => 280000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'triple',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '20 cm x 20 cm',
            'harga_produk' => 280000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'triple',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '20 cm x 30 cm',
            'harga_produk' => 290000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'triple',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '25 cm x 25 cm',
            'harga_produk' => 290000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'triple',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '30 cm x 30 cm',
            'harga_produk' => 310000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'triple',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '30 cm x 40 cm',
            'harga_produk' => 330000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        //FAMILY
        DB::table('produks')->insert([
            'nama_produk' => 'family',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '15 cm x 25 cm',
            'harga_produk' => 335000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'family',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '20 cm x 30 cm',
            'harga_produk' => 350000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'family',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '25 cm x 25 cm',
            'harga_produk' => 350000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'family',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '30 cm x 30 cm',
            'harga_produk' => 370000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'family',
            'kategori_produk' => 'Scrapframe',
            'ukuran_produk' => '30 cm x 40 cm',
            'harga_produk' => 390000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);


        ////////////////////////////////////////////////////////////////////////////////////////////////////


        DB::table('produks')->insert([
            'nama_produk' => 'single 3 Normal',
            'kategori_produk' => 'Carricature Bouquet',
            
            'ukuran_produk' => '20 cm - 30 cm',
            'harga_produk' => 85000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'single 5 normal',
            'kategori_produk' => 'Carricature Bouquet',
            'ukuran_produk' => '20 cm - 30 cm',
            'harga_produk' => 125000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'single 10 normal',
            'kategori_produk' => 'Carricature Bouquet',
            'ukuran_produk' => '20 cm - 30 cm',
            'harga_produk' => 200000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'single 3 jumbo',
            'kategori_produk' => 'Carricature Bouquet',
            'ukuran_produk' => '40 cm - 50 cm',
            'harga_produk' => 100000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'single 2 jumbo',
            'kategori_produk' => 'Carricature Bouquet',
            'ukuran_produk' => '40 cm - 50 cm',
            'harga_produk' => 150000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'single 10 jumbo',
            'kategori_produk' => 'Carricature Bouquet',
            'ukuran_produk' => '40 cm - 50 cm',
            'harga_produk' => 250000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);

        DB::table('produks')->insert([
            'nama_produk' => 'double 4 Normal',
            'kategori_produk' => 'Carricature Bouquet',
            'ukuran_produk' => '20 cm - 30 cm',
            'harga_produk' => 135000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'double 6 normal',
            'kategori_produk' => 'Carricature Bouquet',
            'ukuran_produk' => '20 cm - 30 cm',
            'harga_produk' => 180000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'double 10 normal',
            'kategori_produk' => 'Carricature Bouquet',
            'ukuran_produk' => '20 cm - 30 cm',
            'harga_produk' => 250000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'double 4 jumbo',
            'kategori_produk' => 'Carricature Bouquet',
            'ukuran_produk' => '40 cm - 50 cm',
            'harga_produk' => 170000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'double 6 jumbo',
            'kategori_produk' => 'Carricature Bouquet',
            'ukuran_produk' => '40 cm - 50 cm',
            'harga_produk' => 220000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'double 10 jumbo',
            'kategori_produk' => 'Carricature Bouquet',
            'ukuran_produk' => '40 cm - 50 cm',
            'harga_produk' => 300000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);




        DB::table('produks')->insert([
            'nama_produk' => 'paper flower 22cm',
            'kategori_produk' => 'Paper Flower',
            'ukuran_produk' => '22 cm',
            'harga_produk' => 100000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'paper flower 27cm',
            'kategori_produk' => 'Paper Flower',
            'ukuran_produk' => '22 cm',
            'harga_produk' => 140000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'paper flower 32cm',
            'kategori_produk' => 'Paper Flower',
            'ukuran_produk' => '22 cm',
            'harga_produk' => 175000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);


        DB::table('produks')->insert([
            'nama_produk' => 'pop up card 1',
            'kategori_produk' => 'Pop Up Card',
            'ukuran_produk' => '',
            'harga_produk' => 7000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'pop up card 2',
            'kategori_produk' => 'Pop Up Card',
            'ukuran_produk' => '',
            'harga_produk' => 7000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'pop up card 3',
            'kategori_produk' => 'Pop Up Card',
            'ukuran_produk' => '',
            'harga_produk' => 7000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'pop up card 4',
            'kategori_produk' => 'Pop Up Card',
            'ukuran_produk' => '',
            'harga_produk' => 7000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'pop up card 5',
            'kategori_produk' => 'Pop Up Card',
            'ukuran_produk' => '',
            'harga_produk' => 7000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'pop up card 6',
            'kategori_produk' => 'Pop Up Card',
            'ukuran_produk' => '',
            'harga_produk' => 7000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
        DB::table('produks')->insert([
            'nama_produk' => 'pop up card 7',
            'kategori_produk' => 'Pop Up Card',
            'ukuran_produk' => '',
            'harga_produk' => 7000,
            'gambar_produk' => 'img/gambar.jpg',
            'status_produk' => 1,
        ]);
    }
}
