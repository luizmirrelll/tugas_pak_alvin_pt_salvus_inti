<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\KasirController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return redirect()->route('login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/admin/kasir', [AdminController::class, 'manageKasir'])->name('admin.manage_kasir');
    Route::get('/admin/kasir/create', [AdminController::class, 'createKasir'])->name('admin.create_kasir');
    Route::post('/admin/kasir', [AdminController::class, 'storeKasir'])->name('admin.store_kasir');
    Route::get('/admin/kasir/{kasir}/edit', [AdminController::class, 'editKasir'])->name('admin.edit_kasir');
    Route::put('/admin/kasir/{kasir}', [AdminController::class, 'updateKasir'])->name('admin.update_kasir');
    Route::delete('/admin/kasir/{kasir}', [AdminController::class, 'destroyKasir'])->name('admin.destroy_kasir');
});

Route::middleware(['auth', 'role:kasir'])->group(function () {
    Route::get('/kasir', [KasirController::class, 'index'])->name('kasir.index');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

require __DIR__.'/auth.php';
