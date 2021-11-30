<?php

namespace App\Operations;

use App\Domains\Shop\Jobs\GetShopJob;
use App\Repositories\ProductRepository;
use Lucid\Units\Operation;

class GetMostSellProductsByShopOperation extends Operation
{
    protected $shopId;

    protected $productRepository;
    /**
     * Create a new operation instance.
     *
     * @return void
     */
    public function __construct(int $shopId, ProductRepository $productRepository)
    {
        $this->shopId = $shopId;
        $this->productRepository = $productRepository;
    }

    /**
     * Execute the operation.
     *
     * @return void
     */
    public function handle()
    {
        $shop = $this->run(GetShopJob::class, [
            'id' => $this->shopId,
        ]);

        return $this->productRepository->getMostSellsByShop($shop);
    }
}
