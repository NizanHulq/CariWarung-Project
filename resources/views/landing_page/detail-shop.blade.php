@extends('landing_page.layout.master')

@section('content')
<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Ketahui lebih lanjut mengenai</p>
						<h1>{{$toko->jenis_toko}}</h1><br>
						<p>yang satu ini</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- single product -->
	<div class="single-product mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="single-product-img">
						<img src="{{ asset('images/'.$toko->foto_toko) }}" alt="" height="445" weight="445">
					</div>
				</div>
				<div class="col-md-7">
					<div class="single-product-content">
						<h3>{{$toko->nama_toko}}</h3>
						<p class="single-product-pricing">
						<p>{{$toko->deskripsi_toko}}</p>
						<!-- <div class="contact-form-box"> -->
								<h5><i class="fas fa-map"></i> Alamat Toko</h5>
								<p><h6 class="orange-text">{{$toko->nama_jalan}}, No. {{$toko->no_rumah}}</h6>{{$toko->kelurahan}},{{$toko->kecamatan}} <br> {{$toko->kabupaten}}, {{$toko->provinsi}} <br> {{$toko->kode_pos}}</p>
							<!-- </div> -->
						<h4>Share:</h4>
						<ul class="product-share">
							<li><a href=""><i class="fab fa-facebook-f"></i></a></li>
							<li><a href=""><i class="fab fa-twitter"></i></a></li>
							<li><a href=""><i class="fab fa-google-plus-g"></i></a></li>
							<li><a href=""><i class="fab fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end single product -->

	<!-- more products -->
	<div class="more-products mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Related</span> Products</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet beatae optio.</p>
					</div>
				</div>
			</div>
			<div class="row">
			@foreach($products as $produk)
				<div class="col-lg-4 col-md-6 text-center">
						<div class="single-product-item">
							<div class="product-image">
								<a href="{{route('shop')}}"><img src="{{ asset('images/'.$produk->foto_produk) }}" alt=""></a>
							</div>
							<h3>{{$produk->nama_produk}}</h3>
							<p class="product-price"><span>{{$produk->satuan}}</span> {{"Rp ".number_format($produk->harga, 2, ',' , '.')}} </p>
							<a href="{{route('shop')}}" class="cart-btn"><i class="fas fa-store"></i></i> Lihat Toko</a>
						</div>
				</div>
			@endforeach
			</div>
		</div>
	</div>
	<!-- end more products -->
@endsection