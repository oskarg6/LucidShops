<?php

namespace App\Http\Controllers;

use App\Features\GetMostSellShopsFeature;
use App\Features\GetProductMostSellByShopFeature;
use Lucid\Units\Controller;

class GetMostSellShopsController extends Controller
{
    public function get()
    {
        return $this->serve(GetMostSellShopsFeature::class);
    }
}
