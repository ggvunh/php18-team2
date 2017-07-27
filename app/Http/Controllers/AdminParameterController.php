<?php

namespace App\Http\Controllers;

use App\Parameter;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
class AdminParameterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parameters = Parameter::all();
        return view('auth.parameter.index')->with('parameters', $parameters);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $products = Product::pluck('name', 'id');
        // dd($products);
       return view('auth.parameter.create')->with('products', $products);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $parameter = Parameter::create(['name' => $request->Input('name'), 'parameters' => $request->Input('parameters'), 'product_id' => $request->Input('product_id') ]);
        return redirect('admin/parameters');
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
        $parameter = Parameter::find($id);
        $products = Product::pluck('name', 'id');
        return view('auth.parameter.edit')->with('parameter' , $parameter)->with('products', $products);
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
        $parameter = Parameter::find($id);
        $parameter->update(Input::all());
        return redirect('admin/parameters');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete(Parameter $parameter){
        $parameter->delete();
        return redirect('admin/parameters');
    }
}
