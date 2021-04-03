<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailProfileController;
use App\Http\Controllers\DashboardController;

Route::get('/',[HomeController::class,'index']);
Route::namespace('Dashboard')->group(function() {
    Route::resource('backend', 'DashboardController');
});
Route::get('/user',[DetailProfileController::class,'index']);
