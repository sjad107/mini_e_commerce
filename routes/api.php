<?php

use App\Http\Controllers\api\v1\CartItemsController;
use App\Http\Controllers\api\v1\ItemsController;
use App\Http\Controllers\api\v1\CartsController;
use App\Http\Controllers\api\v1\CustomersController;
use App\Http\Controllers\api\v1\CategoriesController;
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

Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\api\v1'], function(){
    Route::apiResource('items', ItemsController::class);
    Route::apiResource('customers', CustomersController::class);
    Route::apiResource('carts', CartsController::class);
    Route::apiResource('cartItems', CartItemsController::class);
    Route::apiResource('categories', CategoriesController::class);
});
