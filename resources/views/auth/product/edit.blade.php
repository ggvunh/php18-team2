@extends('auth.master')
@section('header')
@stop
@section('content')
  
  {!! Form::model($product,['url' => 'admin/products/'. $product->id, 'method' => 'put' ]) !!}
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm Mới Sản Phẩm</h3>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
             <div class="form-group">
              {!! Form::label('name', 'Tên')!!}
              {!! Form::text('name', null, ['class' => 'form-control']) !!}
             </div>
           <div class="form-group">
              {!! Form::label('price', 'Giá')!!}
              {!! Form::text('price', null, ['class' => 'form-control']) !!}
             </div>
            <div class="form-group">
                {!! Form::label('category', 'Danh mục')!!}
                {!! Form::select('category_id', $categories, null, ['class' => 'form-control'], ['class' => 'form-control']) !!}             
            </div>
            <div class="form-group">
                {!! Form::label('brand', 'Brand')!!}
                {!! Form::select('brand_id', $brands, null, ['class' => 'form-control'], ['class' => 'form-control']) !!}             
            </div>
            <div class="form-group">
               {!! Form::label('quantity', 'Số lượng')!!}  
              {!! Form::number('quantity', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
              {!! Form::label('detail', 'Mô tả')!!}  
             {!! Form::textarea('detail', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
               {!! Form::label('images', 'Hình ảnh')!!}  
              {!! Form::file('images', null, ['class' => 'form-control']) !!}
           </div>
          <div class="form-group">
              {!! Form::label('active', 'Active')!!}
               @if ($product->active == 1)  
              {!! Form::checkbox('active', null, ['class' => 'form-control'], ['checked']) !!}
              @else
              {!! Form::checkbox('active', null, ['class' => 'form-control']) !!}
              @endif
           </div>
           {!! Form::submit('Lưu', ['class' => 'btn btn-primary'])!!}  
            </div>
            <!-- /.box-body -->
          </div>
         </div>
  {!! Form::close() !!} 
@stop