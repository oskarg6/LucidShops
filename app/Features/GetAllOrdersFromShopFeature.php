<?php

namespace App\Features;

use App\Domains\Shop\Jobs\GetShopJob;
use App\Exceptions\ResourceNotFoundException;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonErrorJob;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

/**
 * Get all the orders by Shop
 */
class GetAllOrdersFromShopFeature extends Feature
{
    public function handle(Request $request)
    {
        $shop = $this->run(GetShopJob::class, [
            'id' => $request->shopId,
        ]);

        if (empty($shop)) {
            return $this->run(new RespondWithJsonErrorJob('Shop not found', 404, 404));
        }

        return $this->run(new RespondWithJsonJob($shop->orders));
    }
}
