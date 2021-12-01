<?php

namespace App\Features;

use App\Domains\ProductProviderCompany\Jobs\GetProductProviderCompanyJob;
use App\Domains\ProductProviderCompany\Jobs\UpdateProductProviderCompanyJob;
use App\Exceptions\ResourceNotFoundException;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonErrorJob;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

class UpdateProductProviderCompanyFeature extends Feature
{
    public function handle(Request $request)
    {
        $company = $this->run(GetProductProviderCompanyJob::class, [
            'id' => $request->id,
        ]);

        if (empty($company)) {
            return $this->run(new RespondWithJsonErrorJob('Company not found', 404, 404));
        }

        $companyUpdated = $this->run(UpdateProductProviderCompanyJob::class, [
            'company' => $company,
            'data' => $request->all(),
        ]);

        return $this->run(new RespondWithJsonJob($companyUpdated));
    }
}
