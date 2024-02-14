<?php

use App\Http\Controllers\Api\V1\CarsController;
use App\Http\Controllers\Api\V1\MakesController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\ProblemsController;
use App\Http\Controllers\Api\V1\ServicesController;
use App\Http\Controllers\Api\V1\CategoriesController;


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

Route::get('cars', [CarsController::class, 'index']);
Route::get('cars/{car:id}', [CarsController::class, 'show']);

Route::get('makes', [MakesController::class, 'index']);

Route::get('categories', [CategoriesController::class, 'index']);

Route::get('services', [ServicesController::class, 'index']);
Route::get('services/{service:id}', [ServicesController::class, 'show']);

Route::get('problems', [ProblemsController::class, 'index']);
Route::get('problems/{problem:id}', [ProblemsController::class, 'show']);
