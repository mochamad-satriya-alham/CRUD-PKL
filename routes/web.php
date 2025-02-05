<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\RayonController;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::prefix('Siswa')->name('Siswa.')->group(function(): void{
    Route::get('create', [StudentController::class, 'buat'])->name('tambah');
    Route::post('proses', [StudentController::class, 'proses'])->name('proses');
    Route::get('/', [StudentController::class, 'data'])->name('data');
    Route::get('/{id}', [StudentController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [StudentController::class, 'update'])->name('update');
    Route::delete('/{id}', [StudentController::class, 'destroy'])->name('hapus');
});

Route::prefix('Rayon')->name('Rayon.')->group(function(): void{
    Route::get('create/rayon', [RayonController::class, 'create'])->name('create');
    Route::post('proses', [RayonController::class, 'store'])->name('store');
    Route::get('/', [RayonController::class, 'index'])->name('index');
});
