<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;

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
Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::post('/', [\App\Http\Controllers\ContactsController::class, 'store'])->name('contact.store');

// User views //
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/profile', [\App\Http\Controllers\ProfilesController::class, 'profilePage'])->name('profile');