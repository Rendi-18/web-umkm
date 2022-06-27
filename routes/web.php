<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardUserController;


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
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('auth');
Route::resource('/dashboard/umkm', DashboardUserController::class)->middleware('auth');
Route::resource('/dashboard/koperasi', DashboardUserController::class)->middleware('auth');
