<?php

use App\Http\Controllers\API\ClientController;
use App\Http\Controllers\API\ProductController;
use App\Http\Controllers\API\SalesController;
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


//Route::get('/getClient', [\App\Http\Controllers\API\ClientController::class, 'index'])->name("ClientController");
//Route::get('/getClient/{id}', [\App\Http\Controllers\API\ClientController::class, 'index'])->name("ClientController");

//
//Route::group(['namespace' => 'App\Http\Controllers\API'], function() {
//    Route::get('/getClient', "ClientController")->name("ClientController");
//});



Route::apiResource('getClient', ClientController::class);  //http://127.0.0.1:8000/api/getClient/1
Route::apiResource('getSales', SalesController::class); //http://127.0.0.1:8000/api/getSales
Route::apiResource('getProductList', ProductController::class);//http://127.0.0.1:8000/api/getProductList
