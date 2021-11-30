<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopUserOrder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->seed(1, 10);
        $this->seed(2, 5);
        $this->seed(3, 1);
    }

    private function seed(int $orderId, int $rows)
    {
        for ($i = 0; $i < $rows; $i++) {
            DB::table('product__order_relation')->insert([
                'product_id' => $i + 1,
                'order_id' => $orderId,
            ]);
        }
    }
}
