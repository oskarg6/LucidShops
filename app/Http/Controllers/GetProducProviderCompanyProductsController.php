<?php

namespace App\Http\Controllers;

use App\Features\GetAllProductsFromProviderCompanyFeature;
use Lucid\Units\Controller;

class GetProducProviderCompanyProductsController extends Controller
{
    public function getFromCompany()
    {
        return $this->serve(GetAllProductsFromProviderCompanyFeature::class);
    }
}
