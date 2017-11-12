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
    return view('Lock');
})->name("/");
Route::get('/error', function () {
    return view('Error');
})->name("error");

Route::get('/pagenotfound','userController@pagenotfound')->name('notfound');
Route::post('/home','userController@home')->name("home");

Route::get('/login',function ()
{
    return view('error.404');
})->name("login");

Route::post('/add','userController@add')->name("add");
Route::get('/add_user', function () {
    return view('add_user');
});



Route::group(['middleware'=>['auth']],function(){



    Route::get('/show','userController@show')->name("show");
    Route::get('/stock','StockController@show_stock')->name("stock");






Route::post('/add_size','StockController@add_size')->name("add_size");
Route::post('/add_cat','StockController@add_cat')->name("add_cat");
Route::get('/manage_cat_size','StockController@manage_cat_size')->name("manage_cat_size");

Route::post('/add_stock','StockController@add_stock')->name("add_stock");
Route::post('/edit_stock/{id}','StockController@edit_stock')->name("edit_stock");
Route::get('/deleteitem/{id}','StockController@deleteitem')->name("deleteitem");
Route::get('/edititem/{id}','StockController@edititem')->name("edititem");
Route::post('/search','StockController@search')->name("search");
Route::post('/search_by_name','StockController@search_by_name')->name("search_by_name");

Route::post('/add_supplier','SupplierController@add_supplier')->name("add_supplier");
Route::get('/suppliers','SupplierController@show_sup' )->name("suppliers");
Route::get('/editsup/{id}','SupplierController@editsup' )->name("editsup");
Route::post('/updatesup/{id}','SupplierController@updatesup' )->name("updatesup");
Route::get('/deletesup/{id}','SupplierController@deletesup' )->name("deletesup");

Route::post('/add_customer','CustomerController@add_customer')->name("add_customer");
Route::get('/customers','CustomerController@show_cus' )->name("customers");
Route::get('/editcus/{id}','CustomerController@editcus' )->name("editcus");
Route::post('/updatecus/{id}','CustomerController@updatecus' )->name("updatecus");
Route::get('/deletecus/{id}','CustomerController@deletecus' )->name("deletecus");

Route::get('/show_purchase','purchaseController@show_pur' )->name("show_purchase");
Route::post('/add_purchase','purchaseController@purchase' )->name("add_purchase");
Route::post('/update_purchase/{id}','purchaseController@update_purchase' )->name("update_purchase");
Route::get('/editpur/{id}','purchaseController@editpur' )->name("editpur");
Route::get('/deletepur/{id}','purchaseController@deletepur' )->name("deletepur");

    Route::get('/sale','SaleController@show')->name("sale");
    Route::get('/add_sale','SaleController@show')->name("add_sale");
    Route::get('/search_item','SaleController@search_item')->name("search_item");

    Route::get('demos/livesearch','SaleController@liveSearch');
});
Route::get('/logout','userController@logout' )->name("logout");