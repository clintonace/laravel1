<?php

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
    // $name ="Clinton";
    // return view('welcome', compact('name'));
// })->name('welcome');

Auth::routes();


Route::get('/', 'MainController@index')->name('welcome');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('view-products', 'MainController@viewproducts')->name('view');

Route::get('hot-offers', 'MainController@hot')->name('hot');

Route::get('Add-Products', 'ProductController@add')->name('add');
Route::post('/store-product', 'ProductController@store')->name('product.store');
Route::get('all-products', 'ProductController@products')->name('products.all');
Route::get('all-new', 'CategoryController@new')->name('new');
Route::post('/store-category', 'CategoryController@cart')->name('category.store');
