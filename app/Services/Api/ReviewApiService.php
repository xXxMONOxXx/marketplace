<?php

namespace App\Services\Api;

use App\Models\Review;
use App\Repositories\Api\BaseApiRepository;

class ReviewApiService extends BaseApiService
{
    public function __construct()
    {
        parent::__construct(new BaseApiRepository(new Review()));
    }
}
