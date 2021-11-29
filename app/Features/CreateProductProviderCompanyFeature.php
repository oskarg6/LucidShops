<?php

namespace App\Features;

use App\Domains\ProductProviderCompany\Jobs\CreateProductProviderCompanyJob;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class CreateProductProviderCompanyFeature extends Feature
{
    public function handle(Request $request)
    {
        $company = $this->run(CreateProductProviderCompanyJob::class, [
            'name' => $request->input('name'),
            'cif' => $request->input('cif'),
        ]);

        return $this->run(new RespondWithJsonJob($company));
    }
}
