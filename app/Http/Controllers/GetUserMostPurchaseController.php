<?php

namespace App\Http\Controllers;

use App\Features\GetUserMostPurchaseFeature;
use Lucid\Units\Controller;

class GetUserMostPurchaseController extends Controller
{
    public function get()
    {
        return $this->serve(GetUserMostPurchaseFeature::class);
    }
}
