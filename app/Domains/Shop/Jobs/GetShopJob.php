<?php

namespace App\Domains\Shop\Jobs;

use App\Models\Shop;
use Lucid\Units\Job;

class GetShopJob extends Job
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
        $shop = Shop::find($this->id);

        return $shop;
    }
}
