<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Weather\Humidity;
use App\Models\Weather\Temperature;
use App\Traits\Http\ResponseTrait;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class DeviceController extends Controller{
    use ResponseTrait;
    public function save(Request $request): JsonResponse{
        try{
            $now = Carbon::now();
            $user = User::where('api_token', $request->api_token)->first();
            $date = $now->format('Y-m-d');
            $time = $now->format('H:i');
            $time .= ':00';

            $temperature = Temperature::where('date', '=', $date)->where('time', '=', $time)->where('station', $request->station)->first();

            if(!$temperature){
                Temperature::create([
                    'temperature' => number_format($request->temperature, 2, '.', ''),
                    'date' => $date,
                    'time' => $time,
                    'station' => $request->station,
                    'created_by' => $user->id
                ]);
            }

            $humidity = Humidity::where('date', '=', $date)->where('time', '=', $time)->where('station', $request->station)->first();

            if(!$humidity){
                Humidity::create([
                    'humidity' => number_format($request->humidity, 2, '.', ''),
                    'date' => $date,
                    'time' => $time,
                    'station' => $request->station,
                    'created_by' => $user->id
                ]);
            }

            return $this->apiResponse('0000', __('Successfully saved'));
        }catch (\Exception $e){
            return $this->apiResponse('1000', __('Error'));
        }
    }
}
