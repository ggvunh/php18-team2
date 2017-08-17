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

Route::group(['middleware' => 'web'], function() {

	Route::group(['middleware' => 'admin'], function () {

		

	    //admin user
	    Route::get('admin/users/{id}/order', 'AdminUserController@order_user');
		Route::get('admin/users/export', 'AdminUserController@export_users');
		Route::get('admin/users/{id}/delete', 'AdminUserController@delete_user');
		Route::get('admin/users/{id}/phan-quyen', 'AdminUserController@phan_quyen');
		Route::post('admin/users/{id}/phan-quyen', 'AdminUserController@excute_phan_quyen');
		Route::resource('admin/users', 'AdminUserController');

		///admin product
		Route::get('admin/products/search', 'AdminProductController@search');
		Route::resource('/admin/products', 'AdminProductController');
		Route::get('admin/products/delete/{product}', 'AdminProductController@delete');
		Route::get('/admin', 'AdminProductController@redirect');


		///admin category
		Route::resource('admin/categories', 'AdminCategoryController');
		Route::get('admin/categories/delete/{category}', 'AdminCategoryController@delete');

		///admin brans
		Route::resource('admin/brands', 'AdminBrandController');
		Route::get('admin/brands/delete/{brand}', 'AdminBrandController@delete');

		//admin parameters
		Route::resource('admin/parameters', 'AdminParameterController');
		Route::get('admin/parameters/delete/{parameter}', 'AdminParameterController@delete');

		//admin order	
		Route::get('admin/orders/summary','AdminOrderController@report');
		Route::get('admin/orders/summary/search','AdminOrderController@report_search');
		Route::get('admin/orders/export', 'AdminOrderController@export_order');
		Route::get('admin/orders/search', 'AdminOrderController@search');
		Route::resource('admin/orders', 'AdminOrderController');
		Route::resource('admin/{id}/orderdetails', 'AdminOrderDetailController');


		//admin
		Route::resource('admin', 'AdminController');

	});

	Route::group(['middleware' => 'auth'], function() {

		///carts
		Route::get('/carts', 'CartController@index');
		Route::get('carts/delete/{rowId}', 'CartController@delete');
		Route::get('carts/checkout', 'CartController@checkout');
		Route::post('/carts', 'CartController@store_order');
		Route::get('carts/manage' , 'CartController@manage');
		Route::get('carts/manage/{id}/cancel' , 'CartController@cancel');
		Route::get('carts/manage/{id}/detail' , 'CartController@detail');
		Route::get('carts/{rowId}/down-count', 'CartController@down_count');
		Route::get('carts/{rowId}/up-count', 'CartController@up_count');
		Route::get('carts/manage/export', 'CartController@export_order');
		Route::get('carts/manage/{id}/detail/export', 'CartController@export_order_detail');

		//profile_user
		Route::get('change-password', 'UpdatePasswordController@view_update');
		Route::post('change-password', 'UpdatePasswordController@update');
		Route::resource('/user', 'UserProfileController');
	});
	//index
	Route::resource('/', 'ProductController');
	Route::get('products/laptop', 'ProductController@listlaptop');
	Route::get('products/laptop/dell', 'ProductController@listlaptopdell');
	Route::get('products/laptop/hp', 'ProductController@listlaptophp');
	Route::get('products/dienthoai', 'ProductController@listdienthoai');
	Route::get('products/dienthoai/apple', 'ProductController@listapple');
	Route::get('products/dienthoai/samsung', 'ProductController@listdtsamsung');
	Route::get('products/maytinhbang', 'ProductController@listmaytinhbang');
	Route::get('products/desktop', 'ProductController@list_desktop');
	Route::get('products/phu-kien', 'ProductController@list_phukien');
	Route::get('products/macbook', 'ProductController@list_macbook');
	Route::get('products/apple', 'ProductController@list_apple');
	Route::get('products/dell', 'ProductController@list_dell');
	Route::get('products/hp', 'ProductController@list_hp');
	Route::get('products/samsung', 'ProductController@list_samsung');
	Route::get('products/asus', 'ProductController@list_asus');
	Route::get('products/lenovo', 'ProductController@list_lenovo');
	Route::get('products/acer', 'ProductController@list_acer');
	Route::get('products/sony', 'ProductController@list_sony');


	Auth::routes();

	Route::get('/home', 'HomeController@index')->name('home');
	//product-detail
	Route::post('product-detail/{id}/comment', 'ProductController@comment');
	Route::get('/product-detail/{product}', 'ProductController@product_detail');
	Route::get('/search', 'ProductController@search');
	Route::post('search/price', 'ProductController@search_price');

	//add cart
	Route::get('carts/{id}/add', 'CartController@add');

	Route::get('index2', function(){
		return view('layouts.index2');
	});
});




