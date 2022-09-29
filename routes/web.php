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

Route::get('/index', [TaskController::class, 'index']);
Route::get('index/create', [TaskController::class, 'create']);
// Route::get('/tasks-create.html', [TaskController::class, 'create']);
// Route::get('/tasks/edit/{id}', [TaskController::class, 'edit']);
