<?php

use App\Application\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Application\Http\Controllers\ProjectsController;
use App\Application\Http\Controllers\SettingController;
use App\Application\Http\Controllers\SocialsController;

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

Route::middleware('api')->get('/socials', SocialsController::class . '@index');
Route::middleware('api')->post('/socials', SocialsController::class . '@store');
Route::middleware('api')->post('/socials/{social}', SocialsController::class . '@destroy');

Route::middleware('api')->post('/send-email', ContactController::class . '@sendMail');
