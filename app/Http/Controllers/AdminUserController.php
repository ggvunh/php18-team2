<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use Illuminate\Http\Request;
use App\User;
use App\Order;
use Excel;


class AdminUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::get();
        return view('auth.user.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('auth.user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
        $input = $request->all();
        $user = User::create($input);
        return redirect('admin/users ');

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
        dd(123);
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

    public function export_users()
    {
        $users = User::where('is_admin', '!=', 1)->get();
        Excel::create('Users Excel', function($excel) use($users) {
            $excel->sheet('Excel sheet', function($sheet) use($users) {
                $sheet->fromArray($users);
            });
        })->export('xls');
        return redirect('admin/users');
    }

    public function order_user($id)
    {
        $orders = Order::where('user_id', '=', $id)->get();
        return view('auth.user.user-orders')->with('orders', $orders);
    }

    public function delete_user($id)
    {   
        $user = User::find($id)->delete();
        return redirect('admin/users');
    }

    public function phan_quyen($id)
    {
        $user = User::find($id);
        return view('auth.user.phan-quyen')->with('user', $user);
    }
    public function excute_phan_quyen(Request $request, $id)
    {
        $user = User::find($id);
        $pq = $request->Input('quyen');
        if ($pq == 1)
        {
            $user->update(['is_admin' => 1]);
            return redirect('admin/users');
        }
        $user->update(['is_admin' => 0]);
        return redirect('admin/users');
        
    }
}
