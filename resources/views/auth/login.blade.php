@extends('layouts.master')
@section('content')
<section id="form"><!--form-->
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-sm-offset-1">
                <div class="login-form"><!--login form-->
                    <h2>Đăng nhập vào tài khoản</h2>
                    <form method="POST" action="{{ url('login') }}">
                        {{ csrf_field() }}
                        <input type="text" id="email" name="email" placeholder="Email " />
                        <input type="password" id="password" name="password" placeholder="Mật khẩu" />
                        <span>
                            <input type="checkbox" class="checkbox"> 
                            Giữ trạng thái đăng nhập
                        </span>
                        <button type="submit" class="btn btn-default">Đăng nhập</button>
                    </form>
                </div><!--/login form-->
            </div>
            
        </div>
    </div>
</section><!--/form-->
@stop