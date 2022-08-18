<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;

// Admin
use App\Http\Controllers\Admin\DashboardUserController;
use App\Http\Controllers\Admin\DashboardUmkmController;
use App\Http\Controllers\Admin\DashboardKoperasiController;
use App\Http\Controllers\Admin\DashboardPengajuanController;
use App\Http\Controllers\Admin\DashboardPegawaiController;
use App\Http\Controllers\Admin\DashboardWebsiteController;
use App\Http\Controllers\Admin\DashboardAgendaController;
use App\Http\Controllers\Admin\DashboardPesanController;
use App\Http\Controllers\AgendaController;
// User Umkm
use App\Http\Controllers\User\Umkm\DashboardUserUmkmController;
use App\Http\Controllers\User\Umkm\DashboardUserProductController;

// User Izin
use App\Http\Controllers\User\Izin\DashboardUserIzinController;

// User laporan
use App\Http\Controllers\User\Laporan\DashboardLaporanController;


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

Route::get('/search/umkm', [HomeController::class, 'searchUmkm'])->name('search.umkm');
Route::get('/search/koperasi', [HomeController::class, 'searchKoperasi'])->name('search.koperasi');

Route::get('/umkm/{umkm:slug}', [HomeController::class, 'umkm'])->name('umkm');
Route::get('/umkm/product/{product:slug}', [HomeController::class, 'product'])->name('umkm');

Route::get('/pegawai', [HomeController::class, 'pegawai'])->name('pegawai');
Route::get('/pegawai/{pegawai:id}', [HomeController::class, 'pegawaiDetail'])->name('pegawai');

//  Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');
Route::get('/dashboard/profile', [DashboardController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/profile/edit', [DashboardController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/profile', [DashboardController::class, 'destroy'])->middleware('auth');

// Dashboard pengajuan
// Route::get('/dashboard/izin/surat', [DashboardUserIzinController::class, 'surat'])->middleware('auth');
// Route::post('/dashboard/izin/surat', [DashboardUserIzinController::class, 'suratStore'])->middleware('auth');
// Route::delete('/dashboard/izin/surat/{izin}', [DashboardUserIzinController::class, 'suratDestroy'])->middleware('auth');

// Route::get('/dashboard/bantuan', [DashboardBantuanController::class, 'index'])->middleware('auth');
// Route::post('/dashboard/bantuan', [DashboardBantuanController::class, 'store'])->middleware('auth');
// Route::get('/dashboard/bantuan/{bantuan:id}/edit', [DashboardBantuanController::class, 'edit'])->middleware('auth');
// Route::put('/dashboard/bantuan/{bantuan:id}', [DashboardBantuanController::class, 'update'])->middleware('auth');
// Route::delete('/dashboard/bantuan/{bantuan:id}', [DashboardBantuanController::class, 'destroy'])->middleware('auth');

// Laporan Tahunan
Route::get('/dashboard/laporan', [DashboardLaporanController::class, 'index'])->middleware('auth');
Route::post('/dashboard/laporan', [DashboardLaporanController::class, 'store'])->middleware('auth');
Route::get('/dashboard/laporan/{laporan:id}/edit', [DashboardLaporanController::class, 'edit'])->middleware('auth');
Route::put('/dashboard/laporan/{laporan:id}', [DashboardLaporanController::class, 'update'])->middleware('auth');
Route::delete('/dashboard/laporan/{laporan:id}', [DashboardLaporanController::class, 'destroy'])->middleware('auth');


Route::get('/dashboard/register/umkm', [DashboardUserIzinController::class, 'umkm'])->middleware('auth');
Route::post('/dashboard/register/umkm', [DashboardUserIzinController::class, 'umkmStore'])->middleware('auth');

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
Route::delete('/dashboard/umkm/{umkm:id}/umkm-profile', [DashboardUserUmkmController::class, 'destroy'])->middleware('auth');

// Dashboard Admin
Route::resource('/dashboard/user', DashboardUserController::class)->middleware('admin');
Route::resource('/dashboard/umkm', DashboardUmkmController::class)->middleware('admin');
Route::resource('/dashboard/koperasi', DashboardKoperasiController::class)->middleware('admin');


Route::get('/dashboard/pengajuan', [DashboardPengajuanController::class, 'index'])->middleware('admin');
Route::get('/dashboard/comp', [DashboardController::class, 'comp'])->middleware('admin');


// Pengajuan UMKM
Route::put('/dashboard/pengajuan/umkm/{umkm}', [DashboardPengajuanController::class, 'aprovedUmkm'])->middleware('admin');
Route::put('/dashboard/pengajuan/koperasi/{koperasi}', [DashboardPengajuanController::class, 'aprovedKoperasi'])->middleware('admin');
Route::put('/dashboard/pengajuan/{izin}/izin', [DashboardPengajuanController::class, 'izin'])->middleware('admin');
Route::put('/dashboard/pengajuan/{bantuan}/bantuan', [DashboardPengajuanController::class, 'bantuan'])->middleware('admin');

// Pegawai
Route::get('/dashboard/pegawai', [DashboardPegawaiController::class, 'index'])->middleware('admin');
Route::get('/dashboard/pegawai/create', [DashboardPegawaiController::class, 'create'])->middleware('admin');
Route::post('/dashboard/pegawai', [DashboardPegawaiController::class, 'store'])->middleware('admin');
Route::get('/dashboard/pegawai/{pegawai:id}/edit', [DashboardPegawaiController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/pegawai/{pegawai:id}', [DashboardPegawaiController::class, 'update'])->middleware('admin');
Route::delete('/dashboard/pegawai/{pegawai:id}', [DashboardPegawaiController::class, 'destroy'])->middleware('admin');

// Website
Route::get('/dashboard/website', [DashboardWebsiteController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/website/{website}', [DashboardWebsiteController::class, 'update'])->middleware('admin');

// Agenda
Route::get('/dashboard/agenda', [DashboardAgendaController::class, 'index'])->middleware('admin');
Route::post('/dashboard/agenda', [DashboardAgendaController::class, 'store'])->middleware('admin');
Route::get('/dashboard/agenda/{agenda:id}/edit', [DashboardAgendaController::class, 'edit'])->middleware('admin');
Route::put('/dashboard/agenda/{agenda:id}', [DashboardAgendaController::class, 'update'])->middleware('admin');
Route::delete('/dashboard/agenda/{agenda:id}', [DashboardAgendaController::class, 'destroy'])->middleware('admin');

//Pesan
Route::get('/dashboard/pesan', [DashboardPesanController::class, 'index'])->middleware('admin');
Route::get('/dashboard/pesan/{pesan:id}', [DashboardPesanController::class, 'view'])->middleware('admin');
Route::delete('/dashboard/pesan/{pesan:id}', [DashboardPesanController::class, 'destroy'])->middleware('admin');

Route::post('/', [DashboardPesanController::class, 'store']);

Route::get('/agenda', [AgendaController::class, 'agenda']);
Route::get('/agenda/{agenda:id}', [AgendaController::class, 'detail']);
