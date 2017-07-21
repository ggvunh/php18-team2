@extends('layouts.master')
@section('content')
<section id="form"><!--form-->
	<div class="container">
		<div class="row">
			<div class="col-sm-4 col-sm-offset-1">
				<div class="login-form"><!--login form-->
					<h2>Login to your account</h2>
					<form method="POST" action="{{ url('login') }}">
						{{ csrf_field() }}
						<input type="text" id="email" name="email" placeholder="Email address" />
						<input type="password" id="password" name="password" placeholder="password" />
						<span>
							<input type="checkbox" class="checkbox"> 
							Keep me signed in
						</span>
						<button type="submit" class="btn btn-default">Login</button>
					</form>
				</div><!--/login form-->
			</div>
			
		</div>
	</div>
</section><!--/form-->
@stop