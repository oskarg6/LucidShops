<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('product')->insert([
                'name' => 'product '.$i,
                'slug' => 'product-'.$i,
                'description' => Str::random(10),
                'price' => $i,
            ]);
        }
    }
}
