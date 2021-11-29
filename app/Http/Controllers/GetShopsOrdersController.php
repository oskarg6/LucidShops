<?php

namespace App\Http\Controllers;

use App\Features\GetAllOrdersFromShopFeature;
use Lucid\Units\Controller;

class GetShopsOrdersController extends Controller
{
    public function getFromShop()
    {
        return $this->serve(GetAllOrdersFromShopFeature::class);
    }
}
