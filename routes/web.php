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
Route::resource('/', 'ProductController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//product-detail
Route::get('/product-detail/{product}', 'ProductController@product_detail');