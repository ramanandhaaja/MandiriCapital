<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/funding', [PageController::class, 'funding'])->name('funding');
Route::get('/value', [PageController::class, 'value'])->name('value');
Route::get('/media', [PageController::class, 'media'])->name('media');
Route::get('/report', [PageController::class, 'report'])->name('report');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');



/*
<!-- Using route names -->
<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About</a>
<a href="{{ route('contact') }}">Contact</a>

<a href="{{ url('/') }}">Home</a>
<a href="{{ url('/about') }}">About</a>
*/


