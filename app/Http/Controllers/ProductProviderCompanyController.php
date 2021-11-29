<?php

namespace App\Http\Controllers;

use App\Features\CreateProductProviderCompanyFeature;
use App\Features\DeleteProductProviderCompanyFeature;
use App\Features\GetAllProductProviderCompaniesFeature;
use App\Features\GetProductProviderCompanyFeature;
use App\Features\UpdateProductProviderCompanyFeature;
use Lucid\Units\Controller;

class ProductProviderCompanyController extends Controller
{
    public function getAll()
    {
        return $this->serve(GetAllProductProviderCompaniesFeature::class);
    }

    public function get()
    {
        return $this->serve(GetProductProviderCompanyFeature::class);
    }

    public function create()
    {
        return $this->serve(CreateProductProviderCompanyFeature::class);
    }

    public function update()
    {
        return $this->serve(UpdateProductProviderCompanyFeature::class);
    }

    public function delete()
    {
        return $this->serve(DeleteProductProviderCompanyFeature::class);
    }
}
