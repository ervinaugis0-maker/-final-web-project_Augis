<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShoeController;

// Dashboard //
Route::get('/', function () {
    return view('dashboard');
});

// READ (display all shoes)
Route::get('/shoes', [ShoeController::class, 'index'])->name('shoes.index');

// CREATE (form)
Route::get('/shoes/create', [ShoeController::class, 'create'])->name('shoes.create');

// STORE (save data)
Route::post('/shoes', [ShoeController::class, 'store'])->name('shoes.store');

// EDIT (form)
Route::get('/shoes/{shoe}/edit', [ShoeController::class, 'edit'])->name('shoes.edit');

// UPDATE
Route::put('/shoes/{shoe}', [ShoeController::class, 'update'])->name('shoes.update');

// DELETE
Route::delete('/shoes/{shoe}', [ShoeController::class, 'destroy'])->name('shoes.destroy');