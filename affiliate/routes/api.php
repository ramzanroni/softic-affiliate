<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('add-user', [\App\Http\Controllers\Admin\UserController::class, 'addUser']);
Route::get('dashboard', [\App\Http\Controllers\Admin\DashboardController::class, 'dashboardData']);

Route::get('general-user', [\App\Http\Controllers\Admin\UserController::class, 'generalUser']);
Route::get('affiliation-user', [\App\Http\Controllers\Admin\UserController::class, 'affilateUsersApi']);

Route::get('role-change/{id}', [\App\Http\Controllers\Admin\UserController::class, 'roleChangeApi']);
