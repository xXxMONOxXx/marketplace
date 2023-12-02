<?php

namespace App\Http\Controllers\Api;

use App\Services\Api\BaseApiService;
use App\Services\Api\CategoryApiService;

class CategoryApiController extends BaseApiController
{
    public function __construct(CategoryApiService $service)
    {
        parent::__construct($service);
    }
}
