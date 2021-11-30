<?php

namespace App\Domains\Shop\Jobs;

use App\Repositories\ShopRepository;
use Lucid\Units\Job;

class GetMostSellShopsJob extends Job
{
    protected $shopRepository;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(ShopRepository $shopRepository)
    {
        $this->shopRepository = $shopRepository;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return $this->shopRepository->getMostSell();
    }
}
