<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Weather\Station;
use App\Models\Weather\Temperature;
use App\Traits\Http\ResponseTrait;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class TemperatureController extends Controller{
    use ResponseTrait;
    protected int $interval = 15;
    protected int $hours = 2;

    public function index(Request $request): JsonResponse{
        try{
            /**
             *  Manually set input variables
             */

            if(isset($request->hours) and intval($request->hours)) $this->hours = $request->hours;
            if(isset($request->interval) and intval($request->interval)) $this->interval = $request->interval;

            $now = ($this->interval < 5) ? Carbon::parse(date('Y-m-d H:i') . ':00' ) : Carbon::parse(date('Y-m-d H') . ':45:00' );
            $endDate = Carbon::now()->subHours($this->hours);

            $data = [];

            while(true){
                $dateTime = $now;

                if(isset($request->station) and intval($request->station)){
                    $temperature = Temperature::where('station', '=', $request->station)->where('date', '=', $dateTime->format('Y-m-d'))->where('time', '=', $dateTime->format('H:i') . ':00')->with('stationRel:id,title,description')->first(['id', 'temperature', 'unit', 'date', 'time', 'station']);
                }else{
                    $temperature = Temperature::where('date', '=', $dateTime->format('Y-m-d'))->where('time', '=', $dateTime->format('H:i') . ':00')->with('stationRel:id,title,description')->first(['id', 'temperature', 'unit', 'date', 'time', 'station']);
                }

                if($temperature){
                    $data[] = [
                        'date' => $dateTime->format('Y-m-d'),
                        'time' => $dateTime->format('H:i') . ':00',
                        'temperature' => $temperature
                    ];
                }

                if($endDate > $now) breaK;
                $now->subMinutes($this->interval);
            }

            return $this->apiResponse('0000', __('Success'), $data);
        }catch (\Exception $e){
            Log::debug($e->getCode() . ': ' . $e->getMessage());
            return $this->apiResponse('2000', __('Error'));
        }
    }
}
