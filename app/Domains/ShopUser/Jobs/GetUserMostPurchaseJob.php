<?php

namespace App\Domains\ShopUser\Jobs;

use App\Repositories\ShopUserRepository;
use Lucid\Units\Job;

class GetUserMostPurchaseJob extends Job
{
    protected $shopUserRepository;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct(ShopUserRepository $shopUserRepository)
    {
        $this->shopUserRepository = $shopUserRepository;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        return $this->shopUserRepository->getMostPurchase();
    }
}
