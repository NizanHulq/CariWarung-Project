@extends('landing_page.layout.master')

@section('content')
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
	
	

	<!-- home page slider -->
	<div class="homepage-slider">
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-1">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Bingung beli produk tapi ngga tau ada di toko mana</p>
								<h1>Coba Cari Disini</h1>
								<div class="hero-btns">
									<a href="{{route('product')}}" class="boxed-btn">Koleksi Produk</a>
							
								</div>
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-2">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-center">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Kepo sama toko dekat rumah jualan apa</p>
								<h1>Coba Lihat Disini</h1>
								<div class="hero-btns">
									<a href="{{route('shop')}}" class="boxed-btn">kunjungi Toko</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- single home slider -->
		<div class="single-homepage-slider homepage-bg-3">
			<div class="container">
				<div class="row">
					<div class="col-lg-10 offset-lg-1 text-right">
						<div class="hero-text">
							<div class="hero-text-tablecell">
								<p class="subtitle">Kamu pemilik toko dan ingin mengenalkan produkmu</p>
								<h1>Daftarkan Tokomu Disini </h1>
								<div class="hero-btns">
									<a href="/login" class="boxed-btn">Masuk</a>
									<a href="/register" class="bordered-btn">Daftar</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end home page slider -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-search-location"></i>
						</div>
						<div class="content">
							<h3>Cari Produk</h3>
							<p>Memudahkan kalian untuk mencari produk yang diinginkan</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Pelayanan</h3>
							<p>Dapatkan pelayanan penuh 24 jam non-stop</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Toko Pasti Laris</h3>
							<p>Perlihatkan tokomu disini agar yang lain tau</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

	<!-- product section -->
	<div class="product-section mt-150 mb-150">
		<div class="container">
			<div class="row">
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
		</div>
	</div>
	<!-- end product section -->

	<!-- iklan banner section -->
	<section class="cart-banner pt-100 pb-100">
    	<div class="container">
        	<div class="row clearfix">
            	<!--Image Column-->
            	<div class="image-column col-lg-12">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
						<div class="image">
							<a href="">
							<img src="../assets/img/banner_iklan.png" alt="">
							</a>
                   		</div>
						</div>
						<div class="single-testimonial-slider">
						<div class="image">
							<a href="">
							<img src="../assets/img/bg-pricing.jpg" alt="">
							</a>
                    	</div>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
    <!-- end cart banner section -->


	
	<!-- advertisement section -->
	<div class="abt-section mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<div class="abt-bg">
					</div>
				</div>
				<div class="col-lg-6 col-md-12">
					<div class="abt-text">
						<p class="top-sub">Sejak 2021</p>
						<h2>Kami <span class="orange-text">Cariwarung</span></h2>
						<p>Cariwarung adalah platform yang membantu pengguna untuk mencari toko yang menjual produk-produk yang dibutuhkan agar memudahkan pengguna untuk membeli secara luring.</p>
						<a href="{{route('about')}}" class="boxed-btn mt-4">Ketahui Lebih Lanjut</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end advertisement section -->
	


	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
		<div class="container">

			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="section-title">	
						<h3><span class="orange-text">Toko</span> Paling Dicari</h3>
						<p>Disini ditampilkan beberapa toko yang sedang banyak dicari kalian.</p>
					</div>
				</div>
			</div>

			<div class="row">
			@foreach($toko as $toko)
			<div class="col-lg-4 col-md-6">
					<div class="single-latest-news">
						<a href="/detail-shop/{{ $toko->toko_seo }}"><div class="latest-news-bg">
							<img src="{{ asset('images/'.$toko->foto_toko) }}" alt="">
						</div></a>
						<div class="news-text-box">
							<h3><a href="/detail-shop/{{ $toko->toko_seo }}">{{$toko->nama_toko}}</a></h3>
							<div class="contact-form-box">
								<h5><i class="fas fa-map"></i> Alamat Toko</h5>
								<p><h6 class="orange-text">{{$toko->nama_jalan}}, No. {{$toko->no_rumah}}</h6>{{$toko->kelurahan}},{{$toko->kecamatan}} <br> {{$toko->kabupaten}}, {{$toko->provinsi}} <br> {{$toko->kode_pos}}</p>
							</div>
							<a href="/detail-shop/{{ $toko->toko_seo }}" class="read-more-btn">lihat toko <i class="fas fa-angle-right"></i></a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
			<div class="row">
				<div class="col-lg-12 text-center">
					<a href="{{route('shop')}}" class="boxed-btn">Toko Lain</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end latest news -->

@endsection
	