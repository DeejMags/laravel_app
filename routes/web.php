<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// Default Laravel welcome page at root URL
Route::get('/', function () {
    return view('welcome');
});

// Greet routes with explicit paths
Route::get('/greet', [GreetController::class, 'index'])->name('greet.form');
Route::post('/greet/submit', [GreetController::class, 'greet'])->name('greet.submit');

// Task routes
Route::resource('task', TaskController::class);
