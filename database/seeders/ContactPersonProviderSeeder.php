<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContactPersonProviderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 10; $i++) {
            DB::table('contact_person_provider')->insert([
                'name' => 'Person '.$i,
                'email' => Str::random(10).'@gmail.com',
                'phone' => '+3466633322'.$i,
                'function' =>  Str::random(10),
                'product_provider_company_id' => $i + 1,
            ]);
        }
    }
}
