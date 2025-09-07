<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\UserController;
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

// start
Route::get('/', function () {
    return view('welcome');
});


// Authentication
Route::get('/signup',[UserController::class,'sign'])->name('signpage');
Route::get('/login',[UserController::class,'log'])->name('loginpage');

Route::post('/login',[UserController::class,'login'])->name('login');
Route::post('/signup',[UserController::class,'signup'])->name('signup');

Route::middleware(['role:Admin'])->group(function () {
    Route::get('/admin/dashboard',[UserController::class,'admindashboard'])->name('admin');
});

Route::middleware(['role:User'])->group(function () {
    Route::get('/user/dashboard',[UserController::class,'userdashboard'])->name('user');
});

Route::post('/logout',[UserController::class,'logout'])->name('logout');