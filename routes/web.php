<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TaskController::class, 'index']);

Route::get('/show/{task}', [TaskController::class, 'show']);

Route::get('/create-task', [TaskController::class, 'create']);

Route::put('/store-task', [TaskController::class, 'store']);

Route::get('/edit-task/{task}', [TaskController::class, 'edit']);

Route::patch('/update-task/{task}', [TaskController::class, 'update']);

Route::delete('/destroy-task', [TaskController::class, 'destroy']);

Route::patch('/update-task-status/{task}', [TaskController::class, 'updateTaskStatus']);
