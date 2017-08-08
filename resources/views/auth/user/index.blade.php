@extends('auth.master')
@section('content')
	<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <a style="float: right; margin-right: 5px" href="{{ url('admin/users/create')}}" class="btn btn-primary"> Thêm mới </a>
              <a style="float: right;  margin-right: 5px" href="{{ url('admin/users/export')}}" class="btn btn-success"> Export </a>
              <form action="{{ url('admin/users/search')}}" method="get" >
                <div class="input-group" style="width: 50%">
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
                  <th style="text-align: center;"> Sửa</th>
                  <th style="text-align: center;"> Đơn Đặt Hàng</th>
                  <th style="text-align: center;"> Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
	                <tr>
	                  <td>{{$user->name}}</td>
	                  <td>{{$user->email}}</td>
	                  <td>{{$user->phone}}</td>
	                  <td>{{$user->address}}</td>
	                  <td style="text-align: center;"><a href="{{url('admin/users/'. $user->id . '/edit')}}"> Sửa</a></td>
	                  <td style="text-align: center;"><a href="{{ url('admin/users/' .$user->id. '/order')}}"> Xem</a></td>
	                  <td style="text-align: center;"><a href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a></td>
	                </tr>
                @endforeach
                </tbody>       
              </table>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
@stop