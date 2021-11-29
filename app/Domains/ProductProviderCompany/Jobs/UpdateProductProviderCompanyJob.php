<?php

namespace App\Domains\ProductProviderCompany\Jobs;

use App\Models\ProductProviderCompany;
use Lucid\Units\Job;

class UpdateProductProviderCompanyJob extends Job
{
    protected $company;

    protected $data;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(ProductProviderCompany $company, array $data)
    {
        $this->company = $company;
        $this->data = $data;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        if (!empty($this->data['name'])) {
            $this->company->name = $this->data['name'];
        }
        if (!empty($this->data['cif'])) {
            $this->company->cif = $this->data['cif'];
        }

        $this->company->save();

        return $this->company;
    }
}
