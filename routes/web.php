<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
    Route::get('/login', 'login')->name('login');
    Route::post('/login', 'postLogin');
    Route::match(['get', 'post'], '/result', 'result')->name('result');
    Route::match(['get', 'post'], '/result-summary', 'resultSummary')->name('result-summary');

    Route::get('/test', 'test');
});


Route::controller(AdminController::class)->prefix('admin')->middleware(['auth'])->group(function () {
    Route::get('/lottery-results', 'index')->name('lottery-results.index');
    Route::get('/lottery-results/create', 'create')->name('lottery-results.create');
    Route::post('/lottery-results', 'store')->name('lottery-results.store');
});

Route::get('/logout', [HomeController::class, 'logout'])->middleware(['auth'])->name('logout');
