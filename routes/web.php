<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');
Route::get('/getProduct/{id}', 'InventoryController@getProduct');
Route::get('/getCPU/{id}', 'InventoryController@getCPU');
Route::get('/getGPU/{id}', 'InventoryController@getGPU');
Route::get('/getRAM/{id}', 'InventoryController@getRAM');
Route::get('/getManufacturer/{id}', 'InventoryController@getManufacturer');
Route::get('/getStorage/{id}', 'InventoryController@getStorage');
Route::get('/getUsage/{id}', 'InventoryController@getUsage');
Route::get('/getScreen/{id}', 'InventoryController@getScreen');
Route::get('/getDevice/{id}', 'InventoryController@getDevice');
Route::get('/getInventory/{code}', 'InventoryController@getInventory');
Route::resource('/inventory', 'InventoryController');
Route::post('/billing/add', 'BillController@add');
Route::resource('/billing', 'BillController');
Route::resource('/cpu', 'CategoryCPUController');
Route::resource('/gpu', 'CategoryGPUController');
Route::resource('/ram', 'CategoryRAMController');
Route::resource('/screen', 'CategoryScreenController');
Route::resource('/storage', 'CategoryStorageController');
Route::resource('/manufacturer', 'CategoryManufacturerController');
Route::resource('/earnings', 'EarningController');
Route::resource('/supplier', 'SupplierController');
Route::resource('/usage', 'CategoryUsageController');
Route::resource('/device', 'CategoryDeviceController');
Route::get('/download/{id}', 'BarcodeController@download');
Route::resource('/barcodes', 'BarcodeController');
Route::resource('/search', 'SearchController');

