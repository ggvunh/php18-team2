<div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm Mới Danh Mục</h3>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
             <div class="form-group">
              {!! Form::label('name', 'Tên')!!}
              {!! Form::text('name', null, ['class' => 'form-control']) !!}
             </div>
           {!! Form::submit('Lưu', ['class' => 'btn btn-primary'])!!}  
            </div>
            <!-- /.box-body -->
          </div>
         </div>