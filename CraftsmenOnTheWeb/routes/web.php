<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
// use App\Http\Middleware\PreventBackHistory;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Guest views //
Route::get('/', function() {return view('welcome');})->name('welcome');
Route::post('/', [\App\Http\Controllers\ContactsController::class, 'store'])->name('contact.store');

Route::group(['middleware'=>'prevent_back_history'], function() {
    Auth::routes();
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/profile', [\App\Http\Controllers\ProfilesController::class, 'profilePage'])->name('profile');
}); // prevent back history middleware


// Route::post('/password/email', [\App\Http\Controllers\ResetPasswordController::class, 'passwordRequestForm'])->name('passwords.email');


// Route::get('/forgot-password', function () {
//     return view('auth.forgot-password');
// })->middleware('guest')->name('password.request');

// User views //
