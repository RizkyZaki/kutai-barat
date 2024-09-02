<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\InformationController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\TagsController;
use Illuminate\Support\Facades\Route;

Route::controller(ClientController::class)->group(function () {
  Route::get('/', 'home');
  Route::get('news', 'news');
  Route::get('news/{slug}', 'newsDetail');
  Route::get('information/{slug}', 'info');
  Route::get('contact', 'contact');
  Route::post('contact', 'store')->name('contact.submit');
  Route::post('/comments', 'commentStore')->name('comments.store');
  Route::post('/comments/reply/{comment}', 'reply')->name('comments.reply');
});
Route::middleware('guest')->group(function () {
  Route::get('login', [AuthController::class, 'login'])->name('login');
  Route::post('login', [AuthController::class, 'authenticated']);
});

Route::group(['prefix' => 'dashboard'], function () {
  Route::middleware(['auth'])->group(function () {
    Route::get('app', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('profile', [AuthController::class, 'profile']);
    Route::get('logout', [AuthController::class, 'logout']);
    Route::post('profile-update', [AuthController::class, 'profile_update'])->name('profile_update');
    Route::post('pass-update', [AuthController::class, 'pass_update'])->name('pass_update');
    Route::resource('news', NewsController::class);
    Route::resource('information', InformationController::class);
    Route::resource('slider', SliderController::class);
    Route::get('contact', [ContactController::class, 'index']);
    Route::get('settings', [SettingsController::class, 'setting']);
    Route::post('settings', [SettingsController::class, 'store']);
  });
});
