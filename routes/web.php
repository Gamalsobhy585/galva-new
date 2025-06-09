<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;
use App\Http\Controllers\ContactController;



Route::middleware(['setLocale'])->group(function () {
    Route::get('/', [HomeController::class, 'homepageIndex'])->name('homepageIndex');
    Route::get('/services/{id}', [HomeController::class, 'show'])->name('services.show');
    Route::get('/contact', [ContactController::class, 'getView'])->name('contact.form');
    Route::post('/contact', [ContactController::class, 'createContact'])->name('contact.store');
});

