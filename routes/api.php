<?php

use App\Http\Controllers\Api\ProductApiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AddProductsControladorApiController;
use App\Http\Controllers\Api\ListProductApiController;
use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\CartApiController;
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

/*Route::apiResource('/apiproducts', ProductApiController::class);*/
// Route::apiResource('/apiusers', UserApiController::class);
// Route::apiResource('/apicategories', CategoryApiController::class);
Route::apiResource('/productos',AddProductsControladorApiController::class)->
        parameters(['productos'=> 'product'])->except(['update']);
Route:: apiResource('/products',ListProductApiController::class);

Route:: apiResource('/categories',CategoryApiController::class);
Route:: apiResource('/cart',CartApiController::class);
