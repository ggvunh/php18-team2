@extends('auth.master')
@section('content')
             <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Thông số</h3>
              <a style="float: right;" href="{{ url('admin/parameters/create')}}"><span class="glyphicon glyphicon-plus"></span>Thêm mới</a>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
              <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Thông Số</th>
                  <th>Tên Sản Phẩm</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($parameters as $parameter)
                  <tr>
                    <th>{{ $parameter->id }}</th>
                    <th>{{ $parameter->name}}</th>
                    <th>{{ App\Product::find($parameter->product_id)->name}}</th> 
                    <th>           
                      <a href="{{ url('admin/parameters/'. $parameter->id . '/edit')}}"><span class="glyphicon glyphicon-pencil"></span></a>
                    </th>
                    <th>
                      <a href="{{ url('admin/parameters/delete/'. $parameter->id) }}"><span class="glyphicon glyphicon-remove"></span></a>
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