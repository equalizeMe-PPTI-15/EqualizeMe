<?php

use App\Http\Controllers\DialogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsEduController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\loginController;


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

// Route::get('/login', function () {
//     return view('login');
// });

Route::get('/login', [loginController::class, 'index']);

Route::get('/helpme', function () {
    return view('helpme');
});

Route::get('/home', [NewsEduController::class, 'index2']);

// Route::get('/home/{user}', [NewsEduController::class, 'index']);
Route::post('/home/{user}', [NewsEduController::class, 'index']);

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/sandi', function(){
    return view('sandi');
});

Route::get('/helpme', [DialogController::class,'index']);
Route::get('/helpme2/{dialog}', [DialogController::class,'show']);