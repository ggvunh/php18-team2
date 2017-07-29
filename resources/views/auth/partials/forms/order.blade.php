    <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Chỉnh Sửa Đơn Hàng</h3>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
             <div class="form-group">
              {!! Form::label('address_order', 'Địa Chỉ Giao Hàng')!!}
              {!! Form::text('address_order', null, ['class' => 'form-control']) !!}
             </div>
<!--            <div class="form-group">
              {!! Form::label('shipping_status', 'Tình Trạng Giao Hàng')!!}
              {!! Form::text('shipping_status', null, ['class' => 'form-control']) !!}
             </div> -->
             <div class="form-group">
                {!! Form::label('shipping_status', 'Tình Trạng Giao Hàng')!!}
                {!! Form::select('shipping_status', array('1' => 'waiting', '2' => 'done', '3' =>'cancel'), null, ['class' => 'form-control'], ['class' => 'form-control']) !!}             
            </div>
            <div class="form-group">
              {!! Form::label('phone', 'Số Điện Thoại')!!}
              {!! Form::text('phone', null, ['class' => 'form-control']) !!}
             </div>
             <div class="form-group">
              {!! Form::label('name_receiver', 'Tên Người Nhận')!!}
              {!! Form::text('name_receiver', null, ['class' => 'form-control']) !!}
             </div>
           {!! Form::submit('Lưu', ['class' => 'btn btn-primary'])!!}  
            </div>
            <!-- /.box-body -->
          </div>
         </div>