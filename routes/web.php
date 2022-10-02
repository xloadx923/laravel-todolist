<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ConnexionController;
use Illuminate\Http\Request;


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

Route::get('/token', function (Request $request) {
    $token = $request->session()->token();
 
    $token = csrf_token();
 
    // ...
});
Route::get('index',         [TaskController::class, 'index']);
Route::get('create',        [TaskController::class, 'create']);
Route::get('index/list',    [TaskController::class, 'list']);
Route::get('index/history', [TaskController::class, 'history']);
Route::get('inscription',   [InscriptionController::class, 'inscription']);
Route::post('inscription',  [InscriptionController::class, 'postInscription']);
Route::get('connexion',     [ConnexionController::class, 'formulaire']);
Route::post('connexion',    [ConnexionController::class, 'traitement']);
