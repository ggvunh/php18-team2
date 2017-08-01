<?php
use App\Product;
use App\Category;
use App\Brand;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;

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
Route::resource('/', 'ProductController');

Route::get('admin/products/search', 'AdminProductController@search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//product-detail

Route::get('/product-detail/{product}', 'ProductController@product_detail');

Route::get('/search', 'ProductController@search');



///admin
Route::resource('/admin/products', 'AdminProductController');

Route::get('/admin', function(){
	return redirect('/admin/products');
});

Route::get('admin/products/delete/{product}', 'AdminProductController@delete');
///admin category
Route::resource('admin/categories', 'AdminCategoryController');
Route::get('admin/categories/delete/{category}', 'AdminCategoryController@delete');
///admin brans
Route::resource('admin/brands', 'AdminBrandController');
Route::get('admin/brands/delete/{brand}', 'AdminBrandController@delete');

///carts
Route::get('/carts', 'CartController@index');
Route::get('carts/{id}/add', 'CartController@add');
Route::get('carts/delete/{rowId}', 'CartController@delete');
Route::get('carts/checkout', 'CartController@checkout');
Route::post('/carts', 'CartController@store_order');
Route::get('carts/manage' , 'CartController@manage');
Route::get('carts/manage/{id}/cancel' , 'CartController@cancel');
Route::get('carts/manage/{id}/detail' , 'CartController@detail');
//parameters
Route::resource('admin/parameters', 'AdminParameterController');
Route::get('admin/parameters/delete/{parameter}', 'AdminParameterController@delete');

Route::get('ajax', function(){
	$products = Cart::content();
	return view('layouts.ajax')->with('products', $products);
});
Route::resource('admin/orders', 'AdminOrderController');
Route::resource('admin/orderdetails', 'AdminOrderDetailController');