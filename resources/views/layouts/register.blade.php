@extends('layouts.master')
@section('content')
<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Ðang ký tài khoản</h2>
					<form class="form-horizontal" method="POST" action="{{ url('register') }}">
                        {{ csrf_field() }}

                        
                       			<input id="name" type="text"  name="name" value="{{ old('name') }}" required autofocus placeholder="Họ tên" />
                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                        
                        

                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required placeholder="Email" />
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
					

                        
                           		<input id="password" type="password" class="form-control" name="password" required placeholder="Mật khẩu" /> 
                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required placeholder="Nhập lại mật khẩu" />
                                
                                <input type="tel" name="phone" id="phone" class="form-control" placeholder="Số điện thoại " />

                                <input type="text" name="address" id="address" class="form-control" placeholder="Địa chỉ " />
						

                       
                               

                            	
							

                                <button type="submit" class="btn btn-primary">
                                    Ðăng ký
                                </button>
                     
                        </div>
                    </form>
				</div><!-- form-->
			</div>
			
		</div>
	</div>
</section><!--/form-->
@stop