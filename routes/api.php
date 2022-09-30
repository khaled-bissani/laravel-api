<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http \Controllers\MyController;

Route::group(['prefix' => 'test'], function(){
    Route::get("/api1", [MyController::class, 'stringSorting']);
    Route::get("/api2", [MyController::class, 'numberPlace']);
    Route::get("/api3", [MyController::class, 'decimalToBinary']);
    Route::get("/api4", [MyController::class, 'prefixNotation']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
