@extends('landing_page.layout.master')

@section('content')

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 offset-lg-2 text-center">
					<div class="breadcrumb-text">
						<p>Ini mungkin toko yang anda cari</p>
						<h1>Daftar Toko</h1>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end breadcrumb section -->

	<!-- latest news -->
	<div class="latest-news mt-150 mb-150">
		<div class="container">
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
							<a href="{{ route('like.shop', $toko->id)}}" class="boxed-btn" style=""><i class="fas fa-thumbs-up"></i> {{$toko->suka}}</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>

			<div class="row">
				<div class="container">
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
		</div>
	</div>
	<!-- end latest news -->

    @endsection
