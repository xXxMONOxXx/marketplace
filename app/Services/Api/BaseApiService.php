<?php

namespace App\Services\Api;

use App\Repositories\Api\BaseApiRepository;

class BaseApiService
{
    public function __construct(BaseApiRepository $repository)
    {
        $this->repository = $repository;
    }

    private $repository;

    public function index(){
        return $this->repository->index();
    }

    public function store(array $request){
        return $this->repository->create($request);
    }

    public function show($id){
        return $this->repository->find($id);
    }

    public function update(array $request, $id){
        return $this->repository->update($request, $id);
    }

    public function destroy($id){
        return $this->repository->delete($id);
    }

}
