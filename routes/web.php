<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [App\Http\Controllers\HomeController::class, 'login'])->name('login');
Route::get('/result', [App\Http\Controllers\HomeController::class, 'result'])->name('result');
Route::get('/result-summary', [App\Http\Controllers\HomeController::class, 'resultSummary'])->name('result-summary');
