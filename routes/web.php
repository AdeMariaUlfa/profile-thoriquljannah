<?php

use App\Http\Controllers\beritaController;
use App\Http\Controllers\BotManController;
use App\Http\Controllers\userController;
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

Route::get('/', [beritaController::class, 'index']);
Route::get('/profil', function () {return view('profil');});
Route::get('/unit', function () {return view('unit');});
Route::get('/berita', [beritaController::class, 'berita'])->name('berita');
Route::get('/galeri', function () {return view('galeri');});

Route::get('/login',  [userController::class, 'login'])->name('login');
Route::get('/dashboard', [beritaController::class, 'dashboard'])->name('dashboard');
Route::post('/aksiLogin',  [userController::class, 'actionlogin'])->name('actionlogin');
Route::get('/logout',  [userController::class, 'logout'])->name('logout');
Route::post('/inputBerita', [beritaController::class, 'inputBerita'])->name('inputBerita');
Route::post('/edit/{id}', [beritaController::class, 'editBerita'])->name('editBerita');
Route::get('/delete/{id}', [beritaController::class, 'deleteBerita'])->name('deleteBerita');
Route::get('/detail/{id}', [beritaController::class, 'detailBerita'])->name('detailBerita');
Route::match(['get', 'post'], '/botman', [BotManController::class,'handle']);
