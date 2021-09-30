<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'App\Http\Controllers\AuthController@register');
Route::post('login', 'App\Http\Controllers\AuthController@login');
Route::post('logout', 'App\Http\Controllers\AuthController@logout')->middleware('auth:sanctum');

// Protected routes
Route::group(['middleware' => ['auth:sanctum'],'namespace' => 'App\Http\Controllers'], function () {
    Route::post('employee/create', 'EmployeeController@create');
    Route::get('getEmployees', 'EmployeeController@index');
    Route::get('edit/getEmployee/{id}', 'EmployeeController@getEmployee');
    Route::post('edit/update/{id}', 'EmployeeController@update');
    Route::post('employee/delete/{id}', 'EmployeeController@delete');
});


