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
        return view('layouts.index')->with('products',$products);
    }

    public function listlaptop()
    {   $category_laptop = Category::where('name', 'like', '%Laptop%')->first();
        $products = Product::where('category_id', '=', $category_laptop->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }
    public function listlaptopdell()
    {   
        $category_laptop =  Category::where('name', 'like', '%Laptop%')->first();
        $brand_dell = Brand::where('name', 'like', '%Dell%')->first();
        $products = Product::where('category_id', '=', $category_laptop->id)->where('brand_id', '=', $brand_dell->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }
    public function listlaptophp()
    { 
        $category_laptop =  Category::where('name', 'like', '%Laptop%')->first();
        $brand_hp = Brand::where('name', 'like', '%HP%')->first();
        $products = Product::where('category_id', '=', $category_laptop->id)->where('brand_id', '=', $brand_hp->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }
    public function listdienthoai()
    {
        $category_dienthoai =  Category::where('name', 'like', '%Điện Thoại%')->first();
        $products = Product::where('category_id', '=', $category_dienthoai->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }
    public function listapple()
    {
        $category_dienthoai =  Category::where('name', 'like', '%Điện Thoại%')->first();
        $brand_ip = Brand::where('name', 'like', '%Apple%')->first();
        $products = Product::where('category_id', '=', $category_dienthoai->id)->where('brand_id', '=', $brand_ip->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }
    public function listdtsamsung()
    {
        $category_dienthoai =  Category::where('name', 'like', '%Điện Thoại%')->first();
        $brand_ss = Brand::where('name', 'like', '%SamSung%')->first();
        $products = Product::where('category_id', '=', $category_dienthoai->id)->where('brand_id', '=', $brand_ss->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }
     public function listmaytinhbang()
    {
        $category_maytinhban =  Category::where('name', 'like', '%Máy Tính Bảng%')->first();
        $products = Product::where('category_id', '=', $category_maytinhban->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
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

    public function list_desktop()
    {
        $category_desktop =  Category::where('name', 'like', '%Desktop%')->first();
        $products = Product::where('category_id', '=', $category_desktop->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }

    public function list_phukien()
    {
        $category_phukien =  Category::where('name', 'like', '%Phụ Kiện%')->first();
        $products = Product::where('category_id', '=', $category_phukien->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }

    public function list_macbook()
    {
        $category_macbook =  Category::where('name', 'like', '%Macbook%')->first();
        $products = Product::where('category_id', '=', $category_macbook->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    } 

    public function list_apple()
    {
        $brand_apple =  Brand::where('name', 'like', '%Apple%')->first();
        $products = Product::where('brand_id', '=', $brand_apple->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }

    public function list_dell()
    {
        $brand_dell =  Brand::where('name', 'like', '%Dell%')->first();
        $products = Product::where('brand_id', '=', $brand_dell->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }

    public function list_hp()
    {
        $brand_hp =  Brand::where('name', 'like', '%HP%')->first();
        $products = Product::where('brand_id', '=', $brand_hp->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }

    public function list_samsung()
    {
        $brand_ss =  Brand::where('name', 'like', '%SamSung%')->first();
        $products = Product::where('brand_id', '=', $brand_ss->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }

    public function list_asus()
    {
        $brand_asus =  Brand::where('name', 'like', '%Asus%')->first();
        $products = Product::where('brand_id', '=', $brand_asus->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }

    public function list_lenovo()
    {
        $brand_lenovo =  Brand::where('name', 'like', '%Lenovo%')->first();
        $products = Product::where('brand_id', '=', $brand_lenovo->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }

    public function list_acer()
    {
        $brand_acer =  Brand::where('name', 'like', '%Acer%')->first();
        $products = Product::where('brand_id', '=', $brand_acer->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }

    public function list_sony()
    {
        $brand_sony =  Brand::where('name', 'like', '%Sony%')->first();
        $products = Product::where('brand_id', '=', $brand_sony->id)->paginate(6);
        return view('layouts.index')->with(['products' => $products]);
    }

}
