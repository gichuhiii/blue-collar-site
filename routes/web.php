<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Http\Controllers\Auth;
use App\Http\Controllers\Admin;

Route::get('/', [Main::class, 'index']);
Route::get('/contact', [Main::class, 'contact']);
Route::post('/sendMessage', [Main::class, 'sendEmail'])->name('contact.send');
Route::get('/about', [Main::class, 'about']);
Route::get('/login', [Auth::class, 'login']);
Route::get('/register', [Auth::class, 'register']);
Route::post('/registration', [Auth::class, 'registration'])->name('registration');
Route::post('loginuser', [Auth::class, 'loginuser'])->name('loginuser');
Route::get('/dashboard', [Auth::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [Auth::class, 'logout']);
Route::get('/verify-email/{verification_code}', [Auth::class, 'verify_email'])->name('verify_email');
Route::get('/adduser', [Auth::class, 'add_user']);
Route::get('/panel', [Admin::class, 'panel']);
Route::get('/users', [Admin::class, 'view_user']);
