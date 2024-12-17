<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PohonController;
use Illuminate\Support\Facades\Route;

require __DIR__ . '/auth.php';

Route::get('/', function () {
    return view('Home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Pohon CRUD routes
    Route::resource('pohon', PohonController::class);
});

Route::get('/Lokasi', function () {
    return view('Lokasi');
});
Route::get('/Pohonku', function () {
    return view('Pohonku');
});
Route::get('/Artikel', function () {
    return view('Artikel');
});
Route::get('/FAQ', function () {
    return view('FAQ');
});
Route::get('/Profile', function () {
    return view('Profile');
});

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('/register', function () {
    return view('register');
})->name('register');
