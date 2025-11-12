<?php

use App\Http\Controllers\FuelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('public.main');
    })->name('public.main');

    Route::get('/car-data', function() {
        return view('public.car');
    })->name('car.data');

    Route::get('/fuel-list', [FuelController::class, 'index'])->name('fuel.list');
    Route::post('/fuel', [FuelController::class, 'store'])->name('fuel.store');
    Route::put('/fuel/{id}', [FuelController::class, 'update'])->name('fuel.update');
    Route::delete('/fuel/{id}', [FuelController::class, 'destroy'])->name('fuel.destroy');
    Route::get('/fuel/{id}', [FuelController::class, 'show'])->name('fuel.show');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
