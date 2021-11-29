<?php

namespace App\Domains\ProductProviderCompany\Jobs;

use App\Models\ProductProviderCompany;
use Lucid\Units\Job;

class DeleteProductProviderCompanyJob extends Job
{
    protected $company;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(ProductProviderCompany $company)
    {
        $this->company = $company;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $this->company->delete();
    }
}
