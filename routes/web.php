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
Route::get('/register/{role?}', [Auth::class, 'register']);
Route::post('/registration', [Auth::class, 'registration'])->name('registration');
Route::post('loginuser', [Auth::class, 'loginuser'])->name('loginuser');
Route::get('/dashboard', [Auth::class, 'dashboard'])->middleware('isLoggedIn');
Route::get('/logout', [Auth::class, 'logout']);
Route::get('/verify-email/{verification_code}', [Auth::class, 'verify_email'])->name('verify_email');
Route::get('/adduser', [Auth::class, 'add_user']);
Route::get('/panel', [Admin::class, 'panel']);
Route::get('/users', [Auth::class, 'usersList'])->name('user.list');
Route::get('/edit-user/{id}', [Auth::class, 'editUser'])->name('user.edit');
Route::get('/edit-profile/{id}', [Auth::class, 'editProfile'])->name('profile.edit');
Route::get('/edit-profilee/{id}', [Auth::class, 'editProfilee'])->name('profilee.edit');
Route::get('/delete-user/{id}', [Auth::class, 'deleteUser'])->name('user.delete');
Route::get('/delete-profile/{id}', [Auth::class, 'deleteProfile'])->name('profile.delete');
Route::post('/update-user', [Auth::class, 'updateUser'])->name('update.user');
Route::post('/update-profile', [Auth::class, 'updateProfile'])->name('update.profile');
Route::get('/jobs',[Main::class, 'jobs']);
Route::get('/jobdetails',[Main::class, 'jobdetails']);
Route::get('/employer',[Main::class, 'employer']);
Route::get('/viewemployees',[Main::class, 'viewemployees']);
Route::get('/viewjobs',[Main::class, 'viewjobs']);
Route::get('/dashboarde', [Main::class, 'employee']);
Route::post('/job', [Auth::class, 'job'])->name('job');
Route::get('/profile', [Auth::class, 'profile'])->middleware('isLoggedIn');
Route::get('/profilea', [Auth::class, 'profilea'])->middleware('isLoggedIn');
