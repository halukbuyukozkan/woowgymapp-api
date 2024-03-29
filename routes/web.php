<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ParqController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Maxvo2Controller;
use App\Http\Controllers\BodyfatController;
use App\Http\Controllers\GeneralController;
use App\Http\Controllers\IllnessController;
use App\Http\Controllers\MobilityController;
use App\Http\Controllers\StrengthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FlexibilityController;
use App\Http\Controllers\IllnessTypeController;
use App\Http\Controllers\LungCapacityController;
use App\Http\Controllers\BloodpressureController;
use App\Http\Controllers\FastingbloodsugarController;

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



Route::group(['middleware' => ['guest']], function () {
    Route::get('/login', [AuthController::class, 'loginShow'])->name('login.show');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
});

Route::group(['middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/locale/{locale}', [DashboardController::class, 'changeLocal'])->name('changeLocal');

    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

    Route::resource('users', UserController::class);
    Route::resource('users.parqs', ParqController::class);
    Route::resource('users.bodyfats', BodyfatController::class);
    Route::resource('users.bloodpressures', BloodpressureController::class);
    Route::resource('users.fastingbloodsugars', FastingbloodsugarController::class);

    Route::resource('users.generals', GeneralController::class);
    Route::resource('users.lungcapacities', LungCapacityController::class);
    Route::resource('users.mobilities', MobilityController::class);
    Route::resource('users.strengths', StrengthController::class);
    Route::resource('users.maxvo2s', Maxvo2Controller::class);
    Route::resource('users.flexibilities', FlexibilityController::class);

    Route::resource('illnesses', IllnessController::class);
    Route::resource('illnessTypes', IllnessTypeController::class);
});
