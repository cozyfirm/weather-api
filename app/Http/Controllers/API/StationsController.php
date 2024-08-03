<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Weather\Station;
use App\Traits\Http\ResponseTrait;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StationsController extends Controller{
    use ResponseTrait;

    public function index(Request $request): JsonResponse{
        try{
            return $this->apiResponse('0000', __('Success'), Station::get(['id', 'title', 'description'])->toArray());
        }catch (\Exception $e){
            return $this->apiResponse('2000', __('Error'));
        }
    }
}
