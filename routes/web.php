<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; # don't forgot to add thi
use Illuminate\Support\Facades\Auth;
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

Route::get('/login', function () {
    return view('welcome');
});

Route :: resource('my','App\Http\Controllers\TaskController');
//for some reason, we must specify App not app even the folder path said app
Route::get('/user','App\Http\Controllers\TaskController@index');

Route::get('/resume','App\Http\Controllers\TaskController@resume');

Route::get('/pyscript','App\Http\Controllers\TaskController@pyscript');

Route::get('/connection',"App\Http\Controllers\TaskController@getConnection");

Route::get('/resumegenerator','App\Http\Controllers\TaskController@resumegenerator');

Route::post('/resumegeneratorcontroller','App\Http\Controllers\TaskController@resumegeneratorcontroller');

Route::get('/trainingquery','App\Http\Controllers\TaskController@trainingquery');


Route::get('/laravelfirebase','App\Http\Controllers\TaskController@laravelfirebase');
