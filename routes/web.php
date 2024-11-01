<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SetsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Public routes
Route::get('/', [HomeController::class, 'index'])
    ->name('home');
Route::get('/about', [AboutController::class, 'about'])
    ->name('about');
Route::get('/search', [SetsController::class, 'search'])
    ->name('sets.search');

// Admin routes
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])
        ->name('admin')
        ->middleware('auth')
        ->can('is-admin');
    Route::patch('/{id}', [AdminController::class, 'update'])
        ->name('admin.update')
        ->middleware('auth')
        ->can('is-admin');
});

// Authenticated routes
Route::middleware('auth')
    ->group(function () {
        Route::get('/dashboard', function () {
            return view('dashboard');
        })->middleware('verified')
            ->name('dashboard');

        Route::get('/profile', [ProfileController::class, 'edit'])
            ->name('profile.edit');
        Route::patch('/profile', [ProfileController::class, 'update'])
            ->name('profile.update');
        Route::delete('/profile', [ProfileController::class, 'destroy'])
            ->name('profile.destroy');
        Route::get('/uploaded', [SetsController::class, 'uploaded'])
            ->name('sets.uploaded')
            ->middleware('auth');
    });

Route::get('/sets', [SetsController::class, 'index'])
    ->name('sets.index');
Route::get('/sets/create', [SetsController::class, 'create'])
    ->name('sets.create');
Route::post('/sets', [SetsController::class, 'store'])
    ->name('sets.store')
    ->middleware('auth');
Route::get('/sets/{set}', [SetsController::class, 'show'])
    ->name('sets.show');
Route::get('/sets/{set}/edit', [SetsController::class, 'edit'])
    ->name('sets.edit')
    ->middleware('auth')
    ->can('edit-set,set');
Route::patch('/sets/{set}', [SetsController::class, 'update'])
    ->name('sets.update')
    ->middleware('auth')
    ->can('edit-set,set');
Route::delete('/sets/{set}', [SetsController::class, 'destroy'])
    ->name('sets.destroy')
    ->middleware('auth')
    ->can('edit-set,set');

require __DIR__ . '/auth.php';
