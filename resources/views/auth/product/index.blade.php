@extends('auth.master')
@section('content')
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Sản Phẩm</h3>
              <a style="float: right;" href="{{ url('admin/products/create')}}"><span class="glyphicon glyphicon-plus"></span>Thêm mới</a>
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
                  <th>Mã Sản Phẩm</th>
                  <th>Tên Sản Phẩm</th>
                  <th>Active</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
	                <tr>
	                  <th>{{ $product->id }} &nbsp; &nbsp; &nbsp; <img src="{{ url($product->images) }}" height="30px"></th>
	                  <th>{{ $product->name}}</th>
	                  <th>
	                  <form>
	                  	<div class="checkbox">
	                  		@if ($product->active == 1)
      						<label><input type="checkbox" name="active" checked disabled></label>
      						@else
      						<label><input type="checkbox" name="active" disabled ></label>
      						@endif
      					</div>
					  </form>
					  </th>
	                  <th>
	                  	<a href="{{ url('admin/products/'. $product->id . '/edit')}}"><span class="glyphicon glyphicon-pencil"></span></a>
	                  </th>
	                  <th>
	                  	<a href="{{ url('admin/products/delete/'. $product->id) }}"><span class="glyphicon glyphicon-remove"></span></a>
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