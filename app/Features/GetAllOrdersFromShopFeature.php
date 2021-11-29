<?php

namespace App\Features;

use App\Domains\Shop\Jobs\GetShopJob;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class GetAllOrdersFromShopFeature extends Feature
{
    public function handle(Request $request)
    {
        $shop = $this->run(GetShopJob::class, [
            'id' => $request->shopId,
        ]);

        return $this->run(new RespondWithJsonJob($shop->orders));
    }
}
