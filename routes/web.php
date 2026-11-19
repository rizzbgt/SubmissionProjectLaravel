<?php
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;
// Route::get('/jurusan', [JurusanController::class, 'index'])
//     ->name('jurusan.index');
// Route::get('/jurusan/create', [JurusanController::class, 'create'])
//     ->name('jurusan.create');
// Route::post('/jurusan', [JurusanController::class, 'store'])
//     ->name('jurusan.store');
// Route::get('/jurusan/{id}', [JurusanController::class, 'show']);
/*
use App\Http\Controllers\JurusanController;
Route::get('/jurusan', [JurusanController::class, 'index']);
Route::get('/jurusan/{id}', [JurusanController::class, 'show']);
*/


Route::get('/matakuliah', [MatakuliahController::class, 'index'])->name('matakuliah.index');
Route::get('/matakuliah/create', [MatakuliahController::class, 'create'])->name('matakuliah.create');
Route::post('/matakuliah', [MatakuliahController::class, 'store'])->name('matakuliah.store');
Route::get('/matakuliah/{matakuliah}', [MatakuliahController::class, 'show'])->name('matakuliah.show');