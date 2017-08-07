@extends('auth.master');
@section('content')
	<div class="box">
		<div class="box-header">
			<h1>Tạo user mới</h1>
		</div>
		<div class="box-body">
			<form method="POST" action="{{ url('admin/users') }}">
                        {{ csrf_field() }}

          						<div class="form-group">
          							<input id="name" type="text"  name="name" value="{{ old('name') }}" required autofocus placeholder="Họ tên" class="form-control" />
                                	@if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                	@endif
          						</div>
                                
                        
                        
          						<div class="form-group">
          							<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email" class="form-control" />
                                	@if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                	@endif
          						</div>
                                
                    

                        		<div class="form-group">
                        			<input id="password" type="password" class="form-control" name="password" required placeholder="Mật khẩu" /> 
                                	@if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                	@endif
                        		</div>
                                
                                <div class="form-group">
                                	<input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Nhập lại mật khẩu" />
                                </div>
                                
                                <div class="form-group">
                                	<input type="tel" name="phone" id="phone" class="form-control" placeholder="Số điện thoại " />
                                </div>
                                
                                <div class="form-group">
                                	<input type="text" name="address" id="address" class="form-control" placeholder="Địa chỉ " />
                                </div>
                                
                        

                       
                               

                                
                            

                                <button type="submit" class="btn btn-primary">
                                    Ðăng ký
                                </button>
                     
                        </div>
                    </form>
		</div>
	</div>
@stop