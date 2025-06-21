<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FaskesController;
use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\LogKontroller;
use App\Http\Controllers\TransaksiController;

Route::group(['prefix' => 'auth'], function () {
    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('register', 'App\Http\Controllers\AuthController@register');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');
    Route::put('update', 'App\Http\Controllers\AuthController@update');
    Route::post('uploadProfilePicture', 'App\Http\Controllers\AuthController@update');
});

// --------------FASKESKUY-------------
Route::get('/faskes', [FaskesController::class, 'index']);
Route::get('/infostok', [FaskesController::class, 'infostok']);
Route::get('/faskes/{id}', [FaskesController::class, 'show']);
Route::post('/faskes', [FaskesController::class, 'store']);
Route::put('/faskes/{id}', [FaskesController::class, 'update']);
Route::delete('/faskes/{id}', [FaskesController::class, 'destroy']);
// --------------AMBULANCEKUY-------------
Route::get('/ambulance', [AmbulanceController::class, 'index']);
Route::get('/ambulance/{id}', [AmbulanceController::class, 'show']);
Route::post('/ambulance', [AmbulanceController::class, 'store']);
Route::put('/ambulance/{id}', [AmbulanceController::class, 'update']);
Route::delete('/ambulance/{id}', [AmbulanceController::class, 'destroy']);
// --------------LOGKYUUU-------------
Route::get('/log', [LogKontroller::class, 'index']);
Route::get('/log/{id}', [LogKontroller::class, 'show']);
// --------------TRANSAKSI-------------
Route::get('/transaksi', [TransaksiController::class, 'index']);





// Route::delete('/faskes/{id}', [FaskesController::class, 'destroy'])->middleware('\App\Http\Middleware\isSuperAdmin');