<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class barangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++) {
            DB::table('barangs')->insert([
                'kd_barang' => 'KBRG' . $i,
                'nama_barang' => $faker -> name,
                'satuan'=> $faker -> randomElement(['dus', 'pcs', 'pax']),
                'harga_jual' => $faker -> numberBetween(10000, 5000000),
                'harga_beli' => $faker -> numberBetween(8000, 4500000),
                'stok' => $faker -> numberBetween(1, 1000),
                'status' => $faker -> randomElement(['fragile', 'not fragile']),
            ]);
        }
    }
}
