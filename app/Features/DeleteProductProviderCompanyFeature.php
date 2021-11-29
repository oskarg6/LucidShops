<?php

namespace App\Features;

use App\Domains\ProductProviderCompany\Jobs\DeleteProductProviderCompanyJob;
use App\Domains\ProductProviderCompany\Jobs\GetProductProviderCompanyJob;
use Illuminate\Http\Request;
use Lucid\Units\Feature;

class DeleteProductProviderCompanyFeature extends Feature
{
    public function handle(Request $request)
    {
        $company = $this->run(GetProductProviderCompanyJob::class, [
            'id' => $request->id,
        ]);

        $this->run(DeleteProductProviderCompanyJob::class, [
            'company' => $company,
        ]);
    }
}
