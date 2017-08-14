<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
use App\Comment;
use Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('active', '=', 1)->paginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('layouts.index')->with(['products' => $products, 'catgories' => $categories, 'brands' => $brands]);    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function product_detail(Product $product)
    {
        $comments = Comment::where('product_id', '=', $product->id)->get();
        return view('layouts.product-detail')->with('product', $product)->with('comments', $comments);
    }

    public function search()
    {
        $keyword = Input::get('keyword', ' ');
        $category = Input::get('category', '');
        $products = Product::search($keyword)->where('active', '=', 1)->paginate(6);
        return view('layouts.index')->with('products',$products)->withSuccess('Cat has been deleted.');
    }

    public function listlaptop()
    {
        $products = Product::where('category_id', '=', 2)->paginate(6);;
        $categories = Category::all();
        $brands = Brand::all();
        return view('layouts.index')->with(['products' => $products, 'catgories' => $categories, 'brands' => $brands]);
    }
    public function listlaptopdell()
    { 
        $products = Product::where('category_id', '=', 2)->paginate(6);
        $products = Product::where('brand_id', '=', 12)->paginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('layouts.index')->with(['products' => $products, 'catgories' => $categories, 'brands' => $brands]);
    }
    public function listlaptophp()
    { 
        $products = Product::where('category_id', '=', 2)->paginate(6);
        $products = Product::where('brand_id', '=', 13)->paginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('layouts.index')->with(['products' => $products, 'catgories' => $categories, 'brands' => $brands]);
    }
    public function listdienthoai()
    {
        $products = Product::where('category_id', '=', 1)->paginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('layouts.index')->with(['products' => $products, 'catgories' => $categories, 'brands' => $brands]);
    }
    public function listapple()
    {
        $products = Product::where('category_id', '=', 1)->paginate(6);
        $products = Product::where('brand_id', '=', 1)->paginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('layouts.index')->with(['products' => $products, 'catgories' => $categories, 'brands' => $brands]);
    }
    public function listdtsamsung()
    {
        $products = Product::where('category_id', '=', 1)->paginate(6);
        $products = Product::where('brand_id', '=', 2)->paginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('layouts.index')->with(['products' => $products, 'catgories' => $categories, 'brands' => $brands]);
    }
     public function listmaytinhbang()
    {
        $products = Product::where('category_id', '=', 3)->paginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('layouts.index')->with(['products' => $products, 'catgories' => $categories, 'brands' => $brands]);
    }

    public function comment(Request $request,$product)
    {
        $cmt =Comment::create(['content' => $request->Input('cmt'), 'user_id' => Auth::user()->id, 'product_id' => $product]);
        return redirect('product-detail/'.$product);
    }

    //search theo giá
    public function search_price(Request $request)
    {
        $price = $request->Input('sl2');
        $vitri = strpos($price, ',');
        $price_min = substr($price, 0, $vitri) * 1000000;
        $price_max = substr($price, $vitri+1) * 1000000;
        $products = Product::where('price', '>=', $price_min)->where('price', '<=', $price_max)->paginate(6);
        $categories = Category::all();
        $brands = Brand::all();
        return view('layouts.index')->with(['products' => $products, 'catgories' => $categories, 'brands' => $brands]);
    }
}
