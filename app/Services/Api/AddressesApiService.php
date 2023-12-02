<?php

namespace App\Services\Api;

use App\Models\Address;
use App\Repositories\Api\BaseApiRepository;

class AddressesApiService extends BaseApiService
{
    public function __construct()
    {
        parent::__construct(new BaseApiRepository(new Address()));
    }

}
