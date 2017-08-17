<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UpdatePasswordController extends Controller
{
    //
    public function __construct() {

        $this->middleware('auth');

    }
    /**
     * Update the password for the user.
     *
     * @param  Request  $request
     * @return Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'old' => 'required',
            'password' => 'required|min:6|confirmed',
        ]);

        $user = User::find(Auth::id());
        $hashedPassword = $user->password;

        if (Hash::check($request->old, $hashedPassword)) {
            //Change the password
            $user->fill([
                'password' => Hash::make($request->password)
            ])->save();

            $request->session()->flash('success', 'Mật khẩu của bạn đã được thay đổi.');

            return back();
        }

        $request->session()->flash('failure', 'Mật khẩu của bạn chưa được thay đổi.');

        return back();


    }
    public function view_update()
    {
    	return view('layouts.user.changepass');
    }
}
