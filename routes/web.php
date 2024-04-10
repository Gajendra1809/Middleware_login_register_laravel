<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashController;

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

Route::view('/','welcome')->name('home');

Route::get('/login',[AuthController::class,"login"])->name('login');

Route::post("/login",[AuthController::class,"loginPost"])->name('login.post');

Route::get("/register",[AuthController::class,"register"])->name('register');

Route::post("/register",[AuthController::class,"registerPost"])->name('register.post');

Route::get("/logout",[AuthController::class,"logout"])->name("logout");

// Middleware Grouping
Route::middleware(["sort","checklogin"])->group(function (){

    Route::get("/dash",[DashController::class,"dash"])->name("dash");

    Route::get("/dash2",[DashController::class,"dash2"])->name("dash2");

    //Route Middleware
    Route::get("/dashboard3",[DashController::class,"dashboard3"])->name("dashboard3")->middleware("checkrole");
    
});

