<?php

use Illuminate\Support\Facades\Route;
use App\Application\Http\Controllers\ProjectsController;
use App\Application\Http\Controllers\SettingController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('api')->get('/projects', ProjectsController::class . '@index');
Route::middleware('api')->post('/projects', ProjectsController::class . '@store');
Route::middleware('api')->post('/projects/{project}', ProjectsController::class . '@destroy');

Route::middleware('api')->get('/setting', SettingController::class . '@index');
Route::middleware('api')->post('/setting', SettingController::class . '@store');
