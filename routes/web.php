<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;


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
    // Ruta para la vista de usuario
Route::get('/user/dashboard', [UserController::class, 'index'])->name('user.dashboard')->middleware('auth');
// Ruta para la vista de administrador
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard')->middleware('auth');
Route::get('/admin/tablaUser', [AdminController::class, 'tablaUser'])->name('tabla-user')->middleware('auth');
Route::get('/admin/nuevoUser', [AdminController::class, 'nuevoUser'])->name('nuevo-user')->middleware('auth');

});



require __DIR__.'/auth.php';
