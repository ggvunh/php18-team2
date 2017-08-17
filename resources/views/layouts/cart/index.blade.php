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
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ asset('images/ico/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>
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
                                		<li><a href="{{ url('/change-password')}}">Đổi mật khẩu</a></li>
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
@if ( Cart::count() > 0)
	<section id="cart_items" style="margin-bottom: 50px">
		<div class="container">
			<div class="breadcrumbs">
				<ol class="breadcrumb">
				  <li><a href="#">Home</a></li>
				  <li class="active">Shopping Cart</li>
				</ol>
			</div>
			 <a href="{{ url('/')}}" class="btn btn-primary btn-lg active" role="button" style="float: right; background-color: green">Tiếp tục mua hàng</a>
			 <br>
			 <br>
			 <br>
			<div class="table-responsive cart_info">

				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Price</td>
							<td class="quantity">Quantity</td>
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
					<?php $content = Cart::content() ?>
					@foreach ($content as $item)
						<tr>
							<td class="cart_product">
								<a href=""><img src="{{ url($item->options->images) }}" style="width: 110px; margin-right: 25px" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">{{$item->name}}</a></h4>
							</td>
							<td class="cart_price">
								<p style="margin-top: 20px">{{ number_format($item->price, 0, '.','.') . ' VNĐ'}}</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
								<?php $rowId = (string)$item->rowId ?>
								<form>
  									<input type="button" value=" - " onclick="down('{{$item->rowId}}')">
  									<input type="text" id="{{$item->rowId}}" name="quantity" value="{{$item->qty}}" size="2" style="text-align: center;">
  									<input type="button" value=" + " onclick="up('{{$item->rowId}}')" >
								</form>
							</td>
							<td class="cart_total">
								<p class="cart_total_price" style="margin-top: 20px"><span id="sub{{$item->rowId}}">{{ number_format($item->subtotal, 0, '.','.') . ' VNĐ' }}</span></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete delete" href="{{ url('carts/delete/' . $item->rowId) }}"><i class="fa fa-times"></i></a>
							</td>
						</tr>
					@endforeach
						<tr>
							<td class="cart_total" colspan="4" style="text-align: right !important;">
								<p class="cart_total_price" style="color: #666; font-weight: bold;"> Tổng Cộng: </p>
							</td>
							<td>
								<p id="total" class="cart_total_price">{{ Cart::total() . ' VNĐ' }}</p>
							</td>
						</tr>

					</tbody>
				</table>
			</div>
			<div class="total_area">
			<a class="btn btn-default update" href="{{ url('carts/checkout') }}" style="font-size: 150%; float: right; margin-top: 0px"> Check Out </a>
			<a class="btn btn-default check_out" href="" style="font-size: 150%; float: right;margin-top: 0px"> Update </a>
		</div>
		</div>
		
	</section> <!--/#cart_items-->

	
	@else
	<section>
		<div class="" style="text-align: center; margin: 10px">
	        <h3 class="">Không có sản phẩm nào trong giỏ hàng</h3>
		        <a href="{{ url('/')}}" class="btn btn-primary btn-lg active" role="button">Tiếp tục mua hàng</a>
	    </div>
	</section>
	@endif

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
								<li><a href="#">Déktop</a></li>
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
    function ud_find_text(self) {
	    var children = self.parentNode.getElementsByTagName('input');
	    for (var i = 0; i < children.length; i++) {
	        if (children[i].getAttribute('type') == 'text') {
	            return children[i];
	        }
	    }
	}

    function ud_inc(self) {
    	var text = ud_find_text(self);
    	text.value++;
	}

	function ud_dec(self) {
	    var text = ud_find_text(self);
	    if (text.value > 0) text.value--;
	}

	function addCart(id)
        {
            var root = '{{url('/carts')}}';
            $.get(root + '/' + id + '/' + 'add', function(data, status){

                console.log(data);
            //   $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
              $('#count').replaceWith('<span id="count">' + data.count +'</span> ');
            });
        }

	 function down(rowId)
	 {
	 	var root = '{{ url('/carts') }}';
	 	$.get( root + '/' + rowId + '/down-count', function(data, status){
	 		var sub = data.subtotal.toLocaleString();
	 		console.log(data);
	 		$('#'+ rowId).replaceWith('<input type="text" id="'+rowId+'" name="quantity" value="' + data.qty +'" size="2" style="text-align: center;">');
	 		$('#sub' + rowId).replaceWith('<span id="sub'+rowId+'">'+sub+' VNĐ </span>');
	 	});

	 }

	function up(rowId)
	{
		var root = '{{ url('/carts') }}';
	 	$.get( root + '/' + rowId + '/up-count', function(data, status){
	 		var sub = data.subtotal.toLocaleString();
	 		console.log(data);
	 		$('#'+ rowId).replaceWith('<input type="text" id="'+rowId+'" name="quantity" value="' + data.qty +'" size="2" style="text-align: center;">');
	 		$('#sub' + rowId).replaceWith('<span id="sub'+rowId+'">'+sub+' VNĐ </span>');
	 	});
	}

	$( ".delete" ).click(function() {
	  alert( "xóa thành công." );
	});
    </script>
</body>
</html>