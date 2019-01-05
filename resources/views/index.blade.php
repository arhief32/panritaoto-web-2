<!DOCTYPE html>
<html>
<head>
	<title>Panrita Oto | Bengkel Repair Otomotif</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	  <meta charset="utf-8" />
	<meta name="keywords" content="Shipping Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script> 
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //for-mobile-apps -->
	 <link href="{{ asset('public/css/bootstrap.css') }}" type="text/css" rel="stylesheet" media="all">
	<!--banner slider  -->
	<link href="{{ asset('public/css/JiSlider.css') }}" rel="stylesheet">
	<!-- //banner-slider -->
	<link rel="stylesheet" href="{{ asset('public/css/flexslider.css') }}" type="text/css" media="screen" property="" />
	<link href="{{ asset('public/css/font-awesome.css') }}" rel="stylesheet">
	<link href="{{ asset('public/css/style.css') }}" rel="stylesheet" type="text/css" media="all" />
	<link href="//fonts.googleapis.com/css?family=Rubik:400,500,700,900" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i" rel="stylesheet">

	<!-- Chocolat image slider -->
	<script type="text/javascript" src="{{ asset('public/js/jquery.js') }}"></script>
	<script type="text/javascript" src="{{ asset('public/js/jquery.chocolat.js') }}"></script>
	<link rel="stylesheet" href="{{ asset('public/css/chocolat.css') }}" type="text/css" media="screen" charset="utf-8">

</head>

<body>
	<!-- header -->
	<section class="w3layouts-header py-2">
		<div class="container">
			  <!-- header -->
        <header>
                <nav class="navbar navbar-expand-lg navbar-light bg-gradient-secondary">

					<img src="{{ asset('public/images/LOGO-2.png') }}" height="60">
					<h1>
                        <a class="navbar-brand" href="{{ asset('public/index.html') }}">
							
                        </a>
                    </h1>
                    <button class="navbar-toggler ml-md-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-lg-auto text-center">
                            <li class="nav-item active  mr-3">
                                <a class="nav-link" href="{{ url('/') }}">Home
                                    <span class="sr-only">(current)</span>
                                </a>
                            </li>
                            <li class="nav-item  mr-3">
                                <a class="nav-link" href="{{ url('/') }}">Tentang Kami</a>
                            </li>
							<li class="nav-item  mr-3">
                                <a class="nav-link" href="{{ url('/') }}">Pelayanan</a>
							</li>
							<li class="nav-item  mr-3">
                                <a class="nav-link" href="{{ url('/') }}">Galeri</a>
                            </li>
                            <!-- <li class="nav-item dropdown mr-3">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    Pages
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ asset('public/gallery.html') }}">Gallery</a>
									<a class="dropdown-item" href="{{ asset('public/typo.html') }}">Typography</a>
                                </div>
                            </li> -->
                            <li class="nav-item mr-3">
                                <a class="nav-link" href="{{ url('/') }}">Kontak</a>
                            </li>
                            <!-- <li class="nav-item">
                               	<i class="fas fa-phone pr-2"></i>CALL US 1-677-124-44227
                            </li> -->
                        </ul>
                    </div>

                </nav>
        </header>
        <!-- //header -->

		</div>
	</section>
	<!-- //header -->
	<!-- banner -->
	<section class="banner-silder">
		<div id="JiSlider" class="jislider">
			<ul>
				<li>
					<div class="banner-top banner-top1">
						<div class="container">
							<div class="banner-info info2">
								<h3>Keterbukaan dan tanggung jawab</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada neque et turpis hendrerit, et porta dui efficitur. Aenean auctor dui sit amet aliquet mollis.</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top2">
						<div class="container">
							<div class="banner-info bg3 info2">
								<h3>Kejujuran dan Integritas</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada neque et turpis hendrerit, et porta dui efficitur. Aenean auctor dui sit amet aliquet mollis.</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top3">
						<div class="container">
							<div class="banner-info bg3">
								<h3>Kompetensi dan Kemitraan</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada neque et turpis hendrerit, et porta dui efficitur. Aenean auctor dui sit amet aliquet mollis.</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top2">
						<div class="container">
							<div class="banner-info bg2">
								<h3>Kerja Keras dan Proaktif</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada neque et turpis hendrerit, et porta dui efficitur. Aenean auctor dui sit amet aliquet mollis.</p>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="banner-top banner-top3">
						<div class="container">
							<div class="banner-info bg3">
								<h3>Pengembangan Diri yang Berkelanjutan</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed malesuada neque et turpis hendrerit, et porta dui efficitur. Aenean auctor dui sit amet aliquet mollis.</p>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		</section>
		<!-- //banner -->
		<!-- banner bottom -->
		<section class="banner-btm">
			<div class="container">
				<div class="row banner-bottom-main">
					<div class="col-md-4 banner-btmg">
						<div class="banner-btmg1">
							<div class="form-text">
								<h3 class="text-center">Cek Proses</h3>
								<p class="text-center">Kendaraan anda disini</p>
							</div>
							<form action="#" method="post" class="banner_form">
								<div class="sec-right">
									<!-- <label class="contact-form-text">Moving To</label> -->
									<input placeholder="Masukkan nomor kendaraan anda " name="first name" type="text" required="">
								</div>
								<input type="submit" value="CEK!">
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>

		<section class="banner_bottom py-md-5">
		<div class="container py-4 mt-2">
			<h3 class="tittle-w3ls text-center mb-3">Tentang Kami</h3>
			<!-- <p class="tit text-center mx-auto">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eum inventore consectetur dolorum, voluptatum possimus temporibus vel ab, nesciunt quod!</p> -->
			<div class="inner_sec_info_wthree_agile pt-4 mt-md-4">
				<div class="row help_full">
					<div class="col-md-6 banner_bottom_grid help">
						<img src="{{ asset('public/images/g1.jpg') }}" alt=" " class="img-fluid">
					</div>
					<div class="col-md-6 banner_bottom_left">
						<h4>Profil Panrita Oto</h4>
						<p>Sebagai perusahaan yang penuh komitmen untuk memberikan solusi bisnis yang terbaik
							bagi seluruh pelanggan kami. PANRITA OTO yang berdiri pada tanggal 02 maret 2013
							dibulukumba, sebagai sebuah perusahaan yang menghususkan bergerak dibidang usaha spesialis
							Auto Body Repair yang didukung oleh tenaga-tenaga profesional yang berpengalaman, dinamis
							dan berdedikasi serta manajemen terlatih dan terorganisir dengan baik.</p>
						<a href="#" class="blog-btn" data-toggle="modal" data-target="#myModal">Baca selanjutnya...</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--//ab--><!-- //banner bottom -->
		

<!-- smooth-shipping -->
<section class="wthree-row w3-about py-md-5">
	<div class="container py-4 mt-2">
		<h3 class="tittle-w3ls text-center mb-3">Pelayanan Kami</h3>
		<p class="tit text-center mx-auto">Bengkel panrita oto melibatkan tenaga profesional yang ahli di bidang body repair. Tidak
			tanggung-tanggung, tenaga yang sudah mempunyai pengalaman dibidangnya didatangkan
			langsung dari luar Sulawesi untuk menjamin kualitas dan hasil yang terbaik demi kepuasan
			constumer.</p>
		<p class="tit text-center mx-auto">
			Kami adalah perusahaan yang bergerak di bidang usaha otomotif yang melayani:</p>
		<div class="card-deck pt-4 mt-md-4">
			<div class="card">
				<img src="{{ asset('public/images/01-duco-oven.jpg') }}" class="img-fluid" alt="Card image cap">
				<div class="card-body w3ls-card">
				<h5 class="card-title">Duco Oven</h5>
				<p class="card-text mb-3 ">Bicara metode pengecatan bodi, saat ini paling ideal adalah dengan memanfaatkan ruangan khusus sebagai ruang pengerjaan. 
					Metode yang kerap dijuluki "cat oven" ini, memanfaatkan ruangan yang bisa diatur level temperaturnya, mirip oven.</p>
					<!-- <div class="ab_button">
						<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Baca selanjutnya... </a>
					</div> -->
				</div>
			</div>
			<div class="card">
				<img src="{{ asset('public/images/02-body-repair.jpg') }}" class="img-fluid" alt="Card image cap">
				<div class="card-body w3ls-card">
				<h5 class="card-title">Body Repair</h5>
				<p class="card-text mb-3 ">Kami tahu kendaraan Anda lebih dari sekedar tunggangan yang siap mengantar Anda ke tempat tujuan. 
					Kendaraan Anda juga cermin kebanggaan Anda yang harus tampil prima baik di dalam, maupun tampilan luarnya. 
					Untuk itulah Panrita Oto menyediakan layanan Body repair.</p>
					<!-- <div class="ab_button">
						<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Baca selanjutnya... </a>
					</div> -->
				</div>
			</div>
			<div class="card">
				<img src="{{ asset('public/images/03-painting.jpg') }}" class="img-fluid" alt="Card image cap">
				<div class="card-body w3ls-card">
				<h5 class="card-title">Painting</h5>
				<p class="card-text mb-3 ">Memberikan perlindungan terhadap kendaraan merupakan hal yang mutlak bagi setiap pemilik mobil. 
					Karena mobil merupakan alat penunjang aktivitas sehari-hari, dan bagian dari gaya hidup. Ada beberapa cara agar mobil 
					tetap tampil maksimal dengan cat (paint) bodi yang mengilap, tetap orisinal dan bersih.</p>
					<!-- <div class="ab_button">
						<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Baca selanjutnya... </a>
					</div> -->
				</div>
			</div>
		</div>
		<div class="card-deck pt-4 mt-md-4">
			<div class="card">
				<img src="{{ asset('public/images/04-service-station.jpg') }}" class="img-fluid" alt="Card image cap">
				<div class="card-body w3ls-card">
				<h5 class="card-title">Service Station</h5>
				<p class="card-text mb-3 ">Part-part yang kinerjanya menurun juga akan mempengaruhi performa mesin kendaraan tersebut. 
				Oleh sebab itu part-part yang terindikasi kinerjanya menurun harus dilakukan perawatan. Salah satu perawatan yang 
				dilakukan adalah perawatan atau servis berkala.</p>
					<!-- <div class="ab_button">
						<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Baca selanjutnya... </a>
					</div> -->
				</div>
			</div>
			<div class="card">
				<img src="{{ asset('public/images/05-cat-sickens.jpg') }}" class="img-fluid" alt="Card image cap">
				<div class="card-body w3ls-card">
				<h5 class="card-title">Cat Sikkens</h5>
				<p class="card-text mb-3 ">Cat sikkens selama ini memang lebih banyak digunakan oleh kalangan induatri otomotif dan juga bengkel-bengkel repair 
					yang bereputasi tinggi. Sehingga produk retailnya seringkali jarang dijumpai pada toko retail biasa, kecuali toko yang fokus menjual bahan finishing mobil.</p>
					<!-- <div class="ab_button">
						<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Baca selanjutnya... </a>
					</div> -->
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //smooth-shipping -->

<!-- GALLERY -->
<section class="gallery py-md-5">
	<div class="container py-4 mt-2">
	<h3 class="tittle-w3ls text-center mb-3">Galeri</h3>
		<!-- <p class="tit text-center mx-auto">
			
		</p> -->
		<div class="row agile_gallery_grids w3-agile demo pt-4 mt-md-5">
			@foreach($instagrams as $instagram)
			<div class="col-md-4 gal-sec" style="margin-top: 20px;">
				<div class="gallery-grid1">
					<a title="" href="{{ $instagram->images->standard_resolution->url }}">
					<img src="{{ $instagram->images->standard_resolution->url }}" alt=" " class="img-responsive" />
					<div class="p-mask">
						<p>Klik untuk melihat detail</p>
					</div>
					</a>
				</div>
			</div>
			@endforeach
		</div>
		<div class="ab_button">
			<a class="btn btn-primary btn-lg hvr-underline-from-left" href="#" role="button" data-toggle="modal" data-target="#myModal">Lihat selengkapnya... </a>
		</div>
	</div>
</section>
<!-- END GALLERY -->

<!-- testimonials -->
<section class="testimonials py-md-5">
	<div class="container py-4 mt-2">
		<h3 class="tittle-w3ls text-center mb-3 text-white">Asuransi Kerja Sama</h3>
		<p class="tit text-center mx-auto text-white">Kami memiliki kerja sama dengan pihak asuransi di bengkel kami.</p>
		<div class="w3_agileits_testimonial_grids pt-4 mt-md-4">
			<section class="slider">
				<div class="flexslider">
					<ul class="slides">
						<li>
							<div class="w3_agileits_testimonial_grid">
								<div class="test-bg-w3ls">
									<h4>JASINDO</h4>
									<p>Jl. Haji Bau No. 8 Mariso, Makassar, Sulawesi-Selatan 90122</p>
									<p>No. telp (0411) 873888,875091,873666</p>
									<p>Email: Makassar@jasindonet.com</p>
								</div>
								<img src="{{ asset('public/images/asuransi/01-asuransi-jasindo.png') }}" alt=" " class="img-responsive" />
							</div>
						</li>
						<li>
							<div class="w3_agileits_testimonial_grid">
								<div class="test-bg-w3ls">
									<h4>ASOKA MAS</h4>
									<p>Jl. Tentara Pelajar No. 127 Makassar, Sulawesi-Selatan 90172</p>
									<p>No. telp 0411 3635269</p>
									<p>Email: Makassar@asuransi-asoka.com</p>
								</div>
								<img src="{{ asset('public/images/asuransi/02-asoka-mas.png') }}" alt=" " class="img-responsive" />
							</div>
						</li>
						<li>
							<div class="w3_agileits_testimonial_grid">
								<div class="test-bg-w3ls">
									<h4>TRI PAKARTA</h4>
									<p>Jl. Dr. Sam Ratulangi No. 9 Makassar , Sulawesi-Selatan 90113</p>
									<p>No. telp 0411 8111400</p>
								</div>
								<img src="{{ asset('public/images/asuransi/03-tri-pakarta.png') }}" alt=" " class="img-responsive" />
							</div>
						</li>
						<li>
							<div class="w3_agileits_testimonial_grid">
								<div class="test-bg-w3ls">
									<h4>RAMAYANA</h4>
									<p>Jl. Dr. Sam Ratulangi No. 85 C Makassar, Sulawesi-Selatan 90132</p>
									<p>No. telp (0411) 878663, 878664, 878666</p>
								</div>
								<img src="{{ asset('public/images/asuransi/04-asuransi-ramayana.png') }}" alt=" " class="img-responsive" />
							</div>
						</li>
						<li>
							<div class="w3_agileits_testimonial_grid">
								<div class="test-bg-w3ls">
									<h4>SINAR MAS</h4>
									<p>Jl. Gunung Bawakaraeng No. 67-69 Makassar, Sulawesi-Selatan 90157</p>
									<p>No. telp 0411 3616752</p>
								</div>
								<img src="{{ asset('public/images/asuransi/05-sinar-mas.png') }}" alt=" " class="img-responsive" />
							</div>
						</li>
						<li>
							<div class="w3_agileits_testimonial_grid">
								<div class="test-bg-w3ls">
									<h4>ASPAN</h4>
									<p>Gedung Graha Pena Lt. 1 Kav 100E</p>
									<p>Jl. Urip Sumoharjo No. 20 Makassar, Sulawesi-Selatan 90234</p>
									<p>No. telp 0411 421203</p>
									<p>Email: Makassar@asuransiaspan.com</p>
								</div>
								<img src="{{ asset('public/images/asuransi/06-aspan.png') }}" alt=" " class="img-responsive" />
							</div>
						</li>
						<li>
							<div class="w3_agileits_testimonial_grid">
								<div class="test-bg-w3ls">
									<h4>ASWATA</h4>
									<p>Jl. Sulawesi No. 35 Makassar, Sulawesi-Selatan 90174</p>
									<p>No. telp 0411 3610600</p>
									<p>Email: Makassar@aswata.co.id</p>
								</div>
								<img src="{{ asset('public/images/asuransi/07-aswata.png') }}" alt=" " class="img-responsive" />
							</div>
						</li>
						<li>
							<div class="w3_agileits_testimonial_grid">
								<div class="test-bg-w3ls">
									<h4>SOMPO</h4>
									<p>Wisma Kalla 5th FI Unit 502</p>
									<p>Jl. Dr. Sam Ratulangi No. 8-10 Makassar, Sulawesi-Selatan 90125</p>
									<p>No. telp (0411) 8120886, 8120889</p>
								</div>
								<img src="{{ asset('public/images/asuransi/08-sompo.png') }}" alt=" " class="img-responsive" />
							</div>
						</li>
						<li>
							<div class="w3_agileits_testimonial_grid">
								<div class="test-bg-w3ls">
									<h4>BRINS</h4>
									<p>Ruko Mirah 2</p>
									<p>Jl. Pengayoman No. 10 Makassar, Sulawesi-Selatan 90231</p>
									<p>No. telp 0411 424896</p>
								</div>
								<img src="{{ asset('public/images/asuransi/09-brins.png') }}" alt=" " class="img-responsive" />
							</div>
						</li>
						<li>
							<div class="w3_agileits_testimonial_grid">
								<div class="test-bg-w3ls">
									<h4>ABDA</h4>
									<p>Komplek Latanette Plaza</p>
									<p>Jl. Sungai Saddang Blok A No. II, Makassar, Sulwesi-Selatan 90114</p>
									<p>No. telp 0411 3623944</p>
								</div>
								<img src="{{ asset('public/images/asuransi/10-abda.png') }}" alt=" " class="img-responsive" />
							</div>
						</li>
					</ul>
				</div>
			</section>
		</div>
	</div>
</section>
<!-- //testimonials -->

<!-- footer -->
<footer>
	<section class="footer py-md-5">
		<div class="container py-4 mt-2">
		<div class="row footer_inner_info_w3ls_agileits">
			<div class="col-md-3 footer-left">
				<h2><a href="{{ asset('public/index.html') }}">Panrita Oto</a></h2>
				<p class="mb-3 mt-3">Lorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora.</p>
				<ul class="social-nav footer-social social two">
					<li>
						<a href="#">
							<i class="fab fa-facebook-f" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-twitter" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-instagram" aria-hidden="true"></i>
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fab fa-pinterest" aria-hidden="true"></i>
						</a>
					</li>
				</ul>
			</div>
			
			<div class="col-md-2 sign-gd">
				<h4>Tautan</h4>
				<ul>
					<li><a href="{{ asset('public/index.html') }}">Home</a></li>
					<li><a href="{{ url('/') }}">Tentang Kami</a></li>
					<li><a href="{{ url('/') }}">Pelayanan</a></li>
					<li><a href="{{ asset('public/gallery.html') }}">Galeri</a></li>
					<li><a href="{{ url('/') }}">Kontak</a></li>
				</ul>
			</div>
			<div class="col-md-4 sign-gd flickr-post">
				<h4>Instagram</span></h4>
				<ul>
				@foreach($instagrams as $instagram)
				<li><a href="#"><img src="{{ $instagram->images->thumbnail->url }}" alt=" " class="img-fluid" /></a></li>
				@endforeach
				</ul>
			</div>
			<div class="col-md-3 sign-gd-two">
				<h4>Kontak Informasi</h4>
				<div class="address">
					<div class="address-grid">
						<div class="address-left">
							<i class="fa fa-phone" aria-hidden="true"></i>
						</div>
						<div class="address-right">
							<h6>Telepon</h6>
							<p>+62 853 9837 1559<br />
							+62 813 5582 9003</p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-grid">
						<div class="address-left">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</div>
						<div class="address-right">
							<h6>Alamat Email</h6>
							<p><a href="mailto:panritaotobulukumba@email.com"> panritaotobulukumba@email.com</a></p>
						</div>
						<div class="clearfix"> </div>
					</div>
					<div class="address-grid">
						<div class="address-left">
							<i class="fa fa-map-marker" aria-hidden="true"></i>
						</div>
						<div class="address-right">
							<h6>Alamat</h6>
							<p>Jl. Panggala, Taccorong, Desa Polewali, Taccorong, Polewali,<br /> 
								Kabupaten Bulukumba, Sulawesi Selatan 92561
							</p>
						</div>	
					</div>
				</div>
			</div>
		</div>
	</div>
	</section>
	<p class="copy-right py-3">&copy 2018 Panrita Oto. All rights reserved | Design by <a href="http://w3layouts.com/">W3layouts</a></p>
	<!-- //footer -->
</footer>
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Shipping</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="agileits-w3layouts-info">
					<img src="{{ asset('public/images/g1.jpg') }}" class="img-fluid" alt="" />
					<p>Duis venenatis, turpis eu bibendum porttitor, sapien quam ultricies tellus, ac rhoncus risus odio eget nunc. Pellentesque ac fermentum diam. Integer eu facilisis nunc, a iaculis felis. Pellentesque pellentesque tempor enim, in dapibus turpis porttitor quis. </p>
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-primary">Save changes</button>
			</div>
		</div>
	</div>
</div>
<!-- //Modal -->


<!-- js -->
<script src="{{ asset('public/js/jquery-2.2.3.min.js') }}"></script>
<!-- //js-->
<!--banner-slider-->
<script src="{{ asset('public/js/JiSlider.js') }}"></script>
<script> 
	$(window).load(function () {
		$('#JiSlider').JiSlider({
			color: '#fff',
			start: 1,
			reverse: false
		}).addClass('ff')
	})
</script>
<!-- //banner-slider -->
<!-- flexSlider -->
<script defer src="{{ asset('public/js/jquery.flexslider.js') }}"></script>
<script type="text/javascript">
	$(window).load(function(){
		$('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			$('body').removeClass('loading');
			}
		});
	});
</script>
<!-- //flexSlider -->

<!-- start-smooth-scrolling -->
<script  src="{{ asset('public/js/move-top.js') }}"></script>
<script  src="{{ asset('public/js/easing.js') }}"></script>
<script> 
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 1000);
		});
	});
</script>
<!-- //end-smooth-scrolling -->
<!-- stats -->
<script src="{{ asset('public/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('public/js/jquery.countup.js') }}"></script>
	<script>
		$('.counter').countUp();
	</script>
<!-- //stats -->

<!-- smooth-scrolling-of-move-up -->
<script> 
	$(document).ready(function () {
		/*
		var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
		};
		*/
		$().UItoTop({
			easingType: 'easeOutQuart'
		});
	});
</script>
<script  src="{{ asset('public/js/SmoothScroll.min.js') }}"></script>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="{{ asset('public/js/bootstrap.js') }}"></script>

<!-- gallery -->
<script src="{{ asset('public/js/jquery.chocolat.js') }}"></script>
<!--light-box-files -->
<script type="text/javascript">
	$(function () {
		$('.gallery-grid1 a').Chocolat();
	});
</script>
<!-- //gallery -->

</body>
</html>