<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ArticlesController;

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

// Home page routes
Route::get('/', function () {
    $title = "Welcome";
    return view('home', compact('title'));
});


// Aunthentication routes
// Register new user
Route::get('/register', [AuthController::class, 'registration'])->name('register');
Route::post('/register', [AuthController::class, 'registrationForm'])->name('register.custom');

Route::get('dashboard', [AuthController::class, 'dashboard']);

// Logging in
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.custom');

Route::get('signout', [AuthController::class, 'signOut'])->name('signout');


// Article content routes
Route::get('/articles', [ArticlesController::class, 'index']);


// Route::get('/register', function () {
//     $title = "Registration";
//     return view('register', compact('title'));
// });
// Route::get('/login', function () {
//     $title = "Log in";
//     return view('login', compact('title'));
// });