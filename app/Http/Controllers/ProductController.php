<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Brand;
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
        $products = Product::paginate(6);
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
        return view('layouts.product-detail')->with('product', $product);
    }

    public function search()
    {
        $keyword = Input::get('keyword', ' ');
        $category = Input::get('category', '');
        $products = Product::search($keyword)->paginate(6);
        return view('layouts.index')->with('products',$products)->withSuccess('Cat has been deleted.');
    }

    //list product in menu
    public function listlaptop()
    { 
        $products = Product::where('category_id', '=', 2)->paginate(6); 
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
    public function listlaptopasus()
    { 
        $products = Product::where('category_id', '=', 2)->paginate(6);
        $products = Product::where('brand_id', '=', 14)->paginate(6);
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
    public function listdtlg()
    {
        $products = Product::where('category_id', '=', 1)->paginate(6);
        $products = Product::where('brand_id', '=', 5)->paginate(6);
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
}
