
<!-- header -->
<div class="top-header-area" id="sticker">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-sm-12 text-center">
					<div class="main-menu-wrap">
						<!-- logo -->
						<div class="site-logo">
							<a href="{{route('home')}}">
								<img src="../assets/img/logo.png" alt="">
							</a>
						</div>
						<!-- logo -->

						<!-- menu start -->
						<nav class="main-menu">
							<ul>
								<li class="current-list-item"><a href="{{route('home')}}">Home</a>
								</li>
								<li><a href="{{route('about')}}">Tentang</a></li>
								<li><a href="{{route('product')}}">Produk</a>
								</li>
								<li><a href="{{route('shop')}}">Toko</a>
								</li>
								<li><a href="{{route('contact')}}">Kontak</a></li>
								<li>
								<form action="{{ route('search') }}" method="get"">
                            		@csrf
                            		<input type="text" name="kata" class="form-control" placeholder="Cari..." style="width: 30%; background-color: var(--white); display: inline; margin-top: 10px; margin-bottom: 10px; float: right;" >
                            		<button class="btn btn-warning" type="submit" style="display: inline; margin-top: 10px; margin-bottom: 10px; margin-right: 10px; float: right;"><i class="fas fa-search"></i></button>
                        		</form>
								</li>
							</ul>
						</nav>
						<div class="mobile-menu"></div>
						<!-- menu end -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end header -->
	
	<!-- search area -->
	<!-- <div class="search-area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<span class="close-btn"><i class="fas fa-window-close"></i></span>
					<div class="search-bar">
						<div class="search-bar-tablecell">
							<h3>Apa yang anda cari:</h3>
							<input type="text" placeholder="Cari Produk/Toko">
							<button type="submit">Cari <i class="fas fa-search"></i></button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> -->
	<!-- end search area -->
