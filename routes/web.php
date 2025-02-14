<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GreetController;
use App\Http\Controllers\TaskController;

// Remove the default welcome route since we're using GreetController
// Route::get('/', function () {
//     return view('welcome');
// });

// Greet routes
Route::get('/', [GreetController::class, 'index']);
Route::post('/greet', [GreetController::class, 'greet'])->name('greet');

// Task routes - make sure the URL is 'task' not 'tasks'
Route::resource('task', TaskController::class);
