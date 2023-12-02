<?php

namespace App\Services\Api;

use App\Models\Role;
use App\Repositories\Api\BaseApiRepository;
use Illuminate\Database\Eloquent\Model;

class RoleApiService extends BaseApiService
{
    public function __construct()
    {
        parent::__construct(new BaseApiRepository(new Role()));
    }
}
