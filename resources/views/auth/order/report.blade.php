@extends('auth.master')
@section('content')
             <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Tổng Kết Đơn Hàng</h3>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
              <div class="form-inline" style="margin-bottom: 10px; float: left;">
              {!! Form::open(['url' => 'admin/orders/summary/search', 'enctype' => 'multipart/form-data', 'method' => 'GET']) !!}
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
                  <th>Xem Chi Tiết</th>
                </tr>
                </thead>
                <tbody>
                <?php $total = 0; ?>
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
                  <td><a href="{{ url('admin/' . $order->id .'/orderdetails') }}">Xem chi tiết</a></td>
                  <?php 
                    
                    $orderdetails = App\OrderDetail::where('order_id', '=', $order->id)->get();
                    foreach ($orderdetails as $orderdetail) {
                      $total = $total + ($orderdetail->price * $orderdetail->quantity);
                    }
                   ?>
                </tr>
                @endforeach
                </tbody>
              </table>
               <p style="float: right; margin-top: 10px;"><b>Tổng số đơn hàng: {{ $orders->count() }}</b></p> 
               <p style="float: right; clear: both;"><b>Tổng tiền: {{ number_format($total, 2, ',', '.') . ' VNĐ'}}</b></p> 
            </div>
            <!-- /.box-body -->
          </div>
         </div>
@stop