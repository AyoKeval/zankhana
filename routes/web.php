<?php

use App\Http\Controllers\Web\BookController;
use App\Http\Controllers\Web\DashboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('web')->group(function () {

    Route::get('/', function () {
        // return view('welcome');
        return redirect('/home');
    });

    Route::get('/home', [DashboardController::class, 'index'])->name('home');
    Route::get('/board', [DashboardController::class, 'board'])->name('board');
    Route::get('/others', [DashboardController::class, 'others'])->name('others');
    Route::get('/contact', [DashboardController::class, 'contact'])->name('contact');
    Route::post('/contact/submit', [DashboardController::class, 'contactSubmit'])->name('contact.submit');
    Route::get('/publication', [DashboardController::class, 'publication'])->name('publication');

    Route::get('/privacy/{page}', [DashboardController::class, 'privacy'])
        ->whereIn('page', ['publication-ethics', 'plagiarism-policy', 'copyright-policy'])
        ->name('privacy');

    Route::get('/guidelines/{page}', [DashboardController::class, 'guidelines'])
        ->whereIn('page', ['author-guidelines', 'manuscript-template-part-a', 'manuscript-template-part-b'])
        ->name('guidelines');

    Route::get('/about-us', [DashboardController::class, 'aboutUs'])->name('aboutUs');

    Route::get('/book', [BookController::class, 'index'])->name('book.index');
    Route::get('/book/{any}', [BookController::class, 'show'])->name('book.show');
    Route::get('/book/{any}/sell', [BookController::class, 'count'])->name('book.sell');
});
