<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LecturerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MajorController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('can:dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit')->middleware('can:profile.update');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('can:profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy')->middleware('can:profile.delete');

    // admin
    Route::middleware('role:admin')->group(function () {
        Route::resource('user', UserController::class);
        // Route::resource('major', MajorController::class);
        // Route::resource('lecturer', LecturerController::class);
        // Route::resource('student', StudentController::class);
    });

    // with permission
    // Major (Program Studi)
    Route::get('/major', [MajorController::class, 'index'])->name('major.index')->middleware('can:major.read');
    Route::get('/major/create', [MajorController::class, 'create'])->name('major.create')->middleware('can:major.create');
    Route::post('/major', [MajorController::class, 'store'])->name('major.store')->middleware('can:major.create');
    Route::get('/major/{major}', [MajorController::class, 'show'])->name('major.show')->middleware('can:major.read');
    Route::get('/major/{major}/edit', [MajorController::class, 'edit'])->name('major.edit')->middleware('can:major.update');
    Route::put('/major/{major}', [MajorController::class, 'update'])->name('major.update')->middleware('can:major.update');
    Route::delete('/major/{major}', [MajorController::class, 'destroy'])->name('major.destroy')->middleware('can:major.delete');
    // Lecturer (Dosen)
    Route::get('/lecturer', [LecturerController::class, 'index'])->name('lecturer.index')->middleware('can:lecturer.read');
    Route::get('/lecturer/create', [LecturerController::class, 'create'])->name('lecturer.create')->middleware('can:lecturer.create');
    Route::post('/lecturer', [LecturerController::class, 'store'])->name('lecturer.store')->middleware('can:lecturer.create');
    Route::get('/lecturer/{lecturer}', [LecturerController::class, 'show'])->name('lecturer.show')->middleware('can:lecturer.read');
    Route::get('/lecturer/{lecturer}/edit', [LecturerController::class, 'edit'])->name('lecturer.edit')->middleware('can:lecturer.update');
    Route::put('/lecturer/{lecturer}', [LecturerController::class, 'update'])->name('lecturer.update')->middleware('can:lecturer.update');
    Route::delete('/lecturer/{lecturer}', [LecturerController::class, 'destroy'])->name('lecturer.destroy')->middleware('can:lecturer.delete');
    // Student (Mahasiswa)
    Route::get('/student', [StudentController::class, 'index'])->name('student.index')->middleware('can:student.read');
    Route::get('/student/create', [StudentController::class, 'create'])->name('student.create')->middleware('can:student.create');
    Route::post('/student', [StudentController::class, 'store'])->name('student.store')->middleware('can:student.create');
    Route::get('/student/{student}', [StudentController::class, 'show'])->name('student.show')->middleware('can:student.read');
    Route::get('/student/{student}/edit', [StudentController::class, 'edit'])->name('student.edit')->middleware('can:student.update');
    Route::put('/student/{student}', [StudentController::class, 'update'])->name('student.update')->middleware('can:student.update');
    Route::delete('/student/{student}', [StudentController::class, 'destroy'])->name('student.destroy')->middleware('can:student.delete');
});



require __DIR__ . '/auth.php';
