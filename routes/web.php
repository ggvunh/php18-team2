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


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
//product-detail

Route::get('/product-detail/{product}', 'ProductController@product_detail');
Route::get('/search', function(){
	$keyword = Input::get('keyword', ' ');
	$category = Input::get('category', '');
	$products = Product::search($keyword)->paginate(6);
	return view('layouts.search_product')->with('products',$products);
});



///admin
Route::get('/admin/products', function(){
	$products = Product::all();
	return view('auth.index')->with('products', $products);
});

Route::get('/admin', function(){
	return redirect('/admin/products');
});
Route::get('/admin/products/create', function(){
	$brands = Brand::all();
	return view('auth.product.create')->with('brands', $brands);
});

Route::post('admin/products', function(Request $request){
	$active = $request->input('active');

	if ( $active == 'on' )
		Input::merge(array('active' => '1'));
	else
		Input::merge(array('active' => '0'));

	//upfile
	$data = $request->all();
	$name = time() . '-' .Input::file('images')->getClientOriginalName();

	$a = Input::file('images')->move('../public/images/product', $name);
	$file_name = 'images/product/' . $name;
	
	
	$product = Product::create(['name' => $request->Input('name'), 'price' => $request->Input('price'), 'images' => $file_name, 'active' => $request->Input('active'), 'category_id' => $request->Input('category_id'), 'brand_id' => $request->Input('brand_id'), 'quantity' => $request->Input('quantity'), 'detail' => $request->Input('detail')  ]);
	return redirect('admin');
	});


Route::get('admin/products/delete/{product}', function(Product $product){
	 $product->delete();
	 return redirect('admin');
});