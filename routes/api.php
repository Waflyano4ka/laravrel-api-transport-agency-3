<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\Api\CityController;
use \App\Http\Controllers\Api\OfficeController;
use \App\Http\Controllers\Api\RouteController;
use \App\Http\Controllers\Api\ModelController;
use \App\Http\Controllers\Api\TransportController;
use \App\Http\Controllers\Api\ScheduleController;
use \App\Http\Controllers\Api\PassengerController;
use \App\Http\Controllers\Api\TicketController;
use \App\Http\Controllers\Api\PostController;
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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('cities',[CityController::class, 'index']);
Route::get('cities/{id}',[CityController::class, 'show']);
Route::post('cities',[CityController::class, 'store']);
Route::put('cities/{id}',[CityController::class, 'update']);
Route::delete('cities/{id}',[CityController::class, 'destroy']);
Route::put('cities/delete/{id}',[CityController::class, 'delete']);

Route::get('offices',[OfficeController::class, 'index']);
Route::get('offices/{id}',[OfficeController::class, 'show']);
Route::post('offices',[OfficeController::class, 'store']);
Route::put('offices/{id}',[OfficeController::class, 'update']);
Route::delete('offices/{id}',[OfficeController::class, 'destroy']);
Route::put('offices/delete/{id}',[OfficeController::class, 'delete']);

Route::get('routes',[RouteController::class, 'index']);
Route::get('routes/{id}',[RouteController::class, 'show']);
Route::post('routes',[RouteController::class, 'store']);
Route::put('routes/{id}',[RouteController::class, 'update']);
Route::delete('routes/{id}',[RouteController::class, 'destroy']);
Route::put('routes/delete/{id}',[RouteController::class, 'delete']);

Route::get('models',[ModelController::class, 'index']);
Route::get('models/{id}',[ModelController::class, 'show']);
Route::post('models',[ModelController::class, 'store']);
Route::put('models/{id}',[ModelController::class, 'update']);
Route::delete('models/{id}',[ModelController::class, 'destroy']);
Route::put('models/delete/{id}',[ModelController::class, 'delete']);

Route::get('transports',[TransportController::class, 'index']);
Route::get('transports/{id}',[TransportController::class, 'show']);
Route::post('transports',[TransportController::class, 'store']);
Route::put('transports/{id}',[TransportController::class, 'update']);
Route::delete('transports/{id}',[TransportController::class, 'destroy']);
Route::put('transports/delete/{id}',[TransportController::class, 'delete']);

Route::get('schedules',[ScheduleController::class, 'index']);
Route::get('schedules/{id}',[ScheduleController::class, 'show']);
Route::post('schedules',[ScheduleController::class, 'store']);
Route::put('schedules/{id}',[ScheduleController::class, 'update']);
Route::delete('schedules/{id}',[ScheduleController::class, 'destroy']);
Route::put('schedules/delete/{id}',[ScheduleController::class, 'delete']);

Route::get('passengers',[PassengerController::class, 'index']);
Route::get('passengers/{id}',[PassengerController::class, 'show']);
Route::post('passengers',[PassengerController::class, 'store']);
Route::put('passengers/{id}',[PassengerController::class, 'update']);
Route::delete('passengers/{id}',[PassengerController::class, 'destroy']);
Route::put('passengers/delete/{id}',[PassengerController::class, 'delete']);

Route::get('tickets',[TicketController::class, 'index']);
Route::get('tickets/{id}',[TicketController::class, 'show']);
Route::post('tickets',[TicketController::class, 'store']);
Route::put('tickets/{id}',[TicketController::class, 'update']);
Route::delete('tickets/{id}',[TicketController::class, 'destroy']);
Route::put('tickets/delete/{id}',[TicketController::class, 'delete']);

Route::get('posts',[PostController::class, 'index']);
Route::get('posts/{id}',[PostController::class, 'show']);
Route::post('posts',[PostController::class, 'store']);
Route::put('posts/{id}',[PostController::class, 'update']);
Route::delete('posts/{id}',[PostController::class, 'destroy']);
Route::put('posts/delete/{id}',[PostController::class, 'delete']);
