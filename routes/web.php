<?php
use App\Product;
use App\Category;
use App\Brand;

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
	$products = Product::all();
	// dd($products);
    return view('layouts.index')->with('products',$products);
});

	/*Route::get('/', function(){
		return 'abc';
	});*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
