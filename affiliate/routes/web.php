<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();


Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'index']);
    // user 
    Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])->name('users');
    Route::get('/user/{id}', [\App\Http\Controllers\Admin\UserController::class, 'roleChange'])->name('user');
    Route::get('/affilate-users', [\App\Http\Controllers\Admin\UserController::class, 'affilateUsers'])->name('affilate-users');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware(['auth']);

Route::get('/affilate', [\App\Http\Controllers\Affilate\AffilateController::class, 'index'])->name('affilate')->middleware(['auth','affilate']);
Route::get('/refer', [\App\Http\Controllers\Affilate\AffilateController::class, 'referUsers'])->name('refer')->middleware(['auth','affilate']);


Route::get('/register/{id}', [\App\Http\Controllers\Auth\RegisterController::class, 'refRegistration']);

