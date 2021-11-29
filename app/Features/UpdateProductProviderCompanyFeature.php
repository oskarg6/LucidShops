<?php

namespace App\Features;

use App\Domains\ProductProviderCompany\Jobs\GetProductProviderCompanyJob;
use App\Domains\ProductProviderCompany\Jobs\UpdateProductProviderCompanyJob;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class UpdateProductProviderCompanyFeature extends Feature
{
    public function handle(Request $request)
    {
        $company = $this->run(GetProductProviderCompanyJob::class, [
            'id' => $request->id,
        ]);

        $companyUpdated = $this->run(UpdateProductProviderCompanyJob::class, [
            'company' => $company,
            'data' => $request->all(),
        ]);

        return $this->run(new RespondWithJsonJob($companyUpdated));
    }
}
