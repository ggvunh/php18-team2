@extends('auth.master')
@section('content')
             <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Chi Tiết Đơn Hàng</h3>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
              <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Số lượng</th>
                  <th>Giá</th>
                  <th>Mã Đơn Hàng</th>
                  <th>Mã Sản Phẩm</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orderdetails as $orderdetail)
                 <tr>
                  <td>{{ $orderdetail ->id}}</td>
                  <td>{{ $orderdetail ->quantity}}</td>
                  <td>{{ $orderdetail->price . ' VNĐ'}}</td>
                  <td>{{ $orderdetail ->order_id}}</td>
                  <td>{{ $orderdetail ->product_id}}</td>
                </tr>
                @endforeach
                </tbody>
           
              </table>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
@stop