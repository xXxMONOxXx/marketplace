<?php

namespace App\Services\Api;

use App\Models\Category;
use App\Repositories\Api\BaseApiRepository;

class CategoryApiService extends BaseApiService
{
    public function __construct()
    {
        parent::__construct(new BaseApiRepository(new Category()));
    }

}
