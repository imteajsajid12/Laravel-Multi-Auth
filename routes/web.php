<?php

use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Auth::routes();

// Route::patch('/{admin}', [\Bitfumes\Multiauth\Http\Controllers\RegisterController::class, 'test'])->name('admin.update');
// Route::post('/fff', [App\Http\Controllers\AuthRegisterAController::class, 'test'])->name('home.index');