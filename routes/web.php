<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\studentController;
Route::get('/', [studentController::class, 'index']);
Route::get('/new', [studentController::class, 'new']);
Route::get('/create', [studentController::class, 'create']);
Route::get('/delete/{id}', [studentController::class, 'delete']);
Route::get('/edit/{id}', [studentController::class, 'edit']);
Route::get('/update/{id}', [studentController::class, 'update']);
