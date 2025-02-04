<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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
