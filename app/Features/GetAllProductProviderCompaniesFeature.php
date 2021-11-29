<?php

namespace App\Features;

use App\Domains\ProductProviderCompany\Jobs\GetAllProductProviderCompaniesJob;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class GetAllProductProviderCompaniesFeature extends Feature
{
    public function handle(Request $request)
    {
        $companies = $this->run(GetAllProductProviderCompaniesJob::class, []);

        return $this->run(new RespondWithJsonJob($companies));
    }
}
