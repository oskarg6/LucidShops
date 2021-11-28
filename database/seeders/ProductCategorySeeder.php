<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('product_category')->insert([
                'name' => 'category '.$i,
                'slug' => 'category-'.$i,
                'description' => 'description product '.$i,
            ]);
        }
    }
}
