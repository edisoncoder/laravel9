<?php

use Illuminate\Support\Facades\Route;

Route::apiResource('cons', 'App\Http\Controllers\api\CongregationsController');
Route::apiResource('launch', 'App\Http\Controllers\api\LaunchController');
