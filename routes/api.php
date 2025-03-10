<?php

use App\Http\Controllers\Api\Client\Auth\ClientLoginController as LoginController;
use App\Http\Controllers\Api\Client\Dashboard\DashboardController;
use App\Http\Controllers\Api\Client\Notice\NoticeController;
use App\Http\Controllers\Api\Client\Renovation\ApiRenovationController;
use App\Http\Controllers\Api\Client\Ticket\TicketController;
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
        Route::controller(TicketController::class)->prefix('tickets')->name('tickets.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/store', 'store')->name('store');
            Route::delete('/{id}', 'destroy')->name('destroy');
          });
        Route::controller(ApiRenovationController::class)->prefix('renovation')->name('renovation.')->group(function () {
            Route::get('/', 'index')->name('index');
            Route::post('/store', 'store')->name('store');
            Route::delete('/{id}', 'destroy')->name('destroy');
          });
        Route::get('/logout', [LoginController::class, 'clientLogout'])->name('logout');
    });
});
