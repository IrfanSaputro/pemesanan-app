<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DriverController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PesananController;
use App\Models\Kendaraan;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
Auth::routes();

Route::get('/', [DashboardController::class, 'index']);

Route::get('/dashboard/export-excel', [DashboardController::class, 'export']);

Route::get('/driver', [DriverController::class, 'index']);

Route::get('/driver/tambah-data-driver', [DriverController::class, 'create']);

Route::post('/driver/store-data-driver', [DriverController::class, 'store']);

Route::get('/driver/edit-data-driver/{id}', [DriverController::class, 'edit']);

Route::post('/driver/update-data-driver/{id}', [DriverController::class, 'update']);

Route::get('/driver/hapus-data-driver/{id}', [DriverController::class, 'destroy']);

Route::get('/kendaraan', [KendaraanController::class, 'index']);

Route::get('/kendaraan/tambah-data-kendaraan', [KendaraanController::class, 'create']);

Route::post('/kendaraan/store-data-kendaraan', [KendaraanController::class, 'store']);

Route::get('/kendaraan/edit-data-kendaraan/{id}', [KendaraanController::class, 'edit']);

Route::post('/kendaraan/update-data-kendaraan/{id}', [KendaraanController::class, 'update']);

Route::get('/kendaraan/hapus-data-kendaraan/{id}', [KendaraanController::class, 'destroy']);

Route::get('/pesanan', [PesananController::class, 'index']);

Route::get('/pesanan/tambah-data-pesanan', [PesananController::class, 'create']);

Route::post('/pesanan/store-data-pesanan', [PesananController::class, 'store']);

Route::get('/pesanan/edit-status-pengawas/{id}', [PesananController::class, 'editPengawas']);

Route::post('/pesanan/update-status-pengawas/{id}', [PesananController::class, 'updatePengawas']);

Route::get('/pesanan/edit-status-admin/{id}', [PesananController::class, 'editAdmin']);

Route::post('/pesanan/update-status-admin/{id}', [PesananController::class, 'updateAdmin']);

Route::get('/logout', [DashboardController::class, 'logout']);