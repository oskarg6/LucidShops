<?php

namespace App\Domains\Shop\Jobs;

use App\Models\Shop;
use Lucid\Units\Job;

class GetAllShopsJob extends Job
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
        return Shop::all();
    }
}
