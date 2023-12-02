<?php

namespace App\Services\Api;

use App\Repositories\Api\OrderApiRepository;

class OrderApiService extends BaseApiService
{
    public function __construct(OrderApiRepository $repository)
    {
        parent::__construct($repository);
    }

}
