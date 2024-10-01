<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;
use App\Models\Supplier;


class masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $kd_user_1 = User::inRandomOrder()->first()->id;
        $kd_user_2 = User::inRandomOrder()->first()->id;
        $kd_user_3 = User::inRandomOrder()->first()->id;

        $kd_suplier_1 = Supplier::inRandomOrder()->first()->kd_supplier;
        $kd_suplier_2 = Supplier::inRandomOrder()->first()->kd_supplier;
        $kd_suplier_3 = Supplier::inRandomOrder()->first()->kd_supplier;

        for($i = 1; $i <= 10; $i++) {
            DB::table('masuks')->insert([
                [
                    'kd_masuk' => 'KMSK01',
                    'tgl_masuk' => '2 February 2024',
                    'kd_user'=> $kd_user_1,
                    'kd_supplier'=> $kd_suplier_1,
                    'total_masuk' => '5',
                ],
                [
                    'kd_masuk' => 'KMSK02',
                    'tgl_masuk' => '2 Juni 2024',
                    'kd_user'=> $kd_user_2,
                    'kd_supplier'=> $kd_suplier_2,
                    'total_masuk' => '10',
                ],
                [
                    'kd_masuk' => 'KMSK03',
                    'tgl_masuk' => '2 September 2024',
                    'kd_user'=> $kd_user_3,
                    'kd_supplier'=> $kd_suplier_3,
                    'total_masuk' => '15',
                ]
            ]);
        }
    }
}
