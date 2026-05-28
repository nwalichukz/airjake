<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Track\TrackingController;

// Public Frontend
Route::get('/', [TrackingController::class, 'index'])->name('home');
Route::post('/track', [TrackingController::class, 'track'])->name('track');
Route::get('/contact', [TrackingController::class, 'contact'])->name('contact');

Route::get('/login', [TrackingController::class, 'login'])->name('login');

 Route::post('/parcel/store', [AdminController::class, 'store']);

Route::post('/post/login', [AdminController::class, 'login']);

// Administrative Control
Route::prefix('admin')->name('admin.')->group(function () {

   Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

 //  Route::post('/dashboard', [AdminController::class, 'dashboard'])->name('dashboard');
   
   
   
    Route::post('/parcel-update/{parcel}', [AdminController::class, 'update']);

    
    Route::get('/parcel-receipt/{parcel_id?}', [AdminController::class, 'receipt']);
});
