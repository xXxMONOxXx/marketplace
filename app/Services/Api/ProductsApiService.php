<?php

namespace App\Services\Api;

use App\Repositories\Api\ProductApiRepository;

class ProductsApiService extends BaseApiService
{
    public function __construct(ProductApiRepository $repository)
    {
        parent::__construct($repository);
    }
}
