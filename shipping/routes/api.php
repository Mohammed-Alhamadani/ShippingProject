<?php

use App\Http\Controllers\ContainerController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ShipmentController;
use App\Http\Controllers\TrackingController;
use App\Http\Controllers\UserController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login']);
Route::post('/logout',[UserController::class,'logout'])->middleware('auth:sanctum');



Route::middleware('auth:sanctum')->group(function(){

    Route::apiResource('users',UserController::class);
    Route::apiResource('container',ContainerController::class);
    Route::apiResource('package',PackageController::class);
    Route::apiResource('profile',ProfileController::class);
    Route::apiResource('shipment',ShipmentController::class);
    Route::apiResource('tracking',TrackingController::class);

    Route::get('users/{id}/profile',[UserController::class,'getProfile']);

});
