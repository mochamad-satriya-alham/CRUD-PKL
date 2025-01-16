<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/', function () {
    return view('layouts.template');
});

Route::prefix('Student')->name('Student.')->group(function(): void{
    Route::get('create', [StudentController::class, 'create'])->name('create');
    Route::post('store', [StudentController::class, 'store'])->name('store');
});
