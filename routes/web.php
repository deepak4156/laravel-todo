<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', [TaskController::class, 'index']);
Route::get('/tasks', [TaskController::class, 'index']);


Route::get('/tasks/create   ', [TaskController::class, 'create']);
Route::post('/tasks', [TaskController::class, 'store'])->name('store.data');

Route::patch('/tasks/{id}', [TaskController::class, 'update']);