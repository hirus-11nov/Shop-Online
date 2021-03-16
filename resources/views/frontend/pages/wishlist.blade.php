@extends('frontend.layouts.master')
@section('title','Sản phẩm yêu thích')
@section('main-content')
	<!-- Breadcrumbs -->
	<div class="breadcrumbs">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="bread-inner">
						<ul class="bread-list">
							<li><a href="{{('home')}}">Trang chủ<i class="ti-arrow-right"></i></a></li>
							<li class="active"><a href="javascript:void(0);">Yêu thích</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End Breadcrumbs -->
			
	<!-- Shopping Cart -->
	<div class="shopping-cart section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<!-- Shopping Summery -->
					<table class="table shopping-summery">
						<thead>
							<tr class="main-hading">
								<th>SẢN PHẨM</th>
								<th>TÊN</th>
								<th class="text-center">GIÁ</th> 
								<th class="text-center">THÊM GIỎ HÀNG</th> 
								<th class="text-center"><i class="ti-trash remove-icon"></i></th>
							</tr>
						</thead>
						<tbody>
							@if(Helper::getAllProductFromWishlist())
								@foreach(Helper::getAllProductFromWishlist() as $key=>$wishlist)
									<tr>
										@php 
											$photo=explode(',',$wishlist->product['photo']);
										@endphp
										<td class="image" data-title="No"><img src="{{$photo[0]}}" alt="{{$photo[0]}}"></td>
										<td class="product-des" data-title="Description">
											<p class="product-name"><a href="{{route('product-detail',$wishlist->product['slug'])}}">{{$wishlist->product['title']}}</a></p>
											<p class="product-des">{!!($wishlist['summary']) !!}</p>
										</td>
										<td class="total-amount" data-title="Total"><span>${{$wishlist['amount']}}</span></td>
										<td><a href="{{route('add-to-cart',$wishlist->product['slug'])}}" class='btn text-white'>THÊM VÀO GIỎ HÀNG</a></td>
										<td class="action" data-title="Remove"><a href="{{route('wishlist-delete',$wishlist->id)}}"><i class="ti-trash remove-icon"></i></a></td>
									</tr>
								@endforeach
							@else 
								<tr>
									<td class="text-center">
										Không có sản phẩm yêu thích! <a href="{{route('product-grids')}}" style="color:blue;">TIẾP TỤC MUA SẮM</a>

									</td>
								</tr>
							@endif


						</tbody>
					</table>
					<!--/ End Shopping Summery -->
				</div>
			</div>
		</div>
	</div>
	<!--/ End Shopping Cart -->
			
	<!-- Start Shop Services Area  -->
	<section class="shop-services section">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-rocket"></i>
						<h4>MIỄN PHÍ VẬN CHUYỂN</h4>
						<p>Hóa đơn trên 500.000 VNĐ</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-reload"></i>
						<h4>MIỄN PHÍ TRẢ HÀNG</h4>
						<p>Trong vòng 7 ngày</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-lock"></i>
						<h4>THANH TOÁN AN TOÀN</h4>
						<p>Bảo mật tuyệt đối</p>
					</div>
					<!-- End Single Service -->
				</div>
				<div class="col-lg-3 col-md-6 col-12">
					<!-- Start Single Service -->
					<div class="single-service">
						<i class="ti-tag"></i>
						<h4>GIÁ TỐT NHẤT</h4>
						<p>Mua điiiii!</p>
					</div>
					<!-- End Single Service -->
				</div>
			</div>
		</div>
	</section>
	<!-- End Shop Newsletter -->
	
	@include('frontend.layouts.newsletter')
	
	
@endsection
@push('scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
@endpush