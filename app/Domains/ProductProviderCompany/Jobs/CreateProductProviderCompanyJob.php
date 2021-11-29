<?php

namespace App\Domains\ProductProviderCompany\Jobs;

use App\Models\ProductProviderCompany;
use Lucid\Units\Job;

class CreateProductProviderCompanyJob extends Job
{
    protected $name;

    protected $cif;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(string $name, string $cif)
    {
        $this->name = $name;
        $this->cif = $cif;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $company = new ProductProviderCompany();
        $company->name = $this->name;
        $company->cif = $this->cif;

        $company->save();

        return $company;
    }
}
