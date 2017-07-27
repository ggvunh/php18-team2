<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm Mới Thông Số</h3>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
             <div class="form-group">
              {!! Form::label('name', 'Tên Thông Số')!!}
              {!! Form::text('name', null, ['class' => 'form-control']) !!}
             </div>
            <div class="form-group">
              {!! Form::label('parameters', 'Chi Tiết Thông Số')!!}
              {!! Form::text('parameters', null, ['class' => 'form-control']) !!}
             </div>
             <div class="form-group">
                {!! Form::label('product', 'Mã Sản Phẩm')!!}
                {!! Form::select('product_id', $products, null, ['class' => 'form-control'], ['class' => 'form-control']) !!}             
            </div>
           {!! Form::submit('Lưu', ['class' => 'btn btn-primary'])!!}  
            </div>
            <!-- /.box-body -->
          </div>
         </div>