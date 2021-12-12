@extends('landing_page.layout.master')

@section('content')

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Ini mungkin yang anda cari</p>
						<h1>Daftar Product</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- products -->
	<div class="product-section mt-150 mb-150">
		<div class="container">

		<div class="row">
                <div class="col-md-12">
                    <div class="product-filters">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                        </ul>
                    </div>
                </div>
            </div>

			
			<div class="row product-lists">
			@foreach($produk as $produk)
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
			

			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="pagination-wrap">
						<ul>
							<li><a href="#">Prev</a></li>
							<li><a href="#">1</a></li>
							<li><a class="active" href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">Next</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end products -->



    @endsection