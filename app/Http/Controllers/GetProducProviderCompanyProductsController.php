<?php

namespace App\Http\Controllers;

use App\Features\GetAllProductsFromProviderCompanyFeature;
use Lucid\Units\Controller;

class GetProducProviderCompanyProductsController extends Controller
{
    /**
     * Get all products from a company
     *
     * @return mixed
     */
    public function getFromCompany()
    {
        return $this->serve(GetAllProductsFromProviderCompanyFeature::class);
    }
}
