<?php

use App\Http\Controllers\PelayananController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SuperadminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index']);

Route::resource('/superadmin', SuperadminController::class);

Route::resource('/role', RoleController::class);
Route::resource('/pelayanan', PelayananController::class);
