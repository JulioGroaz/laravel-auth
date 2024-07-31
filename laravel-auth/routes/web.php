<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;

// Rotta per la home page
Route::get('/', [ProjectController::class, 'index'])->name('home');

Auth::routes();

// Rotte per i progetti
Route::get('/projects', [ProjectController::class, 'index'])->name('portfolio.index');
Route::post('/projects', [ProjectController::class, 'store'])->name('portfolio.store');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('portfolio.create');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('portfolio.show');
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('portfolio.edit');
Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('portfolio.update');
Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('portfolio.destroy');
