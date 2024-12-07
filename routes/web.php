<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
});


Route::get('/', function () {
    return view('Home');
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
});

Route::get('/register', function () {
    return view('register');
});
require __DIR__.'/auth.php';
