<?php

use App\Http\Controllers\EmailController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/email', [EmailController::class, 'store'])->name('email');
Route::get('/login', [EmailController::class, 'login'])->name('login');
Route::post('/auth', [EmailController::class, 'auth'])->name('auth');
