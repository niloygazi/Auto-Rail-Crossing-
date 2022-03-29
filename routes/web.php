<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('rail-crossing-details', 'ImportTrainDetails\ImportTrainDetailsController@index');
Route::post('rail-crossing-details', 'ImportTrainDetails\ImportTrainDetailsController@import');

Route::get('admin_dash','Admin\DashBoardController@index');
Route::post('TrainDetails','Admin\DashBoardController@addData');
Route::get('trainTimeliness','Admin\DashBoardController@TimeTable');
