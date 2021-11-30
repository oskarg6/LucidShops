<?php

namespace App\Http\Controllers;

use App\Features\GetProductMostSellByShopFeature;
use Lucid\Units\Controller;

class GetMostSellProductByShopController extends Controller
{
    /**
     * Get a ranking of shop's products ordered by sells quantity ASC
     *
     * @return mixed
     */
    public function get()
    {
        return $this->serve(GetProductMostSellByShopFeature::class);
    }
}
