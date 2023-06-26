<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LupaPasswordController;
use App\Http\Controllers\LogoutController;
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
    return view('beranda');
});

Route::controller(RegisterController::class)->name('register.')->prefix('register')->group(function()
{
    Route::get('/','formRegister')->name('form-register');
    Route::post('/simpan-register','simpanRegister')->name('simpan-register');
});
Route::controller(LoginController::class)->name('login.')->prefix('login')->group(function()
{
    Route::get('/','formLogin')->name('form-login');
    Route::post('/proses-login','ProsesLogin')->name('proses-login');
    
});
Route::controller(AdminController::class)->name('admin.')->middleware('CekLogin:admin')->prefix('admin')->group(function()
{
    Route::get('/','BerandaAdmin')->name('beranda');
    Route::get('/list','list')->name('list');
    Route::get('/buat', 'create')->name('create');
    Route::post('/simpan', 'store')->name('simpan');
    Route::get('/edit/{id}', 'edit')->name('edit');
    Route::post('/update/{id}', 'update')->name('update');
    Route::get('/hapus/{id}', 'hapus')->name('hapus');
});
Route::controller(UserController::class)->name('user.')->middleware('CekLogin:user')->prefix('user')->group(function()
{
    Route::get('/','BerandaUser')->name('beranda');    
    Route::get('/aboutus', 'aboutus')->name('aboutus');
    Route::get('/detail/{id}', 'detail')->name('detail');
});
Route::controller(LupaPasswordController::class)->name('forgot.')->prefix('forgot')->group(function()
{
    Route::get('/', 'formLupaPassword')->name('form-forgot');
    Route::post('/proses', 'prosesLupaPassword')->name('proses');
    Route::get('/reset-password/{token}', 'resetPassword')->name('reset-password');
    Route::post('/proses-reset', 'prosesResetPassword')->name('proses-reset');
});

Route::controller(LogoutController::class)->name('logout.')->prefix('logout')->group(function()
{
    Route::get('/','ProsesLogout')->name('proses-logout');
    
});