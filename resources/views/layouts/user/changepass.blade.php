@extends('layouts.master')
@section('content')
  <section class="form">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-sm-offset-1">
          <div class="login-form">
            <h2><b>Thay đổi mật khẩu</b></h2>
            @if (Session::has('success'))
                <div class="alert alert-success">{!! Session::get('success') !!}</div>
            @endif
            @if (Session::has('failure'))
                <div class="alert alert-danger">{!! Session::get('failure') !!}</div>
            @endif
            <form action="" method="post" role="form" class="form-horizontal">
                    {{csrf_field()}}
 
                        <div class="form-group">
                            <label for="password" class="col-md-4 control-label">Old Password</label>
 
                            <div class="col-md-5">
                                <input id="password" type="password" class="form-control" name="old">
 
                                @if ($errors->has('old'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('old') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
 
                            <div class="form-group">
                                <label for="password" class="col-md-4 control-label">Password</label>
 
                                <div class="col-md-5">
                                    <input id="password" type="password" class="form-control" name="password">
 
                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
 
                            <div class="form-group">
                                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
 
                                <div class="col-md-5">
                                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation">
 
                                    @if ($errors->has('password_confirmation'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>
 
                        <div class="form-group">
                            <div class="col-md-3 col-md-offset-4">
                            <button type="submit" class="btn btn-primary form-control">Submit</button>
                                </div>
                        </div>
                </form>
          </div>
        </div>
      </div>
      
    </div>
  </section>
@stop