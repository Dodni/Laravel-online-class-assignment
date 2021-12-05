<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//Auth::routes();

Route::get('/contact', [\App\Http\Controllers\ContactController::class, 'show'])->middleware('guest');
Route::post('/contact', [\App\Http\Controllers\ContactController::class, 'store'])->middleware('guest');
Route::get('/galery', [\App\Http\Controllers\GaleryController::class, 'show'])->middleware('guest');
Route::get('/regional', [\App\Http\Controllers\RegionalController::class, 'show'])->middleware('guest');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';











