@extends('layouts.master')
@section('content')
<h1> Thông tin tài khoản</h1>
   <div class="box-body">
               <table class="table table-striped">
                <thead>
                <tr>
                  <td> Tên tài khoản</td>
                  <td>{{$user->name}}</td>
                </tr>
                </thead>
                <thead>
                <tr>
                  <td> Email</td>
                  <td>{{$user->email}}</td>
                </tr>
                </thead>
                <thead>
                <tr>
                  <td> Sô điện thoại </td>
                  <td>{{$user->phone}}</td>
                </tr>
                </thead>
                <thead>
                <tr>
                  <td> Địa chỉ</td>
                  <td>{{$user->address}}</td>
                </tr>
                </thead>
              </table>
        <a href="{{ url('user/'. $user->id . '/edit')}}"><button type="submit" class="btn btn-primary">Sửa</button> </a>    
        <a href="{{ url('user/changepass')}}"><button type="submit" class="btn btn-primary">Đổi mật khẩu</button> </a>  
    </div>
@stop
