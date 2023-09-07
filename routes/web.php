<?php

use App\Http\Controllers\AjukanController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SuperadminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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

Route::get('/home', [HomeController::class, 'index']);
Route::resource('/superadmin', SuperadminController::class);
Route::resource('/role', RoleController::class);
Route::resource('/pelayanan', PelayananController::class);
Route::resource('/akun', AkunController::class);
Route::resource('/', AwalController::class);

Route::resource('/ajukan', AjukanController::class);
Route::resource('/petugas', PetugasController::class);

Route::post('role-add',[RoleController::class,'add'])->name('role-add.store');
