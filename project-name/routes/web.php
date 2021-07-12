<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowRoomsController;
use App\Http\Controllers\BookingController;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/test', function(){return "Goodbay!";});

Route::get('/rooms', ShowRoomsController::class);

/*
Route::get('/bookings', 'BookingController@index');
Route::get('/bookings/create', 'BookingController@create');
Route::post('/bookings', 'BookingController@store');
Route::get('/bookings/{booking}', 'BookingController@show');
Route::get('/bookings/{booking}/edit', 'BookingController@edit');
Route::put('/bookings/{booking}', 'BookingController@update');
Route::delete('/bookings/{booking}', 'BookingController@destroy');
*/
Route::resource('bookings', BookingController::class);
