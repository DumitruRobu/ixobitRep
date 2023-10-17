<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', "App\Http\Controllers\HomePageController")->name("HomePage");

Route::group(['namespace' => 'App\Http\Controllers\BrandControllers'], function() {
    Route::get('/addBrand', "AddNewBrandController")->name("AddNewBrand");
    Route::post('/addBrand', "StoreNewBrandController")->name("StoreNewBrand");
    Route::get('/viewAllBrands', "ViewAllBrandsController")->name("ViewAllBrands");
    Route::delete('/deleteBrand/{id}', "DeleteBrandController")->name("DeleteBrand");
    Route::get('/editBrand/{id}', "EditBrandController")->name("EditBrand");
    Route::post('/updateBrand/{id}}', "UpdateBrandController")->name("UpdateBrand");
});

Route::group(['namespace' => 'App\Http\Controllers\ParamsControllers'], function() {
      Route::get('/addParam', "AddNewParamController")->name("AddNewParam");
      Route::post('/addParam', "StoreNewParamController")->name("StoreNewParam");
      Route::get('/viewAllParams', "ViewAllParamsController")->name("ViewAllParams");
      Route::delete('/deleteParam/{id}', "DeleteParamController")->name("DeleteParam");
      Route::get('/editParam/{id}', "EditParamController")->name("EditParam");
      Route::post('/updateParam/{id}}', "UpdateParamController")->name("UpdateParam");
});
