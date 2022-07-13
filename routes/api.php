<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(
    [
        'middleware' => 'api',
        'namespace' => 'App\Http\Controllers',
        'prefix' => 'auth'
    ],
    function ($router) {
        Route::post('register', 'AuthController@register');
        Route::post('logout', 'AuthController@logout');
        Route::get('profile', 'AuthController@profile');
        Route::post('refresh', 'AuthController@refresh');
    }
);

Route::group(
    [
        'namespace' => 'App\Http\Controllers',
        'prefix' => 'auth'
    ],
    function ($router) {
        Route::post('login', 'AuthController@login');
    }
);

Route::group(
    [
        'middleware' => 'api',
        'namespace' => 'App\Http\Controllers',
        'prefix' => 'v1'
    ],
    function () {
        Route::apiResource('mobil', 'MobilController');
        Route::get('mobilStok','MobilController@stock');
        Route::get('mobilTerjual','MobilController@laku');
        Route::apiResource('kendaraan', 'KendaraanController');
        Route::delete('kendaraan/{kendaraan}', 'KendaraanController@destroy')->name('kendaraan.delete');
        Route::put('kendaraan/{kendaraan}', 'KendaraanController@update')->name('kendaraan.update');
        Route::apiResource('motor', 'MotorController');
        Route::get('motorStok','MobilController@stock');
        Route::get('motorTerjual','MobilController@laku');
    }
);
