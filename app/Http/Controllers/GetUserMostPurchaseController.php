<?php

namespace App\Http\Controllers;

use App\Features\GetUserMostPurchaseFeature;
use Lucid\Units\Controller;

class GetUserMostPurchaseController extends Controller
{
    /**
     * Get a ranking of users ordered by purchases quantity ASC
     *
     * @return mixed
     */
    public function get()
    {
        return $this->serve(GetUserMostPurchaseFeature::class);
    }
}
