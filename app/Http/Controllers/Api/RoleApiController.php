<?php

namespace App\Http\Controllers\Api;

use App\Services\Api\RoleApiService;

class RoleApiController extends BaseApiController
{
    public function __construct(RoleApiService $service)
    {
        parent::__construct($service);
    }

}
