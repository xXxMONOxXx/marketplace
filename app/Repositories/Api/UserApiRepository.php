<?php

namespace App\Repositories\Api;

use App\Models\User;

class UserApiRepository extends BaseApiRepository
{
    public function __construct()
    {
        parent::__construct(new User());
    }

    public function index()
    {
        return $this->model->with(['role', 'addresses'])->get();
    }

    public function find(int $id)
    {
        $query = $this->model->with(['role', 'addresses'])->newQuery();
        return $query->find($id);
    }

}
