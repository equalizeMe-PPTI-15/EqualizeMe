<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DialogController;
use App\Http\Controllers\NewsEduController;
use App\Http\Controllers\RegisterController;

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
    return view('register');
});

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/helpme', function () {
    return view('helpme');
});

Route::get('/home', function () {
    return view('home');
});

// Route::get('/home', [NewsEduController::class, 'index']);
Route::get('/login', [LoginController::class, 'login'])->middleware('guest');
Route::post('/login', [LoginController::class, 'checkUser']);

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/sandi', function(){
    return view('sandi');
});

Route::get('/helpme', [DialogController::class,'index']);
Route::get('/helpme2/{dialog}', [DialogController::class,'show']);

Route::get('/home', [HomeController::class, 'index'])->name('home');