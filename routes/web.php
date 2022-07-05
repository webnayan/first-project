<?php
use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;

// New era student profile details

Route::get('/', [StudentController::class, 'newera']);
Route::get('/students', [StudentController::class, 'index']);
Route::get('/add-student', [StudentController::class, 'create']);
Route::post('/add-student', [StudentController::class, 'store']);
Route::get('edit-student/{id}', [StudentController::class, 'edit']);
Route::put('update-student/{id}', [StudentController::class, 'update']);
Route::get('delete-student/{id}', [StudentController::class, 'destroy']);
