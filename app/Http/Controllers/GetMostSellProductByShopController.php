<?php

namespace App\Http\Controllers;

use App\Features\GetProductMostSellByShopFeature;
use Lucid\Units\Controller;

class GetMostSellProductByShopController extends Controller
{
    public function get()
    {
        return $this->serve(GetProductMostSellByShopFeature::class);
    }
}
