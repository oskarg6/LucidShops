<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoryRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        for ($i = 0; $i < 10; $i++) {
            DB::table('product__category')->insert([
                'product_id' => $i + 1,
                'product_category_id' => $i + 1,
            ]);
        }
    }
}
