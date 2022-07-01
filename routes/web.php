<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;
use App\Http\Controllers\DashboardUmkmController;
use App\Http\Controllers\DashboardKoperasiController;
use App\Http\Controllers\DashboardUserUmkmController;
use App\Http\Controllers\DashboardUserProductController;


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

// Home
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/search', [HomeController::class, 'search'])->name('search');
Route::get('/umkm/{umkm:slug}', [HomeController::class, 'umkm'])->name('umkm');

//  Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/profile', [DashboardController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/profile/edit', [DashboardController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/profile', [DashboardController::class, 'destroy'])->middleware('auth');


// Dashboard User UMKM Product
Route::get('/dashboard/umkm/{umkm:id}/umkm-product', [DashboardUserProductController::class, 'index'])->middleware('auth');
Route::post('/dashboard/umkm/{umkm:id}/umkm-product', [DashboardUserProductController::class, 'store'])->middleware('auth');
Route::get('/dashboard/umkm/{umkm:id}/umkm-product/create', [DashboardUserProductController::class, 'create'])->middleware('auth');
Route::put('/dashboard/umkm-product/{product:id}', [DashboardUserProductController::class, 'update'])->middleware('auth');
Route::put('/dashboard/umkm-product/{product:id}/unggulan', [DashboardUserProductController::class, 'isUnggulan'])->middleware('auth');
Route::delete('/dashboard/umkm-product/{product:id}', [DashboardUserProductController::class, 'destroy'])->middleware('auth');
Route::get('/dashboard/umkm-product/{product:id}/edit', [DashboardUserProductController::class, 'edit'])->middleware('auth');

// Dashboard User UMKM Profile
Route::get('/dashboard/umkm/{umkm:id}/umkm-profile', [DashboardUserUmkmController::class, 'index'])->middleware('auth');
Route::get('/dashboard/umkm/{umkm:id}/umkm-profile/edit', [DashboardUserUmkmController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/umkm/{umkm:id}/umkm-profile', [DashboardUserUmkmController::class, 'update'])->middleware('auth');


// Dashboard Admin
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('admin');
Route::resource('/dashboard/umkm', DashboardUmkmController::class)->middleware('admin');
Route::resource('/dashboard/koperasi', DashboardKoperasiController::class)->middleware('admin');

//Dashboard User
// Route::get('/', [DashboardController::class, 'index'])->name('home');
