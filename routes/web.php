<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'home'])->name('home');
Route::post('register/buyer', [\App\Http\Controllers\RegistrationController::class, 'store'])->name('store-buyer');
Route::post('register/vendor', [\App\Http\Controllers\RegistrationController::class, 'storeVendor'])->name('store-vendor');


Route::post('/pay', [App\Http\Controllers\RegistrationController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [App\Http\Controllers\RegistrationController::class, 'handleGatewayCallback']);
