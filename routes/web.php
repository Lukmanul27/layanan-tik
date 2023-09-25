<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AjukanController;
use App\Http\Controllers\AkunController;
use App\Http\Controllers\AwalController;
use App\Http\Controllers\PelayananController;
use App\Http\Controllers\PengajuanController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\TrackingController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IsianlayananController;

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
    Route::get('/admin/create-user', [AdminController::class, 'show'])->name('admin.create');
    Route::post('/admin/create-user', [AdminController::class, 'create']);
    Route::post('/pengajuan/{id}/store', [PengajuanController::class, 'store'])->name('pengajuan.store');
    Route::resource('/pelayanan', PelayananController::class);
    Route::resource('/pengajuan', PengajuanController::class);
    Route::resource('/akun', AkunController::class);
    Route::resource('/role', RoleController::class);
    Route::post('role-add',[RoleController::class,'add'])->name('role-add.store');
    Route::post('/approve/{id}', [PengajuanController::class, 'approve'])->name('approve');
    Route::post('/disapprove/{id}', [PengajuanController::class, 'disapprove'])->name('disapprove');
    Route::get('/pengajuan/{id}', [PengajuanControlle::class, 'show'])->name('pengajuan.show');
    Route::get('/admin/download/{filename}', [IsianlayananController::class, 'download'])->name('admin.download');
    Route::get('/admin/pages/laporan/', [AdminController::class, 'laporan'])->name('admin.laporan.index');
});

Route::group(["middleware" => ['role:petugas']], function () {
    Route::resource('/petugas', PetugasController::class);
    Route::get('/layanan', [PetugasController::class, 'layananmasuk'])->name('petugas.layananmasuk');
    Route::post('/update-status/{id}', [PetugasController::class, 'store'])->name('updateStatus');
    Route::post('/update/{id}', [PetugasController::class, 'update'])->name('updateStatus');
});

Route::get('/home', [HomeController::class, 'index']);
Route::get('/skpd', [HomeController::class, 'index'])->name('skpd.index');
Route::resource('/pengajuan_in', IsianlayananController::class);
Route::post('/pengajuan_in', [IsianlayananController::class, 'store'])->name('Isianlayanan.store');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/tracking', TrackingController::class);
Route::post('/simpan-status', [PengajuanController::class, 'simpanStatus']);
Route::get('/user/upload-form', 'FileUploadController@userUploadForm')->name('user.upload.form');
Route::post('/user/upload', 'FileUploadController@userUpload')->name('user.upload');
