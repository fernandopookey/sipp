<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['isAdmin', 'auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // USERS
    Route::get('/users', [UserController::class, 'index'])->name('users');
    Route::get('/users/create', [UserController::class, 'create'])->name('createUsers');
    Route::post('/users/store', [UserController::class, 'store'])->name('storeUsers');
    Route::get('/users/edit/{id}', [UserController::class, 'edit'])->name('editUsers');
    Route::put('/users/update/{id}', [UserController::class, 'update'])->name('updateUsers');
    Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('deleteUser');
    Route::delete('/users/delete/{id}', [UserController::class, 'destroy'])->name('routeCoba');
});

Route::get('/', [HomeController::class, 'index'])->name('home');



require __DIR__.'/auth.php';
