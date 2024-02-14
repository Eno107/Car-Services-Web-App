<?php

use App\Models\Make;
use App\Models\Service;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Database\Factories\ServiceFactory;
use App\Http\Controllers\CarsController;
use App\Http\Controllers\TempController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProblemsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AppointmentController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

Route::get('/', [TempController::class, 'index'])->middleware('guest');

Route::get('/about', [TempController::class, 'about']);

Route::get('services', [ServicesController::class, 'index']);

Route::get('services/{service:slug}', [ServicesController::class, 'show']);

Route::post('user/update', [UserController::class, 'update']);

Route::patch('comments/update/{comment:id}', [CommentsController::class, 'update']);
Route::delete('comments/delete/{comment:id}', [CommentsController::class, 'delete']);

Route::get('problems', [ProblemsController::class, 'index']);
Route::post('problems', [ProblemsController::class, 'store']);

Route::delete('problem/delete/{problem:id}', [ProblemsController::class, 'destroy']);

Route::get('problems/{problem:slug}', [ProblemsController::class, 'show']);
Route::post('problems/{problem:slug}', [CommentsController::class, 'store']);

Route::get('{user:name}/cars/{car:id}', [CarsController::class, 'show'])->middleware('auth');
Route::post('{user:name}/cars', [CarsController::class, 'store'])->middleware('auth');
Route::post('{user:name}/cars/{car:id}', [CarsController::class, 'update'])->middleware('auth');
Route::delete('{user:name}/cars/{car:id}', [CarsController::class, 'delete'])->middleware('auth');

Route::post('/appointment/destroy/{appointment:id}', [AppointmentController::class, 'destroy']);
Route::post('/appointment/store', [AppointmentController::class, 'store']);

Route::get('home', [DashboardController::class, 'index'])->middleware('auth');
Route::get('ui-elements', [DashboardController::class, 'uielements'])->middleware('auth');
Route::get('tables', [DashboardController::class, 'tables'])->middleware('auth');
Route::get('forms', [DashboardController::class, 'forms'])->middleware('auth');
Route::get('{user:name}', [DashboardController::class, 'profile'])->middleware('auth');
Route::get('{user:name}/cars', [DashboardController::class, 'personalCars'])->middleware('auth');

Route::post('{user:name}/cars', [CarsController::class, 'store'])->middleware('auth');
