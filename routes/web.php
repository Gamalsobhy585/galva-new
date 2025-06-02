<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\HomeController;

Route::get('/', [HomeController::class, 'homepageIndex'])->name('homepageIndex');
Route::get('/services/{id}', [HomeController::class, 'show'])->name('services.show');


