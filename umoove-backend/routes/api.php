<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::controller(\App\Http\Controllers\Auth\AuthenticatedSessionController::class)->group(function() {
    Route::post('/login', 'loginApi')->name('loginApi');
    Route::post('register', 'registerApi')->name('registerApi');
    Route::get('user/{id}', 'find')->name('findUser');
});

Route::controller(\App\Http\Controllers\MovementTempController::class)->group(function() {
    Route::get('/test', 'create')->name('produitApi');
});

Route::controller(\App\Http\Controllers\CouponController::class)->group(function() {
    Route::get('/coupons/{id}', 'list')->name('couponApi');
    Route::get('/coupons', 'list_all')->name('couponAllApi');
    Route::post('/buy', 'buy')->name('buyApi');
});

Route::controller(\App\Http\Controllers\ActivityController::class)->group(function() {
    Route::get('/activities', 'list')->name('activityApi');
});

Route::controller(\App\Http\Controllers\HistoryController::class)->group(function() {
    Route::post('/add', 'add')->name('historyApi');
});

/*



Route::controller(\App\Http\Controllers\CouponTypeController::class)-group(function() {
    //Route::get('/couponType', 'create')->name('couponTypeApi');
});

Route::controller(\App\Http\Controllers\EntrepriseController::class)-group(function() {
    //Route::get('/entreprise', 'create')->name('entrepriseApi');
});



Route::controller(\App\Http\Controllers\MovementTempController::class)-group(function() {
    Route::get('/movementTemp', 'create')->name('movementTempApi');
}); */




