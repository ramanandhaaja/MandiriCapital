<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/about/filter/{tag}', [PageController::class, 'aboutFilter'])->name('about.filter');


Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/{slug}', [PageController::class, 'portfolioshow'])->name('portfolio.show');
Route::get('/portfolio/filter/{tag}', [PageController::class, 'portfolioFilter'])->name('portfolio.filter');

Route::get('/platform', [PageController::class, 'platform'])->name('platform');
Route::get('/platform/{slug}', [PageController::class, 'platformshow'])->name('platform.show');
Route::get('/platform/filter/{tag}', [PageController::class, 'platformFilter'])->name('platform.filter');

Route::get('/media', [PageController::class, 'media'])->name('media');
Route::get('/media/{slug}', [PageController::class, 'mediashow'])->name('media.show');
Route::get('/media/filter/{tag}', [PageController::class, 'mediaFilter'])->name('media.filter');

Route::get('/report', [PageController::class, 'report'])->name('report');
Route::get('/report/{slug}', [PageController::class, 'reportshow'])->name('report.show');
Route::get('/report/filter/{tag}', [PageController::class, 'reportFilter'])->name('report.filter');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/category/{slug}', [BlogController::class, 'byCategory'])->name('blog.category');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
