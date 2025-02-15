<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// Keep the default Laravel welcome page
Route::get('/', function () {
    return view('welcome');
});

// Greet routes - moved to /greet path
Route::get('/greet', [GreetController::class, 'index'])->name('greet.form');
Route::post('/greet/submit', [GreetController::class, 'greet'])->name('greet.submit');

// Task routes remain at /task
Route::resource('task', TaskController::class);
