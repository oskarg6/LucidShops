<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('order')->insert([
                'total_price' => $i + 1,
                'shop_id' => $i + 1,
                'shop_user_id' => $i + 1,
            ]);
        }
    }
}
