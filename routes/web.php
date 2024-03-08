<?php

use App\Models\News;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DialogController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\NewsEduController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\quizController;
use App\Http\Controllers\EducationController;

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

// NOTE: Rapihin route nya yang duplicate
Route::get('/', function () {
    return view('home');
});

Route::get('/register', [RegisterController::class, 'index']);

Route::post('/register', [RegisterController::class, 'store']);

Route::get('/register', function () {
    return view('register');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/helpme', function () {
    return view('helpme');
});

// Route::get('/home', function () {
//     return view('home');
// });

// Route::get('/home', [NewsEduController::class, 'index']);

Route::get('/berita', function () {
    return view('berita');
});

Route::get('/pengaduan', [ReportController::class, 'index']);
Route::post('/pengaduan', [ReportController::class, 'store']);
Route::get('/sandi', function(){
    return view('sandi');
});
Route::get('/education', [EducationController::class, 'index']);
// Route::get('/sandi', function(){
//     return view('sandi');
// });

Route::get('/helpme', [DialogController::class,'index']);
Route::get('/helpme2/{dialog}', [DialogController::class,'show']);

Route::get('/quiz', [quizController::class, 'index']);

Route::get('/akun', [AkunController::class, 'index']);
Route::post('/akun/{user}', [AkunController::class, 'store']);
Route::get('/akun/{user}', [AkunController::class, 'store']);

Route::get('/sandi/{user}', [AkunController::class, 'index2']);
Route::post('/sandi/{user}', [AkunController::class, 'toSandi']);

Route::get('/akun', [AkunController::class, 'index']);
Route::post('/akun/{user}', [AkunController::class, 'store']);
Route::get('/akun/{user}', [AkunController::class, 'store']);

Route::get('/sandi/{user}', [AkunController::class, 'index2']);
Route::post('/sandi/{user}', [AkunController::class, 'toSandi']);

// Route::get('/home', [HomeController::class, 'index']);
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Route::get('/home', [NewsEduController::class, 'index'])->name('home');

// Route::resource('berita', BeritaController::class);

// Route::get('/berita/{news}', [BeritaController::class, 'show']);
Route::get('/berita', [BeritaController::class, 'index']);
Route::get('/berita/{id}/data', [BeritaController::class, 'getNewsData'])->name("news");
// Route::get('/berita/{filtercarinews}', [BeritaController::class, 'searchNews']);

// Route::get('/berita/search', [BeritaController::class, 'search']);
Route::post('/logout', [LogoutController::class, 'LogoutUser']);
// Route::get('/berita/search', [BeritaController::class, 'search']);

Route::post('/logout', [LogoutController::class, 'LogoutUser']);