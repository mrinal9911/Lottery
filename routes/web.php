<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/login', [HomeController::class, 'login'])->name('login');
Route::get('/result', [HomeController::class, 'result'])->name('result');
Route::get('/result-summary', [HomeController::class, 'resultSummary'])->name('result-summary');


Route::prefix('admin')->middleware(['auth'])->group(function () {
    Route::resource('lottery-results', \App\Http\Controllers\AdminController::class);
});
