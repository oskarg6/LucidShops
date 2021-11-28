<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductProviderCompanyRelationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('product__product_provider_company')->insert([
                'product_id' => $i + 1,
                'provider_company_id' => $i + 1,
            ]);
        }
    }
}
