<?php
use App\Product;
use App\Category;
use App\Brand;
use Illuminate\Support\Facades\Input;

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
	$products = Product::paginate(6);
	// dd($products);
    return view('layouts.index')->with('products',$products);
});

	/*Route::get('/', function(){
		return 'abc';
	});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//login
Route::get('/login', function(){
	return view('layouts.login');
});
//end login

//product-detail
Route::get('/product-detail/{product}', function(Product $product){
	// $product = Product::all()->find($product);
	// dd($product);
	return view('layouts.product-detail')->with('product', $product);
});

Route::get('/admin', function(){
	$products = Product::all();
	return view('auth.index')->with('products', $products);
});

//Route::get('/test', function(){
	//return view('auth.partials.forms.product');
//});

Route::get('/product', function(){
	return view('auth.product.create');
});
