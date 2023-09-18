<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjukanController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PengajuanInController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserPelayananController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IsianlayananController;
use App\Http\Controllers\SkpdController;

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

Auth::routes();
Route::resource('/', AwalController::class);

Route::group(["middleware" => ['role:admin']], function () {
    Route::resource('/admin', AdminController::class);
    Route::resource('/pelayanan', PelayananController::class);
    Route::resource('/pengajuan', PengajuanController::class);
    Route::resource('/akun', AkunController::class);
    Route::resource('/role', RoleController::class);
    Route::post('role-add',[RoleController::class,'add'])->name('role-add.store');
});

Route::group(["middleware" => ['role:petugas']], function () {
    Route::resource('/petugas', PetugasController::class);
});

Route::get('/home', [HomeController::class, 'index']);
Route::resource('/pengajuan_in', IsianlayananController::class);
Route::post('pengajuan_in', 'PengajuanInController@store')->name('pengajuan_in.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
