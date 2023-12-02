<?php

namespace App\Services\Api;

use App\Models\User;
use App\Repositories\Api\BaseApiRepository;
use App\Repositories\Api\UserApiRepository;
use Hamcrest\Core\Is;

class UserApiService extends BaseApiService
{
    public function __construct(UserApiRepository $repository)
    {
        parent::__construct($repository);
    }
}
