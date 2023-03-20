<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DenemeController;
use App\Http\Controllers\BodyfatController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\PermissionController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->get('/my-protected-route', function (Request $request) {
    return "safe";
});

Route::post('/auth/register', [AuthController::class, 'registeruser']);
Route::post('/auth/login', [AuthController::class, 'loginUser'])->name('login');


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::apiResource('roles', RoleController::class);
    Route::get('/role/admin/{user}', [RoleController::class, 'assign']);
    Route::apiResource('permissions', PermissionController::class);
    Route::get('/permission/admin/{user}', [PermissionController::class, 'assign']);

    Route::apiResource('users', UserController::class);
    Route::get('/user/factory', [UserController::class, 'factory']);
    Route::get('/user/{user}', [UserController::class, 'getUser']);

    Route::post('/auth/logout', [AuthController::class, 'logout']);
    Route::apiResource('generals', GeneralController::class);
    Route::apiResource('bodyfats', BodyfatController::class);
    Route::get('/bodyfat/factory', [BodyfatController::class, 'factory']);
});
