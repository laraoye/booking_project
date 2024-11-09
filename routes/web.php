<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HotelReservationController;
use App\Http\Controllers\FlightReservationController;

/*
|---------------------------------------------------------------------------|
| Web Routes                                                                |
|---------------------------------------------------------------------------|
*/

Route::get('/', function () {
    return view('welcome');
});

// Dashboard Route (Requires authentication)
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// Authentication Routes (Guest-only)
Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');

// Admin Routes (Only accessible to authenticated users with 'is_admin' role)
Route::resource('admin', AdminController::class)
    ->middleware('auth', 'is_admin');

// Profile Routes (Accessible only to authenticated users)
Route::get('/profile', [ProfileController::class, 'edit'])
    ->middleware('auth')
    ->name('profile.edit');
Route::put('/profile', [ProfileController::class, 'update'])
    ->middleware('auth')
    ->name('profile.update');

// Hotel Reservation Routes (Requires authentication)
Route::resource('hotel-reservations', HotelReservationController::class)
    ->middleware('auth');

// Flight Reservation Routes (Requires authentication)
Route::resource('flight-reservations', FlightReservationController::class)
    ->middleware('auth');

// Flight Reservation Routes (No authentication required for browsing flights)
Route::get('/flights', [FlightReservationController::class, 'index'])
    ->name('flights.index');
Route::get('/flights/create', [FlightReservationController::class, 'create'])
    ->name('flights.create');
Route::post('/flights', [FlightReservationController::class, 'store'])
    ->name('flights.store');


    Route::get('/hotels', [HotelReservationController::class, 'index'])
    ->name('hotels.index');
Route::get('/hotels/create', [HotelReservationController::class, 'create'])
    ->name('hotels.create');
Route::post('/hotels', [HotelReservationController::class, 'store'])
    ->name('hotels.store');

// Ensure auth.php exists for authentication routes
require __DIR__.'/auth.php';
