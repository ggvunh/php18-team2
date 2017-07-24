@extends('layouts.master')
@section('content')
	<div class="features_items">
		<h2 class="title text-center">SẢN PHẨM NỔI BẬT</h2>
		@foreach ($products as $product)
		<div class="col-sm-4">
			<div class="product-image-wrapper">
				<div class="single-products">
						<div class="productinfo text-center">
							<img src="{{ $product->images }}" alt="{{ $product->name}}" title="{{ $product->name}}" style="height: 250px" />
							<h2><?php echo number_format($product->price, 0, ',', ',').'đ' ?></h2>
							<p>{{ $product->name }}</p>
							<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
						</div>
						<div class="product-overlay">
							<div class="overlay-content">

								<h2><?php echo number_format($product->price, 0, ',', ',').'đ' ?></h2>
								<p>{{ $product->name }}</p>
								<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Thêm Vào Giỏ Hàng</a>
							</div>
						</div>
						
				</div>
				<div class="choose">
					<ul class="nav nav-pills nav-justified">
						<li><a href="{{ url('/product-detail/'.$product->id) }}"><i class="fa fa-plus-square"></i>Xem Chi Tiết</a></li>
						<!-- <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li> -->
					</ul>
				</div>
			</div>
		</div>
		@endforeach

	</div>
	<div style="    position: absolute;
    top: 1030px !important;">
		{!! $products->render() !!}
	</div>
	
@stop