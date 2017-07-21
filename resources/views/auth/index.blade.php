@extends('auth.master')
@section('content')
<div class="box-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên</th>
                  <th>Active</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($products as $product)
	                <tr>
	                  <th>{{ $product->id }}</th>
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
	                  	<a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
	                  </th>
	                  <th>
	                  	<a href="#"><span class="glyphicon glyphicon-remove"></span></a>
	                  </th>
	                </tr>
                @endforeach
                </tbody>
                <tfoot>
                <tr>
	                  <th>&nbsp;</th>
	                  <th>&nbsp;</th>
	                  <th>&nbsp;</th>
	                  <th>&nbsp;</th>
	                  <th><a href="#"><span class="glyphicon glyphicon-plus"></span>Thêm mới</a></th>
                </tr>
                </tfoot>
              </table>
            </div>
@stop