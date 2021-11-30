<?php

namespace App\Features;

use App\Domains\Shop\Jobs\GetMostSellShopsJob;
use App\Operations\GetMostSellProductsByShopOperation;
use App\Repositories\ProductRepository;
use App\Repositories\ShopRepository;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class GetMostSellShopsFeature extends Feature
{
    public function handle(Request $request)
    {
        $shops = $this->run(GetMostSellShopsJob::class, [
            'ShopRepository' => new ShopRepository,
        ]);

        return $this->run(new RespondWithJsonJob($shops));
    }
}
