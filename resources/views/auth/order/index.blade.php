@extends('auth.master')
@section('content')
             <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh Sách Đơn Hàng</h3>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
              <div class="form-inline" style="margin-bottom: 10px;">
              {!! Form::open(['url' => 'admin/orders/search', 'enctype' => 'multipart/form-data', 'method' => 'GET']) !!}
              {!! Form::select('status', array('2' => 'All', '0' => 'not avalible', '1' => 'avalible'),['class' => 'form-control'],['class' => 'form-control']) !!}
              {!! Form::date('date_start', null, ['class' => 'form-control']) !!}
              {!! Form::date('date_end', null, ['class' => 'form-control']) !!}
              {!! Form::submit('Search ', ['class' => 'btn btn-primary'])!!} 
              {!! Form::close() !!}
             </div>
              <table  id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>ID</th>
                  <th>Ngày Đặt Hàng</th>
                  <th>Trạng Thái</th>
                  <th>Địa Chỉ Giao Hàng</th>
                  <th>Tình Trạng Giao Hàng</th>
                  <th>Số Điện Thoại</th>
                  <th>Tên Người Nhận</th>
                  <th>Người Đặt Hàng</th>
                  <th>Sửa</th>
                  <th>Xem Chi Tiết</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($orders as $order)
	               <tr>
                  <td>{{ $order ->id}}</td>
                  <td>{{ $order ->date}}</td>
                  <td>{{ $order ->status}}</td>
                  <td>{{ $order ->address_order}}</td>
                  <td>{{ $order ->shipping_status}}</td>
                  <td>{{ $order ->phone}}</td>
                  <td>{{ $order ->name_receiver}}</td>
                  <td>{{ App\User::find($order->user_id)->name}}</td>
                  <td><a href="{{ url('admin/orders/'. $order->id . '/edit')}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
                  <td><a href="{{ url('admin/orderdetails') }}">Xem chi tiết</a></td>

                </tr>
                @endforeach
                </tbody>
              
              </table>
            </div>
            <!-- /.box-body -->
          </div>
         </div>
@stop