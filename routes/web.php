<?php

use App\Http\Controllers\CongregationController;
use App\Http\Controllers\LaunchController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');


Route::get('/launches/{congregationId}/describe/{statusId}', [LaunchController::class, 'show'])->name('launches.show');
Route::get('/launches/{congregationId}/update/{launchId}/{statusNew}', [LaunchController::class, 'update'])->name('launches.update');
Route::get('/launches/{id}', [LaunchController::class, 'index'])->name('launches.index');
Route::post('/launches/{id}', [LaunchController::class, 'store'])->name('launches.store');


    Route::get('/congregations', [CongregationController::class, 'index'])->name('congregations.index');
    Route::get('/congregations/{id}', [CongregationController::class, 'show'])->name('congregations.show');
    Route::get('/congregations/area/{area}', [CongregationController::class, 'index'])->name('congregations.indexArea');

Route::get('/reports', [UserController::class, 'index'])->name('reports.index');
Route::get('/settings', [UserController::class, 'index'])->name('settings.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
