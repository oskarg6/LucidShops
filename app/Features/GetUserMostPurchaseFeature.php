<?php

namespace App\Features;

use App\Domains\ShopUser\Jobs\GetUserMostPurchaseJob;
use App\Repositories\ShopUserRepository;
use Illuminate\Http\Request;
use Lucid\Domains\Http\Jobs\RespondWithJsonJob;
use Lucid\Units\Feature;

/**
 * Get a ranking of users ordered by purchases quantity ASC
 */
class GetUserMostPurchaseFeature extends Feature
{
    public function handle(Request $request)
    {
        $users = $this->run(GetUserMostPurchaseJob::class, [
            'ShopUserRepository' => new ShopUserRepository,
        ]);

        return $this->run(new RespondWithJsonJob($users));
    }
}
