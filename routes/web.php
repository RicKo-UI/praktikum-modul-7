<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmployeeController;


Route::get('/', function () {
    return view('auth.login');
});


Auth::routes([
    'register' => false
]);

Route::middleware('auth')->group(function(){
    Route::get('home', [HomeController::class, 'index'])->name('home');
    Route::resource('employees', EmployeeController::class);
    Route::get('profile', ProfileController::class)->name('profile');
});