<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('shop')->insert([
                'name' => 'shop '.$i,
                'address' => 'street -'.$i,
                'url' => 'shop-'.$i.'.com',
            ]);
        }
    }
}
