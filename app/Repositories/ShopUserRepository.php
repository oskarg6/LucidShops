<?php

namespace App\Repositories;


use App\Models\ShopUser;
use Illuminate\Support\Facades\DB;

class ShopUserRepository
{
    public function getMostPurchase()
    {
        $mostPurchase = DB::table('shop_user')
            ->select(DB::raw('shop_user.*, count(shop_user.id) as purchases'))
            ->join('order', 'order.shop_user_id', '=', 'shop_user.id')
            ->groupBy('shop_user.id')
            ->orderByDesc('purchases')
            ->get();

        return ShopUser::hydrate($mostPurchase->toArray());
    }
}
