@extends('layouts.master')
@section('header')
@stop
@section('content')
  
  {!! Form::model($user,['url' => 'user/'. $user->id, 'method' => 'put' ]) !!}
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Đổi mật khẩu tài khoản</h3>
            </div>
            <!-- /.box-header -->
           <div class="box-body">
             <div class="form-group">
              {!! Form::label('password', 'Mật khẩu cũ')!!}
             {!! Form::password('old_password',['class' => 'form-control']) !!}
              @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                  @endif
             </div>
           <div class="form-group">
              {!! Form::label('password', 'Mật khẩu mới')!!}
             {!! Form::password('password',['class' => 'form-control']) !!}
              @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                  @endif
             </div>
              <div class="box-body">
             <div class="form-group">
              {!! Form::label('password', 'Nhập lại mật khẩu')!!}
            {!! Form::password('verify_password',['class' => 'form-control']) !!}
              @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
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