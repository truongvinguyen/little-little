<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/su-kien',[App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('/lien-he',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');