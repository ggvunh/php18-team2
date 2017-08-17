<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
    <link href="{{ asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
	<link href="{{ asset('css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
	<link href="{{ asset('ion/css/normalize.css') }}" rel="stylesheet">
	<link href="{{ asset('ion/css/ion.rangeSlider.css') }}" rel="stylesheet">
	<link href="{{ asset('ion/css/ion.rangeSlider.skinFlat.css') }}" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
    <!-- slider-range -->
    <link rel="stylesheet" href="https://code.jquery.com/mobile/1.4.5/jquery.mobile-1.4.5.min.css">
	<script src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
	
</head><!--/head-->

<body>
<!-- <div style="position: relative; padding: 200px;">

    <div>
        <input type="text" id="range" value="" name="range" />
    </div>

</div> -->
<div class="btn btn-default"  style="position: fixed; top: 40px; right: 5px; background-color: #FE980F">
	@if ( Cart::count() > 0 )
		<a id="cart" href="{{ url('carts')}}"><i class="fa fa-shopping-cart"></i><span id="count"> ({{ Cart::count() }})</span></a>
	@else
		<a id="cart" href="{{ url('carts')}}" ><i class="fa fa-shopping-cart"></i><span id="count"></span></a>
	@endif
</div>
	<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{url('/')}}"><img src="{{ asset('images/home/logo.png') }}" alt="" /></a>
						</div>
						<div class="btn-group pull-right">
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<!-- <li><a href="checkout.html"><i class="fa fa-crosshairs"></i> Checkout</a></li> -->
								<!-- @if ( Cart::count() > 0 )
								<li><a id="cart" href="{{ url('carts')}}"><i class="fa fa-shopping-cart"></i><span id="count"> Giỏ Hàng({{ Cart::count() }})</span></a></li>
								@else
								<li><a id="cart" href="{{ url('carts')}}" ><i class="fa fa-shopping-cart"></i><span id="count"> Giỏ Hàng</span></a></li>
								@endif -->
								@if (Auth::check())
									@if(Auth::user()->is_admin == 1)
									<li>
										<a href="{{url('/admin')}}"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Admin</a>
									</li>
									@endif
								<li>
									<a href="{{ url('carts/manage')}}"><i class="fa fa-check-square-o" aria-hidden="true"></i> Quản lý đơn hàng</a>
								</li>
								<li>
									<a href="#" ></a>
									<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-user"></i>
                                    	{{ Auth::user()->name }} <span class="caret"></span>
                                	</a>
                                	<ul class="dropdown-menu" style="min-width: 110px;">
                                		<li><a href="{{ url('/user')}}">Xem Profile</li></a>
                                		<li><a href="{{ url('change-password')}}">Đổi mật khẩu</a></li>
                                		<li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    	</li>
                                    </ul>
								</li>
								
								@else
								<li><a href="{{ url('login') }}"><i class="fa fa-user" aria-hidden="true"></i> Đăng Nhập</a></li>
								<li><a href="{{ url('register') }}"><i class="fa fa-lock"></i> Đăng Ký</a></li>
								@endif
							</ul>
						</div>
						
					</div>
				</div>
			</div>
		</div><!--/header-middle-->
	
		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li class="dropdown">
									<a class="{{is_current_route('products/laptop/*')}}" href="{{url('products/laptop')}}">Laptop<i class="fa fa-angle-down"></i></a>
									<ul role="menu" class="sub-menu">
                                        <li><a href="{{url('products/laptop/dell')}}">Dell</a></li>
										<li><a href="{{url('products/laptop/hp')}}">HP</a></li>  
                                    </ul>
								</li>
								<li class="dropdown">
									<a class="{{is_current_route('products/dienthoai/*')}}" href="{{url('products/dienthoai')}}">Điện Thoại<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a class="{{is_current_route('products/dienthoai/apple')}}" href="{{url('products/dienthoai/apple')}}">Iphone</a></li>
										<li><a class="{{is_current_route('products/dienthoai/samsung')}}" href="{{url('products/dienthoai/samsung')}}">SAMSUNG</a></li>  
                                    </ul>
                                </li> 
								<li class="dropdown">
									<a class="{{is_current_route('products/maytinhbang')}}" href="{{url('products/maytinhbang')}}">Máy Tính Bảng<i class="fa fa-angle-down"></i></a>
                                </li> 
								
								<li><a href="#">Liên Hệ</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="search_box pull-right">
							<form action="{{ url('/search')}}" method="get">
								<input type="text" placeholder="Search" id="keyword" name="keyword" />
								<button type="submit" class="btn btn-search">Tìm kiếm</button>
							</form>
							
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Danh mục Sản Phẩm</h2>
						<div class="panel-group category-products" id="accordian"><!--category-productsr-->
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a class="{{is_current_route('products/desktop')}}" href="{{url('products/desktop')}}">Desktop</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a class="{{is_current_route('products/phu-kien')}}" href="{{url('products/phu-kien')}}">Phụ Kiện</a></h4>
								</div>
							</div>
							<div class="panel panel-default">
								<div class="panel-heading">
									<h4 class="panel-title"><a href="{{url('products/macbook')}}">MacBook</a></h4>
								</div>
							</div>
							
						</div><!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Thương Hiệu</h2>
							<div class="brands-name">
								<ul class="nav nav-pills nav-stacked">
									<li class="{{is_current_route('apple')}}"><a href="{{url('products/apple')}}"> <span class="pull-right">({{$apple}})</span>Apple</a></li>
									<li><a href="{{url('products/dell')}}"> <span class="pull-right">({{$dell}})</span>Dell</a></li>
									<li><a href="{{url('products/hp')}}"> <span class="pull-right">({{$hp}})</span>HP</a></li>
									<li><a href="{{url('products/samsung')}}"> <span class="pull-right">({{$samsung}})</span>SamSung</a></li>
									<li><a href="{{url('products/asus')}}"> <span class="pull-right">({{$asus}})</span>Asus</a></li>
									<li><a href="{{url('products/lenovo')}}"> <span class="pull-right">({{$lenovo}})</span>Lenovo</a></li>
									<li><a href="{{url('products/acer')}}"> <span class="pull-right">({{$acer}})</span>Acer</a></li>
									<li><a href="{{url('products/sony')}}"> <span class="pull-right">({{$sony}})</span>Sony</a></li>
								</ul>
							</div>
						</div><!--/brands_products-->
							<div class="price-range"><!--price-range-->
							<h2>Giá</h2>
							<div class="well text-center">
								<form action="{{ url('search/price')}}" method="POST">
									{{ csrf_field() }}
									 <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="50" data-slider-step="0.5" data-slider-value="[0,25]" id="sl2" name="sl2" ><br />
									 <b class="pull-left">0 tr</b> <b class="pull-right">50 tr</b><br>
									 <button type="submit" class="btn btn-success">Tìm Kiếm</button>
								 </form>
							</div>
						</div><!--/price-range-->
						<div class="shipping text-center"><!--shipping-->
							<img src="{{ asset('images/home/123.jpg') }}" alt="" />
						</div><!--/shipping-->
						
						
					</div>
				</div>
				<div class="col-sm-9 padding-right">
					@yield('content')
				</div>
				
					
				</div>
			</div>
		</div>
	</section>
	
	<footer id="footer"><!--Footer-->
		
		<div class="footer-widget">
			<div class="container">
				<div class="row">
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>DỊCH VỤ</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Hỗ Trợ Trực Tuyến</a></li>
								<li><a href="#">Liên Hệ </a></li>
								<li><a href="#">Tình Trạng Đặt Hàng</a></li>
								<li><a href="#">Thay Đổi Địa Điểm</a></li>
								<li><a href="#">Câu Hỏi Thường Gặp</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>SẢN PHẨM</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Laptop</a></li>
								<li><a href="#">Điện Thoại</a></li>
								<li><a href="#">Máy Tính Bảng</a></li>
								<li><a href="#">Desktop</a></li>
								<li><a href="#">Phụ Kiện</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>CHÍNH SÁCH</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Điều Khoản Sử Dụng</a></li>
								<li><a href="#">Chính Sách privecy</a></li>
								<li><a href="#">Chính Sách Hoàn Tiền</a></li>
								<li><a href="#">Hệ Thống Thanh Toán</a></li>
								<li><a href="#">Hệ Thống Vé</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-2">
						<div class="single-widget">
							<h2>GIỚI THIỆU VỀ SHOP</h2>
							<ul class="nav nav-pills nav-stacked">
								<li><a href="#">Thông Tin</a></li>
								<li><a href="#">Tuyển Dụng</a></li>
								<li><a href="#">Vị Trí Shop</a></li>
								<li><a href="#">Chương Trình Khuyến Mãi</a></li>
								<li><a href="#">Bản Quyền</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-3 col-sm-offset-1">
						<div class="single-widget">
							<h2>EMAIL</h2>
							<form action="#" class="searchform">
								<input type="text" placeholder="Email của bạn" />
								<button type="submit" class="btn btn-default"><i class="fa fa-arrow-circle-o-right"></i></button>
								<p>Nhận các cập nhật gần đây nhất từ trang </br>web của chúng tôi...</p>
							</form>
						</div>
					</div>
					
				</div>
			</div>
		</div>
		
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull-left">Copyright © 2013 E-SHOPPER Inc. All rights reserved.</p>
				
				</div>
			</div>
		</div>
		
	</footer><!--/Footer-->
	

  
    <script src="{{ asset('js/jquery.js') }}"></script>
	<script src="{{ asset('js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('js/jquery.scrollUp.min.js') }}"></script>
	<script src="{{ asset('js/price-range.js') }}"></script>
    <script src="{{ asset('js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script type="text/javascript">
		function addCart(id)
        {
            var root = '{{url('/carts')}}';
            $.get(root + '/' + id + '/' + 'add', function(data, status){

                console.log(data);
            //   $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
              $('#count').replaceWith('<span id="count">(' + data.count +')</span> ');
            });
        }

        $( ".add_product" ).click(function() {
		  alert( "Đã thêm sản phẩm vào giỏ hàng!" );
		});

		
	</script>
</body>
</html>