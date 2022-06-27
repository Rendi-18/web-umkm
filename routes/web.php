<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardUmkmController;


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

// Auntentikasi
Auth::routes();


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/umkm/{umkm:slug}', [HomeController::class, 'umkm'])->name('umkm');

//  Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/umkm/{umkm:id}/umkm-product', [DashboardController::class, 'umkmProduct'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/umkm/{umkm:id}/umkm-profile', [DashboardController::class, 'umkmProfile'])->name('dashboard')->middleware('auth');
// Route::resource('/dashboard/user', DashboardUserController::class)->middleware('auth');
Route::resource('/dashboard/umkm', DashboardUmkmController::class)->middleware('auth');
// Route::resource('/dashboard/koperasi', DashboardKoperasiController::class)->middleware('auth');

//Dashboard User
// Route::get('/', [DashboardController::class, 'index'])->name('home');
