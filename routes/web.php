<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;



Route::get('/',[App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/su-kien',[App\Http\Controllers\EventController::class, 'index'])->name('event');
Route::get('/show/{id}',[App\Http\Controllers\EventController::class, 'show'])->name('event.show');


Route::get('/lien-he',[App\Http\Controllers\HomeController::class, 'contact'])->name('contact');

