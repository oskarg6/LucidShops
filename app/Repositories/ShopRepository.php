<?php

namespace App\Repositories;

use App\Models\Shop;
use Illuminate\Support\Facades\DB;

class ShopRepository
{
    public function getMostSell()
    {
        $mostSell = DB::table('shop')
            ->select(DB::raw('shop.*, count(shop.id) as sells'))
            ->join('order', 'order.shop_id', '=', 'shop.id')
            ->groupBy('shop.id')
            ->orderByDesc('sells')
            ->get();

        return Shop::hydrate($mostSell->toArray());
    }
}
