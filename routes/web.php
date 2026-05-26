<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Track\TrackingController;

// Public Frontend
Route::get('/', [TrackingController::class, 'index'])->name('home');
Route::get('/track', [TrackingController::class, 'track'])->name('track');
Route::get('/contact', [TrackingController::class, 'contact'])->name('contact');

// Administrative Control
Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::post('/parcel/store', [AdminController::class, 'store'])->name('parcel.store');
    Route::post('/parcel/{parcel}/update', [AdminController::class, 'update'])->name('parcel.update');
    Route::get('/parcel/{parcel}/receipt', [AdminController::class, 'receipt'])->name('parcel.receipt');
});
