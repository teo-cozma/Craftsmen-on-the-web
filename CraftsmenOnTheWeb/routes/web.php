<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactsController;
use App\Http\Controllers\ProfilesController;
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
// Route::get('/', function() {return view('welcome');})->name('welcome');

Route::get('/', [\App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');

Route::post('/', [\App\Http\Controllers\ContactsController::class, 'store'])->name('contact.store');

Route::group(['middleware'=>'prevent_back_history'], function() {
    // Authentication routes
    Auth::routes();
    
    // Logged in - main page rendered with all articles + search bar
    // Route::get('/', function() {return redirect('/home');});
    Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    // Article routes
    Route::get('/write', [\App\Http\Controllers\ArticlesController::class, 'create'])->name('articles.write.create');
    Route::post('/write', [\App\Http\Controllers\ArticlesController::class, 'store'])->name('articles.write.store');

    Route::get('/article/{article}', [\App\Http\Controllers\ArticlesController::class, 'show'])->name('articles.article.show');
    Route::get('/article/{article}/edit', [\App\Http\Controllers\ArticlesController::class, 'edit'])->name('articles.article.edit');
    Route::patch('/article/{article}/edit', [\App\Http\Controllers\ArticlesController::class, 'update'])->name('articles.article.update');
    
    // Profile routes
    Route::get('/profile', [\App\Http\Controllers\ProfilesController::class, 'index'])->name('profiles.profile');
    Route::get('/profile/{user}/edit', [\App\Http\Controllers\ProfilesController::class, 'edit'])->name('profiles.edit');
    Route::post('/profile', [\App\Http\Controllers\ProfilesController::class, 'store'])->name('profiles.store');
    Route::patch('/profile/{user}/edit', [\App\Http\Controllers\ProfilesController::class, 'update'])->name('profiles.update');


}); // prevent back history middleware