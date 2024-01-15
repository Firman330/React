<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\FotoController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']); 
Route::post('usersaddnew', [UserController::class, 'store']); 
Route::put('usersupdate/{id}', [UserController::class, 'update']);
Route::delete('usersdelete/{id}', [UserController::class, 'destroy']);

// Route::get('fotos', [FotoController::class, 'index']);
// Route::get('fotos/{id}', [FotoController::class, 'show']);
// Route::post('fotosaddnew', [FotoController::class, 'store']);
// Route::put('fotosupdate/{id}', [FotoController::class, 'update']);
// Route::delete('fotosdelete/{id}', [FotoController::class, 'destroy']);