<?php
namespace App\Repositories;

use App\Models\Product;
use App\Models\Shop;
use Illuminate\Support\Facades\DB;

class ProductRepository
{
    public function getMostSellsByShop(Shop $shop)
    {
        $mostSell = DB::table('product')
            ->select(DB::raw('product.*, count(product.id) as sells'))
            ->join('product__order_relation', 'product__order_relation.product_id', '=', 'product.id')
            ->join('order', 'order.id', '=', 'product__order_relation.order_id')
            ->where('order.shop_id', '=', $shop->id)
            ->groupBy('product.id')
            ->orderByDesc('sells')
            ->get();

        return Product::hydrate($mostSell->toArray());
    }
}
