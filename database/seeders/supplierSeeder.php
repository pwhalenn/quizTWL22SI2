<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class supplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 10; $i++) {
            DB::table('suppliers')->insert([
                'kd_supplier' => 'KSUP' . $i,
                'nama_supplier' => $faker -> name,
                'alamat'=> $faker -> text(50),
            ]);
        }
    }
}
