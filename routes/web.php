<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/admin','App\Http\Controllers\Admin@index');
Route::get('/admin-kelola-dokumen','App\Http\Controllers\Admin@kelolaDokumen');
Route::get('/admin-buat-jadwal','App\Http\Controllers\Admin@buatJadwal');
Route::get('/admin-jadwal','App\Http\Controllers\Admin@lihatJadwal');


Route::get('/mahasiswa','App\Http\Controllers\MahasiswaController@index');


Route::get('/dosen','App\Http\Controllers\DosenController@index');


