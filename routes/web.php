<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('course/{slug}', [PagesController::class, 'landingPages'])->name('landing-page');

Route::get('login', [AuthController::class, 'showLoginForm'])->name('login.form');
Route::post('auth-login', [AuthController::class, 'login'])->name('login');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');
Route::post('course-register/{landingPageId}', [LandingPageController::class, 'register'])->name('course-register');

Route::middleware('is_admin')->prefix('admin')->group(function () {
    Route::get('/', function () {
        return redirect()->route('banners.index');
    })->name('admin.home');
    Route::resource('banners', BannerController::class)->names('banners');
    Route::resource('landing-pages', LandingPageController::class)->names('landing-pages');
});
