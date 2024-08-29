<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KategoriController;

// Route::get('/', function () {
//     return view('backend.kategori.index');
// });

Route::get('kategori',[KategoriController::class, 'index'])->name('kategori-index');
Route::get('kategori/create',[KategoriController::class, 'create'])->name('kategori-create');
Route::post('kategori/store',[KategoriController::class, 'store'])->name('kategori-store');
Route::get('kategori/edit/{id}',[KategoriController::class, 'edit'])->name('kategori-edit');