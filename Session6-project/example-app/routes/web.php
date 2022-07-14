<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\UserController;
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
    return view('welcome'); //welcome.blade.php
});

Route::get('/greeting', function () {
    return 'Hello World';
});
Route::get('/user/{name}', [UserController::class,'show']);
Route::redirect('/here', '/user/hooo');

Route::controller(FlightController::class)->group(function () {
    Route::get('/flight/create/{name}', 'create');
    Route::get('/flight/show/{id}', 'showFlight'); 
    Route::get('/flight/update/{id}/{name}', 'updateFlight'); 
    Route::get('/flight/delete/{id}', 'deleteFlight'); 
    Route::get('/flight/hi', 'sayHi'); 
});



