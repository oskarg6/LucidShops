<?php

namespace App\Features;

use App\Domains\ProductProviderCompany\Jobs\GetProductProviderCompanyJob;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class GetAllProductsFromProviderCompanyFeature extends Feature
{
    public function handle(Request $request)
    {
        $company = $this->run(GetProductProviderCompanyJob::class, [
            'id' => $request->id,
        ]);

        return $this->run(new RespondWithJsonJob($company->products));
    }
}
