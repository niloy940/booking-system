<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ScheduleController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SlotController;
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
    return view('welcome');
});

Route::resource('services', ServiceController::class);
Route::resource('schedules', ScheduleController::class);

Route::get('schedules/{schedule}/slots', [SlotController::class, 'index']);
Route::get('schedules/{schedule}/slots/create', [SlotController::class, 'create']);
Route::post('schedules/{schedule}/slots', [SlotController::class, 'store']);
Route::get('schedules/{schedule}/slots/{slot}', [SlotController::class, 'show']);
Route::get('schedules/{schedule}/slots/{slot}/edit', [SlotController::class, 'edit']);
Route::patch('schedules/{schedule}/slots/{slot}', [SlotController::class, 'update']);
Route::delete('schedules/{schedule}/slots/{slot}', [SlotController::class, 'destroy']);

Route::resource('bookings', BookingController::class);

// Route::get('users/{user}/schedules/{schedule}/slots/{slot}/bookings', [BookingController::class, 'index']);
// Route::get('users/{user}/schedules/{schedule}/slots/{slot}/bookings/create', [BookingController::class, 'create']);
// Route::post('users/{user}/schedules/{schedule}/slots/{slot}/bookings', [BookingController::class, 'store']);
// Route::get('users/{user}/schedules/{schedule}/slots/{slot}/bookings/{booking}', [BookingController::class, 'show']);
// Route::get('users/{user}/schedules/{schedule}/slots/{slot}/bookings/{booking}/edit', [BookingController::class, 'edit']);
// Route::patch('users/{user}/schedules/{schedule}/slots/{slot}/bookings/{booking}', [BookingController::class, 'update']);
// Route::delete('users/{user}/schedules/{schedule}/slots/{slot}/bookings/{booking}', [BookingController::class, 'destroy']);
