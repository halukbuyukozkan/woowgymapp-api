<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ParqController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\BodyfatController;
use App\Http\Controllers\Api\GeneralController;
use App\Http\Controllers\Api\PermissionController;

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

Route::post('/auth/register', [AuthController::class, 'registeruser']);
Route::post('/auth/login', [AuthController::class, 'loginUser'])->name('login');


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::apiResource('roles', RoleController::class);
    Route::apiResource('permissions', PermissionController::class);

    Route::apiResource('users', UserController::class);
    Route::get('/user/factory', [UserController::class, 'factory']);
    Route::get('/user/{user}', [UserController::class, 'getUser']);

    Route::apiResource('generals', GeneralController::class);
    Route::apiResource('bodyfats', BodyfatController::class);
    Route::apiResource('parqs', ParqController::class);
    Route::get('/bodyfat/factory', [BodyfatController::class, 'factory']);
});
