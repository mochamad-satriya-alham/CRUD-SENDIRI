<?php
use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::prefix('Book')->name('Book.')->group(function(): void {
    Route::get('create', [BookController::class, 'create'])->name('create');
    Route::post('store', [BookController::class, 'store'])->name('store');
    Route::get('/', [BookController::class, 'index'])->name('home');
    Route::get('/{id}', [BookController::class, 'edit'])->name('edit');
    Route::patch('/{id}', [BookController::class, 'update'])->name('update');
    Route::delete('/{id}', [BookController::class, 'destroy'])->name('delete');

});