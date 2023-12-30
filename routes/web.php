<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('index');

Route::group(['prefix' => 'hotels'], function () {
    //hotels
    Route::get('/rooms/{id}', [App\Http\Controllers\Hotels\HotelsController::class, 'rooms'])->name('hotel.rooms');
    Route::get('/rooms-details/{id}', [App\Http\Controllers\Hotels\HotelsController::class, 'roomDetails'])->name('hotel.rooms.details');
    Route::post('/rooms-booking/{id}', [App\Http\Controllers\Hotels\HotelsController::class, 'roomBooking'])->name('hotel.rooms.booking');

    //payments
    Route::get('/pay', [App\Http\Controllers\Hotels\HotelsController::class, 'payWithPayPal'])->name('hotel.pay')->middleware('check.price');
    Route::get('/success', [App\Http\Controllers\Hotels\HotelsController::class, 'success'])->name('hotel.success')->middleware('check.price');
});


//users
Route::get('users/my-bookings', [App\Http\Controllers\Users\UsersController::class, 'myBookings'])->name('users.bookings')->middleware('auth:web');
