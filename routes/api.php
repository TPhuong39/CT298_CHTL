<?php

use App\Http\Controllers\ApiController;
use App\Models\Rate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/stores', [ApiController::class, 'stores'])->name('api.stores');
Route::get('/reviews/{id}', [ApiController::class, 'getCommets'])->name('rate.getCommets');
Route::get('/compare-product-price/{id}/{storeId}', [ApiController::class, 'compareProductPrice'])->name('api.compareProductPrice');
Route::get('/store-and-product', [ApiController::class, 'storeAndProduct'])->name('api.storeAndProduct');
