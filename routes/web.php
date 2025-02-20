<?php

use App\Filament\Resources\PublicationEmailDownloadResource as ResourcesPublicationEmailDownloadResource;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\PublicationController; // Added this line
use App\Http\Controllers\PublicationEmailDownloadResource; // Added this line
use Carbon\Language;
use Illuminate\Support\Facades\Route;

/*
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
*/

// Removed auth.php requirement since we're using Filament's authentication

Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/homestartup', [EmailController::class, 'homeStartupEmail'])->name('home.startup.email');
Route::post('/homeinvestors', [EmailController::class, 'homeInvestorEmail'])->name('home.investor.email');


Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/about/filter/{tag}', [PageController::class, 'aboutFilter'])->name('about.filter');

Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/filter/{tag}', [PageController::class, 'portfolioFilter'])->name('portfolio.filter');
Route::get('/portfolio/{slug}', [PageController::class, 'portfolioshow'])->name('portfolio.show');
Route::get('/portfolio/funding/{title}', [PageController::class, 'portfolioShowFunding'])->name('portfolio.show.funding');
Route::post('/portfoliogetinvestment', [EmailController::class, 'portfolioGetInvestmentEmail'])->name('portfolio.get.investment.email');
Route::post('/portfoliofunds', [EmailController::class, 'portfolioGetFunds'])->name('portfolio.funds.email');



Route::get('/platform', [PageController::class, 'platform'])->name('platform');
Route::get('/platform/filter/{tag}', [PageController::class, 'platformFilter'])->name('platform.filter');
Route::get('/platform/{slug}', [PageController::class, 'platformshow'])->name('platform.show');
Route::get('/platform-apply', [PageController::class, 'platformapply'])->name('platform.apply');
Route::post('/platform-apply', [EmailController::class, 'platformZenithEmail'])->name('platform.zenith.email');
Route::post('/platform', [EmailController::class, 'platformEmail'])->name('platform.email');



Route::get('/media', [PageController::class, 'media'])->name('media');
Route::get('/media/filter/{category}', [PageController::class, 'mediaFilter'])->name('media.filter');
Route::get('/media/{slug}', [PageController::class, 'mediashow'])->name('media.show');

Route::get('/report', [PageController::class, 'report'])->name('report');
Route::get('/report/filter/{tag}', [PageController::class, 'reportFilter'])->name('report.filter');
Route::get('/report/{slug}', [PageController::class, 'reportshow'])->name('report.show');
Route::post('/report/{publication}/download', [EmailController::class, 'reportdownload'])->name('report.download');

Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contactEmail', [EmailController::class, 'contactEmail'])->name('contact.email');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/category/{slug}', [BlogController::class, 'byCategory'])->name('blog.category');
Route::get('/blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

Route::get('language/{lang}', [LanguageController::class, 'switchLang'])->name('language.switch');

Route::get('/privacy-policy', [PageController::class, 'privacy'])->name('privacy-policy');
Route::get('/customer-care', [PageController::class, 'customerCare'])->name('customer-care');
