<?php

namespace App\Http\Controllers\Api;

use App\Services\Api\OrderApiService;

class OrdersApiController extends BaseApiController
{
    public function __construct(OrderApiService $service)
    {
        parent::__construct($service);
    }
}
