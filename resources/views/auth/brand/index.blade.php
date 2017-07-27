@extends('auth.master')
@section('content')
             <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Thương Hiệu</h3>
              <a style="float: right;" href="{{ url('admin/brands/create')}}"><span class="glyphicon glyphicon-plus"></span>Thêm mới</a>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
              <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Danh mục</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($brands as $brand)
	                <tr>
	                  <th>{{ $brand->id }}</th>
	                  <th>{{ $brand->name}}</th>
	                  <th>
	                  	<a href="{{ url('admin/brands/'. $brand->id . '/edit')}}"><span class="glyphicon glyphicon-pencil"></span></a>
	                  </th>
	                  <th>
	                  	<a href="{{ url('admin/brands/delete/'. $brand->id) }}"><span class="glyphicon glyphicon-remove"></span></a>
	                  </th>
	                </tr>
                @endforeach
                </tbody>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
@stop