<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Masuk;
use App\Models\Barang;

class dMasukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $kd_masuk_1 = User::inRandomOrder()->first()->kd_masuk;
        $kd_masuk_2 = User::inRandomOrder()->first()->kd_masuk;
        $kd_masuk_3 = User::inRandomOrder()->first()->kd_masuk;

        for($i = 1; $i <= 10; $i++) {
            DB::table('d_masuks')->insert([
                [
                    'id_masuk' => 1,
                    'kd_masuk' => $kd_masuk_1,
                    'kd_barang_beli'=> 'BRG01',
                    'jumlah' => 10,
                    'subtotal' => 50000,
                ],
                [
                    'id_masuk' => 2,
                    'kd_masuk' => $kd_masuk_2,
                    'kd_barang_beli'=> 'BRG02',
                    'jumlah' => 20,
                    'subtotal' => 10000,
                ],
                [
                    'id_masuk' => 3,
                    'kd_masuk' => $kd_masuk_3,
                    'kd_barang_beli'=> 'BRG03',
                    'jumlah' => 15,
                    'subtotal' => 750000,
                ],
                [
                    'id_masuk' => 4,
                    'kd_masuk' => $kd_masuk_3,
                    'kd_barang_beli'=> 'BRG04',
                    'jumlah' => 30,
                    'subtotal' => 150000,
                ],
                [
                    'id_masuk' => 5,
                    'kd_masuk' => $kd_masuk_3,
                    'kd_barang_beli'=> 'BRG05',
                    'jumlah' => 12,
                    'subtotal' => 600000,
                ],
                [
                    'id_masuk' => 6,
                    'kd_masuk' => $kd_masuk_3,
                    'kd_barang_beli'=> 'BRG06',
                    'jumlah' => 25,
                    'subtotal' => 125000,
                ],
                [
                    'id_masuk' => 7,
                    'kd_masuk' => $kd_masuk_3,
                    'kd_barang_beli'=> 'BRG07',
                    'jumlah' => 18,
                    'subtotal' => 900000,
                ],
                [
                    'id_masuk' => 8,
                    'kd_masuk' => $kd_masuk_3,
                    'kd_barang_beli'=> 'BRG08',
                    'jumlah' => 35,
                    'subtotal' => 175000,
                ],
                [
                    'id_masuk' => 9,
                    'kd_masuk' => $kd_masuk_3,
                    'kd_barang_beli'=> 'BRG09',
                    'jumlah' => 40,
                    'subtotal' => 200000,
                ],
                [
                    'id_masuk' => 10,
                    'kd_masuk' => $kd_masuk_3,
                    'kd_barang_beli'=> 'BRG10',
                    'jumlah' => 50,
                    'subtotal' => 250000,
                ]
            ]);
        }
    }
}
