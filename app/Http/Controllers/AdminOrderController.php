<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders = Order::all();
        return view('auth.order.index')->with('orders', $orders);
    }

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
       $order = Order::find($id);
        return view('auth.order.edit')->with('order', $order);
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
        $order = Order::find($id);
        $shipping = $request->Input('shipping_status');
        if ($shipping == 1)
        {
            $order->update(['address_order' => $request->Input('address_order'), 'shipping_status' => 'waiting', 'phone' => $request->Input('phone'), 'name_receiver' => $request->Input('name_receiver'), 'status' => 'avalible' ]);
        }
        elseif ( $shipping == 2)
        {
            $order->update(['address_order' => $request->Input('address_order'), 'shipping_status' => 'done', 'phone' => $request->Input('phone'), 'name_receiver' => $request->Input('name_receiver'), 'status' => 'not avalible'  ]);
        } 
        else
        {
            $order->update(['address_order' => $request->Input('address_order'), 'shipping_status' => 'cancel', 'phone' => $request->Input('phone'), 'name_receiver' => $request->Input('name_receiver'), 'status' => 'cancel'  ]);
        }

        return redirect('admin/orders');
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

    public function search(Request $request)
    {
        $date_start = $request->Input('date_start');
        $date_end = $request->Input('date_end');
        $status = $request->Input('status');
        if (empty($date_start) && empty($date_end) )
        {
            if($request->Input('status') == 2)
            {
                $orders = Order::all();
            }
            elseif ($request->Input('status') == 1) {
                $orders = Order::where('status', '=', 'avalible')->get();
            }
            else
            {
                $orders = Order::where('status', '=', 'not avalible')->get();
            }
            return view('auth.order.index')->with('orders', $orders);
        }
        elseif ($request->Input('status') == 2) {
            $orders = Order::where('date', '>=', $date_start)->where('date', '<=', $date_end)->get();
        }
        elseif ($request->Input('status') == 1) {
            $orders = Order::where('date', '>=', $date_start)->where('date', '<=', $date_end)->where('status', '=', 'avalible')->get();
        }
        else
        {
            $orders = Order::where('date', '>=', $date_start)->where('date', '<=', $date_end)->where('status', '=', 'not avalible')->get();
        }
        return view('auth.order.index')->with('orders', $orders);
       /* dd($status);
        // dd(strtotime($date_end));
        $orders = Order::where('date', '>=', $date_start)->where('date', '<=', $date_end)->get();
        return view('auth.order.index')->with('orders', $orders);*/
    }
}