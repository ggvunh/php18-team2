@extends('auth.master')
@section('content')
	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách User</h3>
              <a style="float: right;" href="{{ url('admin/users/create')}}"><span class="glyphicon glyphicon-plus"></span>Thêm mới</a>
              <form action="{{ url('admin/products/search')}}" method="get" >
                <div class="input-group">
                  <input type="text" name="keyword" class="form-control" placeholder="Search...">
                  <span class="input-group-btn">
                  <button type="submit" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i></button>
                  </span>
                </div>
              </form>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
              <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th> Tên</th>
                  <th> Email</th>
                  <th> Điện Thoại</th>
                  <th> Địa Chỉ</th>
                  <th> Sửa</th>
                  <th> Đơn Đặt Hàng</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
	                <tr>
	                  <td>{{$user->name}}</td>
	                  <td>{{$user->email}}</td>
	                  <td>{{$user->phone}}</td>
	                  <td>{{$user->address}}</td>
	                  <td><a href="{{url('admin/users/'. $user->id . '/edit')}}"> Sửa</a></td>
	                  <td><a href="#"> Xem</a></td>
	                </tr>
                @endforeach
                </tbody>       
              </table>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
@stop