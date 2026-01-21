<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TradingViewController;

Route::prefix('v1/trading')->group(function () {
    Route::get('/config', [TradingViewController::class, 'getConfig']);
    Route::post('/order', [TradingViewController::class, 'placeOrder'])->middleware('auth:sanctum');
});
