<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/event', [PageController::class, 'event'])->name('event');
Route::get('/media', [PageController::class, 'media'])->name('media');

/*
<!-- Using route names -->
<a href="{{ route('home') }}">Home</a>
<a href="{{ route('about') }}">About</a>
<a href="{{ route('contact') }}">Contact</a>

<a href="{{ url('/') }}">Home</a>
<a href="{{ url('/about') }}">About</a>
*/
