<?php

namespace App\Repositories\Api;

use Illuminate\Database\Eloquent\Model;

class BaseApiRepository
{

    protected $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function index()
    {
        return $this->model::all();
    }

    public function create(array $input): Model
    {
        $model = $this->model->newInstance($input);
        $model->save();
        return $model;
    }

    public function find(int $id)
    {
        $query = $this->model->newQuery();
        return $query->find($id);
    }

    public function update(array $input, int $id)
    {
        $query = $this->model->newQuery();
        $model = $query->findOrFail($id);
        $model->fill($input);
        $model->save();
        return $model;
    }

    public function delete(int $id)
    {
        $query = $this->model->newQuery();
        $model = $query->findOrFail($id);
        return $model->delete();
    }
}
