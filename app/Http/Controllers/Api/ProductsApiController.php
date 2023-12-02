<?php

namespace App\Http\Controllers\Api;

use App\Services\Api\ProductsApiService;

class ProductsApiController extends BaseApiController
{
    public function __construct(ProductsApiService $service)
    {
        parent::__construct($service);
    }
}
