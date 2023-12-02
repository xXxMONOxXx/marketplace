<?php

namespace App\Http\Controllers\Api;

use App\Services\Api\BaseApiService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseApiController extends Controller
{
    public function __construct(BaseApiService $service)
    {
        $this->service = $service;
    }

    private $service;

    public function createResponse($data = [], $status = 200, $message = 'Success.'): JsonResponse
    {
        return response()->json(
            data: [
                'data' => $data,
                'status' => $status,
                'message' => $message,
                'success' => $status === 200,
            ],
            status: $status);
    }

    public function index(){
        $data = $this->service->index();
        return $this->createResponse($data);
    }

    public function store(Request $request){
        $data = $this->service->store($request->all());
        return $this->createResponse($data);
    }

    public function show($id){
        $data = $this->service->show($id);
        return $this->createResponse($data);
    }

    public function update(Request $request, $id){
        $data = $this->service->update($request->all(), $id);
        return $this->createResponse($data);
    }

    public function destroy($id){
        $data = $this->service->destroy($id);
        return $this->createResponse($data);
    }
}
