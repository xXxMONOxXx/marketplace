<?php

namespace App\Http\Controllers\Api;

use App\Services\Api\UserApiService;

class UsersApiController extends BaseApiController
{
    public function __construct(UserApiService $service)
    {
        parent::__construct($service);
    }
}
