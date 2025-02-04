<?php

use App\Http\Controllers\Api\NumberFactController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BasicInformationController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/basic-info', [BasicInformationController::class, 'basicInfo']);
Route::get('/number-fun-fact/{num}', [NumberFactController::class, 'numberFact']);