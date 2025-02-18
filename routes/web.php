<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MakerController;
use App\Http\Controllers\BodyController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/makers', [MakerController::class, 'index'])->name('makers.index');
Route::get('/bodies', [BodyController::class, 'index'])->name('bodies.index');

//route-ok létrehozása
//Route::resource('makers', MakerController::class);
Route::get('/makers/create', [MakerController::class, 'create'])->name('makers.create');
Route::patch('/makers/{maker}', [MakerController::class, 'update'])->name('makers.update');
Route::delete('/makers/{maker}', [MakerController::class, 'destroy'])->name('makers.destroy');
Route::get('/makers/{maker}/edit', [MakerController::class, 'edit'])->name('makers.edit');
Route::get('/makers/{maker}', [MakerController::class, 'show'])->name('makers.show');

Route::resource('bodies', BodyController::class);
Route::get('/bodies/create', [BodyController::class, 'create'])->name('bodies.create');
Route::patch('/bodies/{body}', [BodyController::class, 'update'])->name('bodies.update');
Route::delete('/bodies/{body}', [BodyController::class, 'destroy'])->name('bodies.destroy');
Route::get('/bodies/{body}/edit', [BodyController::class, 'edit'])->name('bodies.edit');
Route::get('/bodies/{body}', [BodyController::class, 'show'])->name('bodies.show');

//Route::resource('fuels', FuelController::class);
//Route::resource('models', ModelController::class);
