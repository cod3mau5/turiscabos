<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

Route::get('/',[Controllers\PagesController::class, 'home'])->name('home');
Route::get('/services',[Controllers\PagesController::class, 'services'])->name('services');
Route::get('/about-us',[Controllers\PagesController::class, 'about'])->name('about');
Route::get('/gallery',[Controllers\PagesController::class, 'gallery'])->name('gallery');
Route::get('/faq',[Controllers\PagesController::class, 'faq'])->name('faq');

Route::get('/mx',[Controllers\PagesController::class, 'mx'])->name('mx');

Auth::routes();

Route::get('/home', [Controllers\HomeController::class, 'index'])->name('internal');

Route::resource('reservations', Controllers\ReservationController::class);
Route::get('/transfers', [Controllers\ReservationController::class, 'getTransfers'])->name('get-transfers');
Route::get('/reservations-excel',[ Controllers\ReservationController::class,'exportExcel'])->name('export-excel');
