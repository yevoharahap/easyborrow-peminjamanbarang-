<?php

use App\Http\Controllers\barangController;
use App\Http\Controllers\landingController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\peminjamanController;
use App\Http\Controllers\registerController;
use App\Http\Controllers\userController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/login', [loginController::class,'index'])->name('login')->middleware('guest');
Route::post('/log',[loginController::class,'login'])->name('login.store');

Route::post('/logout', [loginController::class, 'logout'])->name('logout');

Route::get('/register',[registerController::class, 'index'])->name('register');
Route::post('/regist', [registerController::class, 'store'])->name('register.store');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('user', userController::class);
Route::resource('barang', barangController::class);
Route::resource('peminjaman', peminjamanController::class);
Route::post('/pengembalian/{id}', [peminjamanController::class, 'pengembalian'])->name('pengembalian');


Route::get('/', [landingController::class,'coba'])->name('landing');
