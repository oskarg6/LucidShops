<?php

namespace App\Http\Controllers;

use App\Features\GetMostSellShopsFeature;
use Lucid\Units\Controller;

class GetMostSellShopsController extends Controller
{
    /**
     * Get a ranking of shops ordered by sales quantity ASC
     *
     * @return mixed
     */
    public function get()
    {
        return $this->serve(GetMostSellShopsFeature::class);
    }
}
