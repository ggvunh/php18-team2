@extends('layouts.master')
@section('header')
@stop
@section('content')
  
  {!! Form::model($user,['url' => 'user/'. $user->id, 'method' => 'put' ]) !!}
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Sửa thông tin tài khoản</h3>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
             <div class="form-group">
              {!! Form::label('name', 'Tên')!!}
              {!! Form::text('name', null, ['class' => 'form-control']) !!}
              @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                  @endif
             </div>
           <div class="form-group">
              {!! Form::label('email', 'Email')!!}
              {!! Form::text('email', null, ['class' => 'form-control']) !!}
              @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                  @endif
             </div>
              <div class="box-body">
             <div class="form-group">
              {!! Form::label('phone', 'Số điện thoại')!!}
              {!! Form::text('phone', null, ['class' => 'form-control']) !!}
              @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                  @endif
             </div>
           <div class="form-group">
              {!! Form::label('address', 'Địa chỉ')!!}
              {!! Form::text('address', null, ['class' => 'form-control']) !!}
              @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                  @endif
             </div>
           
           {!! Form::submit('Lưu', ['class' => 'btn btn-primary'])!!}  
            </div>
            <!-- /.box-body -->
          </div>
         </div>
  {!! Form::close() !!} 
@stop