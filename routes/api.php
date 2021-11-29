<?php

use App\Http\Controllers\GetProducProviderCompanyProductsController;
use App\Http\Controllers\GetShopsOrdersController;
use App\Http\Controllers\ProductProviderCompanyController;
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

Route::get('/product-provider-company', [ProductProviderCompanyController::class, 'getAll']);
Route::post('/product-provider-company', [ProductProviderCompanyController::class, 'create']);
Route::get('/product-provider-company/{id}', [ProductProviderCompanyController::class, 'get']);
Route::patch('/product-provider-company/{id}', [ProductProviderCompanyController::class, 'update']);
Route::delete('/product-provider-company/{id}', [ProductProviderCompanyController::class, 'delete']);

Route::get('/shop/{shopId}/order', [GetShopsOrdersController::class, 'getFromShop']);
Route::get('/product-provider-company/{id}/product', [GetProducProviderCompanyProductsController::class, 'getFromCompany']);
