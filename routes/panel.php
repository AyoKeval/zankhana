<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\AuthController;
use App\Http\Controllers\Panel\DashboardController;
use App\Http\Controllers\Panel\BookController;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::get('/logout', [AuthController::class, 'logout'])->name('panel.logout');

Route::middleware(['panel', 'nocache'])->prefix('panel')->name('panel.')->group(function () {

  Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

  Route::get('/books', [BookController::class, 'index'])->name('books');

  Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
  Route::get('/books/{id}', [BookController::class, 'show'])->name('books.show');
  Route::get('/books/{id}/edit', [BookController::class, 'edit'])->name('books.edit');

  Route::post('/books/store', [BookController::class, 'store'])->name('books.store');

  Route::get('/books/{id}/status/{status}', [BookController::class, 'status'])->name('books.status');
  Route::delete('/books/{id}/delete', [BookController::class, 'destroy'])->name('books.destroy');
});