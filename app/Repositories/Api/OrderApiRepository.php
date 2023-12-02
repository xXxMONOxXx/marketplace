<?php

namespace App\Repositories\Api;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Database\Eloquent\Model;

class OrderApiRepository extends BaseApiRepository
{
    public function __construct()
    {
        parent::__construct(new Order());
    }

    public function index()
    {
        return $this->model->with(['products'])->get();
    }

    public function create(array $request): Model{
        $model = $this->model->newInstance($request);
        $model->save();
        foreach ($request['products'] as $product){
            $model->products()->attach(Product::find($product['id']), ['amount' => $product['amount']]);
        }
        $query = $this->model->with(['products'])->newQuery();
        return $query->find($model->id);
    }

    public function find(int $id)
    {
        $query = $this->model->with(['products'])->newQuery();
        return $query->find($id);
    }
}

