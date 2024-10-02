<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Supplier;

class masukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Check if there are enough users and suppliers to proceed with the seeding
        if (User::count() < 3 || Supplier::count() < 3) {
            echo "Not enough users or suppliers to seed masuk data.";
            return;
        }

        // Randomly select user IDs and supplier codes
        $user_1 = User::inRandomOrder()->first()->id;
        $user_2 = User::inRandomOrder()->first()->id;
        $user_3 = User::inRandomOrder()->first()->id;

        $supplier_1 = Supplier::inRandomOrder()->first()->kd_supplier;
        $supplier_2 = Supplier::inRandomOrder()->first()->kd_supplier;
        $supplier_3 = Supplier::inRandomOrder()->first()->kd_supplier;

        // Insert records into the `masuks` table
        DB::table('masuks')->insert([
            [
                'kd_masuk' => 'KMSK01',
                'tgl_masuk' => '2024-02-02',
                'user_id' => $user_1,
                'kd_supplier' => $supplier_1,
                'total_masuk' => 5000,
            ],
            [
                'kd_masuk' => 'KMSK02',
                'tgl_masuk' => '2024-06-02',
                'user_id' => $user_2,
                'kd_supplier' => $supplier_2,
                'total_masuk' => 10000,
            ],
            [
                'kd_masuk' => 'KMSK03',
                'tgl_masuk' => '2024-09-02',
                'user_id' => $user_3,
                'kd_supplier' => $supplier_3,
                'total_masuk' => 15000,
            ]
        ]);
    }
}
