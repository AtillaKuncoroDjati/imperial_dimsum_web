<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dimsumm;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;


Route::get('/', function () {
    return view('home');
});


Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::post('/reservasi', [ReservationController::class, 'store'])->name('reservasi.store');

Route::get('/search', [dimsumm::class, 'search'])->name('dim_sum.search');


Route::post('/send-contact', [ContactController::class, 'send'])->name('contact.send');


Route::get('/reservasi', [ReservationController::class, 'create']);
Route::post('/reservasi', [ReservationController::class, 'store']);



