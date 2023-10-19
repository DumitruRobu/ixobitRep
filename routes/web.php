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
    Route::post('/updateBrand/{id}', "UpdateBrandController")->name("UpdateBrand");
});

Route::group(['namespace' => 'App\Http\Controllers\ParamsControllers'], function() {
      Route::get('/addParam', "AddNewParamController")->name("AddNewParam");
      Route::post('/addParam', "StoreNewParamController")->name("StoreNewParam");
      Route::get('/viewAllParams', "ViewAllParamsController")->name("ViewAllParams");
      Route::delete('/deleteParam/{id}', "DeleteParamController")->name("DeleteParam");
      Route::get('/editParam/{id}', "EditParamController")->name("EditParam");
      Route::post('/updateParam/{id}', "UpdateParamController")->name("UpdateParam");
});

Route::group(['namespace' => 'App\Http\Controllers\ProduseControllers'], function() {
    Route::get('/addProdus', "AddNewProdusController")->name("AddNewProdus");
    Route::post('/addProdus', "StoreNewProdusController")->name("StoreNewProdus");
    Route::get('/viewAllProdus', "ViewAllProdusController")->name("ViewAllProdus");
    Route::delete('/deleteProdus/{id}', "DeleteProdusController")->name("DeleteProdus");
    Route::get('/editProdus/{id}', "EditProdusController")->name("EditProdus");
    Route::post('/updateProdus/{id}', "UpdateProdusController")->name("UpdateProdus");
    Route::get('/viewProdus/{id}', "ViewProdusController")->name("ViewProdus");
    Route::get('/letsBuy/{id}', "BuyProdusController")->name("BuyProdus");
});

Route::group(['namespace' => 'App\Http\Controllers\ClientControllers'], function() {
    Route::get('/addClient', "AddNewClientController")->name("AddNewClient");
    Route::post('/addClient', "StoreNewClientController")->name("StoreNewClient");
    Route::get('/viewAllClients', "ViewAllClientsController")->name("ViewAllClients");
    Route::delete('/deleteClient/{id}', "DeleteClientController")->name("DeleteClient");
    Route::get('/editClient/{id}', "EditClientController")->name("EditClient");
    Route::post('/updateClient/{id}', "UpdateClientController")->name("UpdateClient");
});

Route::group(['namespace' => 'App\Http\Controllers\VinzariControllers'], function() {
    Route::get('/addVinzare', "AddNewVinzareController")->name("AddNewVinzare");
    Route::post('/addVinzare', "StoreNewVinzareController")->name("StoreNewVinzare");
    Route::get('/viewAllVinzari', "ViewAllVinzariController")->name("ViewAllVinzari");
    Route::delete('/deleteVinzare/{id}', "DeleteVinzareController")->name("DeleteVinzare");
    Route::get('/editVinzare/{id}', "EditVinzareController")->name("EditVinzare");
    Route::post('/updateVinzare/{id}', "UpdateVinzareController")->name("UpdateVinzare");
});
