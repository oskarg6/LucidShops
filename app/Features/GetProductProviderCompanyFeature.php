<?php

namespace App\Features;

use App\Domains\ProductProviderCompany\Jobs\GetProductProviderCompanyJob;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;
use Illuminate\Http\Request;

class GetProductProviderCompanyFeature extends Feature
{
    public function handle(Request $request)
    {
        $company = $this->run(GetProductProviderCompanyJob::class, [
            'id' => $request->id,
        ]);

        return $this->run(new RespondWithJsonJob($company));
    }
}
