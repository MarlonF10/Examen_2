<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutController;
use App\Http\Controllers\PassengerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\AgencyController;
use App\Http\Controllers\PromotionController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\TravelTicketController;
use App\Http\Controllers\TravelListingController;
use App\Http\Controllers\MechanicController;
use App\Http\Controllers\TransportController;
use App\Http\Controllers\ServiceController;
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
Route::resource('rout', RoutController::class);
Route::resource('passenger', PassengerController::class);
Route::resource('customer', CustomerController::class);
Route::resource('driver', DriverController::class);
Route::resource('agency', AgencyController::class);
Route::resource('promotion', PromotionController::class);
Route::resource('reservation', ReservationController::class);
Route::resource('travel-ticket', TravelTicketController::class);
Route::resource('travel-listing', TravelListingController::class);
Route::resource('mechanic', MechanicController::class);
Route::resource('transport', TransportController::class);
Route::resource('service', ServiceController::class);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
