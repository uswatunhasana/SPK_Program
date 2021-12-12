<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HitungController; 


Route::resource('/', DashboardController::class)->names([
    'index' => 'dashboard.user'
]);

Route::post('store', [HitungController::class, 'store'])->name('store');

// Route::get('/', function () {
//     return view('welcome');
// });
