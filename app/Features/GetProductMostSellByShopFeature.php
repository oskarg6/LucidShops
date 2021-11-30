<?php

namespace App\Features;

use App\Domains\Product\Jobs\GetProductMostSellByShopJob;
use App\Operations\GetMostSellProductsByShopOperation;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

/**
 * Get a ranking of shop's products ordered by sells quantity ASC
 */
class GetProductMostSellByShopFeature extends Feature
{
    public function handle(Request $request)
    {
        $products = $this->run(GetMostSellProductsByShopOperation::class, [
            'shopId' => $request->shopId,
            'productRepository' => new ProductRepository(),
        ]);

        return $this->run(new RespondWithJsonJob($products));
    }
}
