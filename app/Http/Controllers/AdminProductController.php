<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Brand;
use App\Parameter;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
class AdminProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
        return view('auth.product.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.product.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
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
        $product = Product::find($id);
        return view('auth.product.edit')->with('product' , $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Product $product, Request $request)
    {
        $active = $request->input('active');

        if ( $active == 'on' )
            Input::merge(array('active' => '1'));
        else
            Input::merge(array('active' => '0'));

        $product->update(['name' => $request->Input('name'), 'price' => $request->Input('price'), 'active' => $request->Input('active'), 'category_id' => $request->Input('category_id'), 'brand_id' => $request->Input('brand_id'), 'quantity' => $request->Input('quantity'), 'detail' => $request->Input('detail')  ]);

        return redirect('admin');
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

    public function delete(Product $product){
        $parameters = Parameter::where('product_id', '=', $product->id)->delete();
        $product->delete();
        return redirect('admin');
    }

    public function search(){
        $keyword = Input::get('keyword', '');
        $products = Product::search($keyword)->paginate(6);
        return view('auth.index')->with('products',$products);
    }

   /* public function redirect()
    {
         return view('auth.product.index');
    }*/
}
