@extends('auth.master')
@section('content')
             <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Sản Phẩm</h3>

            </div>
            <!-- /.box-header -->
           <div class="box-body">
              <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>STT</th>
                  <th>Tên Sản Phẩm</th>
                  <th>Active</th>
                  <th>Sửa</th>
                  <th>Xóa</th>
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
              
              </table>
              <a style="float: right; margin-top: 15px;" href="{{ url('admin/products/create')}}"><span class="glyphicon glyphicon-plus"></span>Thêm mới</a>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
@stop