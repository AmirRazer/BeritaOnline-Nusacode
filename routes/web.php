<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\KategoriController;

// Route::get('/', function () {
//     return view('backend.kategori.index');
// }); 

//kategori
Route::get('kategori',[KategoriController::class, 'index'])->name('kategori-index');
Route::get('kategori/create',[KategoriController::class, 'create'])->name('kategori-create');
Route::post('kategori/store',[KategoriController::class, 'store'])->name('kategori-store');
Route::get('kategori/edit/{id}',[KategoriController::class, 'edit'])->name('kategori-edit');
Route::post('kategori/update/{id}',[KategoriController::class, 'update'])->name('kategori-update');
Route::get('kategori/delete/{id}',[KategoriController::class, 'destroy'])->name('kategori-delete');


//tag
Route::get('tag',[TagController::class, 'index'])->name('tag-index');
Route::get('tag/create',[TagController::class, 'create'])->name('tag-create');
Route::post('tag/store',[TagController::class, 'store'])->name('tag-store');
Route::get('tag/edit/{id}',[TagController::class, 'edit'])->name('tag-edit');
Route::post('tag/update/{id}',[TagController::class, 'update'])->name('tag-update');
Route::get('tag/delete/{id}',[TagController::class, 'destroy'])->name('tag-delete');