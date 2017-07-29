<?php
;
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use User;
use Auth;
use App\Product;
use Illuminate\Support\Facades\Input;

class CartController extends Controller
{
	public function index(){
		if (Auth::check())
		{
			return view('layouts.cart.index');
		}
		return view('auth.login');
	}

    public function add($id){
    	/*$product = Product::find($id);
    	Cart::add($product->id, $product->name, 1, $product->price, ['images' => $product->images]);
    	// $content = Cart::content();
    	// dd($content);
    	return redirect('/');*/
        $product = Product::find($id);
        Cart::add($product->id, $product->name, 1, $product->price, ['images' => $product->images]);
        $count = Cart::count();
        return response(['count' => $count], 200);
    }

    public function delete($rowId)
    {
    	Cart::remove($rowId);
    	return redirect('/carts')->withSuccess('Cat has been deleted.');
    }
}
