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

Route::get('/','App\Http\Controllers\HomeController@index');
Route::get('/auth','App\Http\Controllers\HomeController@authenticate');


Route::get('/admin','App\Http\Controllers\Admin@index');
Route::get('/admin-kelola-dokumen','App\Http\Controllers\Admin@kelolaDokumen');
Route::get('/admin-buat-jadwal','App\Http\Controllers\Admin@buatJadwal');
Route::get('/admin-jadwal','App\Http\Controllers\Admin@lihatJadwal');


Route::get('/mahasiswa','App\Http\Controllers\Mahasiswa@index');
Route::get('/mahasiswa-jadwal','App\Http\Controllers\Mahasiswa@jadwal');
Route::get('/mahasiswa-tambah-dokumen','App\Http\Controllers\Mahasiswa@dokumen');
Route::get('/mahasiswa-dokumen','App\Http\Controllers\Mahasiswa@dokumen');


Route::get('/dosen','App\Http\Controllers\Dosen@index');
Route::get('/dosen-dokumen','App\Http\Controllers\Dosen@dokumen');
Route::get('/dosen-jadwal','App\Http\Controllers\Dosen@jadwal');



