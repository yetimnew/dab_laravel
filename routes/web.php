<?php

use App\Http\Controllers\Admin\FrontEndController;
use App\Http\Controllers\Admin\MenueController;
use App\Http\Controllers\Admin\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontEndController::class, 'index']);


Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('layouts.backend.home');
    });
    Route::resource('menu', MenueController::class);
    Route::resource('project', ProjectController::class);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
