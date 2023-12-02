<?php

namespace App\Http\Controllers\Api;

use App\Services\Api\ReviewApiService;

class ReviewsApiController extends BaseApiController
{
    public function __construct(ReviewApiService $service)
    {
        parent::__construct($service);
    }
}
