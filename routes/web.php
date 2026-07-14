<?php

use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // admin
    Route::middleware('role:admin')->group(function () {
        Route::resource('user', UserController::class);
        Route::resource('program-studi', MajorController::class);
        Route::resource('lecturer', LecturerController::class);
    });

    // lecture
    Route::middleware('role:user')->group(function () {});

    // student
    Route::middleware('role:student')->group(function () {});
});



require __DIR__ . '/auth.php';
