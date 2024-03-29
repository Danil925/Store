<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\GenreController;
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
    return view('index');
});

Route::get('/registration', function (){
    return view('auth.registration');
});
Route::post('/registration', [AuthController::class, 'register'])->name('register');

Route::get('/login', function (){
    return view('auth.login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::resource('/genre', GenreController::class);
