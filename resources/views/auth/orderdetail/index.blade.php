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
                <?php  $total = 0; ?>
                @foreach ($orderdetails as $orderdetail)
                 <tr>
                  <td>{{ $orderdetail ->id}}</td>
                  <td>{{ $orderdetail ->quantity}}</td>
                  <td>{{ $orderdetail->price . ' VNĐ'}}</td>
                  <td>{{ $orderdetail ->order_id}}</td>
                  <?php $product = App\Product::find($orderdetail->product_id); ?>
                  @if (empty($product))
                  <td> Sản Phẩm đã xóa hoặc ngừng kinh doanh</td>
                  @else
                  <td>{{ $product->name}}</td>
                  @endif
                </tr>
                <?php $total+=$orderdetail->quantity * $orderdetail->price ?>
                @endforeach
                </tbody>           
              </table>
               <p style="float: right;"><b>Tổng Tiền: {{ number_format($total, '2', ',', '.') . ' VNĐ' }}</b></p> 
            </div>
            <!-- /.box-body -->
          </div>
         </div>
         <a href="{{ url('carts/manage/'. $orderdetail->order_id. '/detail/export')}}" class="btn btn-success" style="float: right;margin-right: 16px;"> Export PDF</a>
@stop