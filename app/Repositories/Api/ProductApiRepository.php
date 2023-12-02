<?php

namespace App\Repositories\Api;

use App\Models\Product;

class ProductApiRepository extends BaseApiRepository
{
    public function __construct()
    {
        parent::__construct(new Product());
    }

    public function index()
    {
        return $this->model->with(['categories'])->get();
    }

}
