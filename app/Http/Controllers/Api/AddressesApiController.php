<?php

namespace App\Http\Controllers\Api;

use App\Services\Api\AddressesApiService;
use App\Services\Api\BaseApiService;

class AddressesApiController extends BaseApiController
{
    public function __construct(AddressesApiService $service)
    {
        parent::__construct($service);
    }

}
