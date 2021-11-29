<?php

namespace App\Domains\ProductProviderCompany\Jobs;

use App\Models\ProductProviderCompany;
use Lucid\Units\Job;

class GetProductProviderCompanyJob extends Job
{
    protected $id;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(int $id)
    {
        $this->id = $id;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return ProductProviderCompany::find($this->id);
    }
}
