<?php

use App\Http\Controllers\Api\Client\Auth\ClientLoginController as LoginController;
use App\Http\Controllers\Api\Client\Dashboard\DashboardController;
use App\Http\Controllers\Api\Client\Notice\NoticeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');


Route::get( 'test', function(){
    return 123456;
});
Route::controller(LoginController::class)->prefix('client')->name('client.')->group(function () {
	Route::post('login', 'userLogin')->name(name: 'login'); 
    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::middleware('auth:api')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
        Route::controller(NoticeController::class)->prefix('notices')->name('notice.')->group(function () {
            Route::get('/', 'index')->name('index');
          });
        Route::get('/logout', [LoginController::class, 'clientLogout'])->name('logout');
    });
});
