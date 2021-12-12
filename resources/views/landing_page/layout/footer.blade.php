<!-- footer -->
<div class="footer-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<div class="footer-box about-widget">
						<h2 class="widget-title">Tentang Kami</h2>
						<p>Cariwarung adalah platform yang membantu pengguna untuk mencari toko yang menjual produk-produk yang dibutuhkan agar memudahkan pengguna untuk membeli secara luring.</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box pages">
						<h2 class="widget-title">Halaman</h2>
						<ul>
							<li><a href="{{route('home')}}">Home</a></li>
							<li><a href="{{route('about')}}">Tentang</a></li>
							<li><a href="{{route('product')}}">Produk</a></li>
							<li><a href="{{route('shop')}}">Toko</a></li>
							<li><a href="{{route('contact')}}">Kontak</a></li>
						</ul>
					</div>
				</div>
                <div class="col-lg-3 col-md-6">
					<div class="footer-box get-in-touch">
						<h2 class="widget-title">Get it on</h2>
						<a href="https://www.freepnglogos.com/pics/app-store-png-logo" title="Image from freepnglogos.com"><img src="https://www.freepnglogos.com/uploads/app-store-logo-png/apple-app-store-travel-awards-globestamp-7.png" width="200" alt="apple app store travel awards globestamp" /></a>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="footer-box subscribe">
						<h2 class="widget-title">Cariwarung</h2>
                        <a href="{{route('home')}}"><img src="../assets/img/logo.png" alt=""></a>
						<h2 class="widget-title">Berikan saya masukan</h2>
						<form method="post"' action="{{route('feedback')}}">
						@csrf
							<input type="text" placeholder="nama" name="nama">
							<button type="submit"><i class="fas fa-paper-plane"></i></button>
							<br><br>
							<textarea name="komentar" id="" cols="30" rows="10" placeholder="masukkan"></textarea>
							
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end footer -->
	
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-12">
					<p>Copyrights &copy; 2021 - <a href="https://imransdesign.com/">Imran Hossain & Nizan Dhiaulhaq</a>,  All Rights Reserved.<br>
						Distributed By - <a href="https://themewagon.com/">Themewagon</a>
					</p>
				</div>
				<div class="col-lg-6 text-right col-md-12">
					<div class="social-icons">
						<ul>
							<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
							<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end copyright -->