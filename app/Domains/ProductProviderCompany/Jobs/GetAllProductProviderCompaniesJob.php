<?php

namespace App\Domains\ProductProviderCompany\Jobs;

use App\Models\ProductProviderCompany;
use Lucid\Units\Job;

class GetAllProductProviderCompaniesJob extends Job
{
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return ProductProviderCompany::all();
    }
}
