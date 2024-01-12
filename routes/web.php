<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $users = \App\Models\User::all();
    return view('welcome');
});

Route::get('/test/laravel-pdf', [\App\Http\Controllers\TestController::class, 'laravelPdf']);
Route::get('/test/activityLog', [\App\Http\Controllers\TestController::class, 'activityLog']);
