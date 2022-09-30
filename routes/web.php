<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;


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

Route::get('index', [TaskController::class, 'index']);
Route::get('create', [TaskController::class, 'create']);
Route::get('index/list', [TaskController::class, 'list']);
Route::get('index/history', [TaskController::class, 'history']);
Route::get('connexion', [TaskController::class, 'connexion']);
// Route::get('/tasks-create.html', [TaskController::class, 'create']);
// Route::get('/tasks/edit/{id}', [TaskController::class, 'edit']);
