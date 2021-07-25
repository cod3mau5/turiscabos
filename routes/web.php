<?php

use Illuminate\Support\Facades\Route;


Route::get('/',[App\Http\Controllers\PagesController::class, 'home'])->name('home');
Route::get('/services',[App\Http\Controllers\PagesController::class, 'services'])->name('services');
Route::get('/about-us',[App\Http\Controllers\PagesController::class, 'about'])->name('about');
Route::get('/gallery',[App\Http\Controllers\PagesController::class, 'gallery'])->name('gallery');
Route::get('/faq',[App\Http\Controllers\PagesController::class, 'faq'])->name('faq');

Route::get('/mx',[App\Http\Controllers\PagesController::class, 'mx'])->name('mx');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('internal');
