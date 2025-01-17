<?php

use App\Http\Controllers\API\DeviceController;
use App\Http\Controllers\API\HumidityController;
use App\Http\Controllers\API\StationsController;
use App\Http\Controllers\API\TemperatureController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


/**
 *  Authentication routes
 */
Route::prefix('/auth')->group(function (){
    Route::post('/',                                   [AuthController::class, 'auth'])->name('api.auth');
    Route::post('/register',                           [AuthController::class, 'register'])->name('api.auth.register');

    /* Restart password */
    Route::prefix('/restart-password')->group(function (){
        Route::post('/generate-pin',                         [AuthController::class, 'generatePIN'])->name('api.auth.restart-password.generate-pin');
        Route::post('/verify-pin',                           [AuthController::class, 'verifyPIN'])->name('api.auth.restart-password.verify-pin');
        Route::post('/new-password',                         [AuthController::class, 'newPassword'])->name('api.auth.restart-password.new-password');
    });
});

/**
 *  All routes related to weather API
 */
Route::prefix('/weather')->middleware('api-auth')->group(function (){

    /**
     *  Device routes
     */
    Route::prefix('/device')->group(function (){
        Route::post('/save',                                 [DeviceController::class, 'save'])->name('api.weather.device.save');
    });

    /**
     *  Open API data
     *  1. Stations
     *  2. Data collections
     */
    Route::prefix('/stations')->group(function (){
        Route::post('/',                                     [StationsController::class, 'index'])->name('api.weather.stations');
    });

    Route::prefix('/temperature')->group(function (){
        Route::post('/',                                     [TemperatureController::class, 'index'])->name('api.weather.temperature');
    });

    Route::prefix('/humidity')->group(function (){
        Route::post('/',                                     [HumidityController::class, 'index'])->name('api.weather.humidity');
        Route::get ('/fetch',                                [HumidityController::class, 'index'])->name('api.weather.humidity-get');
    });
});

/**
 *  Get routes; Used as simple samples; No authorisation needed
 */
Route::prefix('/samples/weather/')->group(function (){
    Route::prefix('/stations')->group(function (){
        Route::get ('/',                                     [StationsController::class, 'index'])->name('api.samples.weather.stations');
    });

    Route::prefix('/temperature')->group(function (){
        Route::get ('/',                                     [TemperatureController::class, 'index'])->name('api.samples.weather.temperature');
    });

    Route::prefix('/humidity')->group(function (){
        Route::get ('/',                                     [HumidityController::class, 'index'])->name('api.samples.weather.humidity');
    });
});
