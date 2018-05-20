	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="codepixer">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Kakha Rent Car</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="assets/css/linearicons.css">
			<link rel="stylesheet" href="assets/css/font-awesome.min.css">
			<link rel="stylesheet" href="assets/css/bootstrap.css">
			<link rel="stylesheet" href="assets/css/magnific-popup.css">
			<link rel="stylesheet" href="assets/css/nice-select.css">					
			<link rel="stylesheet" href="assets/css/animate.min.css">
			<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">			
			<link rel="stylesheet" href="assets/css/owl.carousel.css">
			<link rel="stylesheet" href="assets/css/main.css">
		</head>
		<body>

			  <header id="header" id="home">
			    <div class="container">
			    	<div class="row align-items-center justify-content-between d-flex">
				      <div id="logo">
				        <a href="welcome"><img src="assets/img/logo.png" alt="" title="" /></a>
				      </div>
				      <nav id="nav-menu-container">
				        <ul class="nav-menu">
				          <li class="menu-active"><a href="#">Home</a></li>
				          <li><a href="Cars">Mobil</a></li>	
				          <li><a href="contact">Kontak</a></li> 
				          <li><a href="login">Log in</a></li>     
				        </ul>
				      </nav><!-- #nav-menu-container -->		    		
			    	</div>
			    </div>
			  </header><!-- #header -->


			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-center">
						<div class="banner-content col-lg-7 col-md-6 ">
							<h6 class="text-white ">butuh persewaan kapanpun</h6>
							<h1 class="text-white text-uppercase">
								percayakan pada kami			
							</h1>
							<p class="pt-20 pb-20 text-white">
								Kakha rent car menyediakan persewaan
								mobil 24 nonstop 7 hari seminggu. Hubungi cp yang tertera. Dan nikmati perjalanan Anda
							</p>
							<a href="#" class="primary-btn text-uppercase">hubungi kami</a>
						</div>
						<div class="col-lg-5  col-md-6 header-right">
							<h4 class="text-white pb-30">Pesan sekarang juga!</h4>
							<form action="<?php echo base_url(). 'admin/tambah_aksi'; ?>" method="post" class="form" role="form" autocomplete="off">
							    <div class="from-group">
							    	<input class="form-control txt-field" type="text" name="jenis_mobil" placeholder="Jenis mobil">
							    </div>
							    <!-- <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select">
											<select>
												<option value="" >Mulai</option>
												<!--option value="1">Pickup One</option>
												<option value="1">Pickup Two</option>
												<option value="1">Pickup Three</option>
												<option value="1">Pickup Four</option-->
											<!-- </select>
										</div>
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                          
											<input id="datepicker" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>
							     <div class="form-group row">
							        <div class="col-md-6 wrap-left">
								       	<div class="default-select" id="default-select"">
											<select>
												<option value="" disabled selected hidden>Hingga</option>
												<!--option value="1">Drop off One</option>
												<option value="1">Drop off Two</option>
												<option value="1">Drop off Three</option>
												<option value="1">Drop off Four</option-->
											 <!-- </select>
										</div>
							        </div>
							        <div class="col-md-6 wrap-right">
										<div class="input-group dates-wrap">                                              
											<input id="datepicker2" class="dates form-control" id="exampleAmount" placeholder="Date & time" type="text">                        
											<div class="input-group-prepend">
												<span  class="input-group-text"><span class="lnr lnr-calendar-full"></span></span>
											</div>											
										</div>
							        </div>
							    </div>	-->						    
							    <div class="from-group">
							    	<input class="form-control txt-field" type="text" name="nama" placeholder="Nama Anda">
							    	<input class="form-control txt-field" type="email" name="email" placeholder="Alamat Email">
							    	<input class="form-control txt-field" type="tel" name="nomor_hp" placeholder="Nomor WA">
							    </div>
							    <div class="form-group row">
							        <div class="col-md-12">
							            <button type="submit" class="btn btn-default btn-lg btn-block text-center text-uppercase">Konfirmasi</button>
							        </div>
							    </div>
							</form>
						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start feature Area -->
			<!--section class="feature-area section-gap" id="service">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text">
							<h1>What Services we offer to our clients</h1>
							<p>
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-user"></span>Expert Technicians</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-license"></span>Professional Service</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-phone"></span>Great Support</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-rocket"></span>Technical Skills</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>				
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-diamond"></span>Highly Recomended</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>								
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-feature">
								<h4><span class="lnr lnr-bubble"></span>Positive Reviews</h4>
								<p>
									Usage of the Internet is becoming more common due to rapid advancement of technology and power.
								</p>									
							</div>
						</div>						
					</div>
				</div>	
			</section-->
			<!-- End feature Area -->		

			<!-- Start home-about Area -->
			<!--section class="home-about-area" id="about">
				<div class="container-fluid">				
					<div class="row justify-content-center align-items-center">
						<div class="col-lg-6 no-padding home-about-left">
							<img class="img-fluid" src="assets/img/about-img.jpg" alt="">
						</div>
						<div class="col-lg-6 no-padding home-about-right">
							<h1>Globally Connected <br>
							by Large Network</h1>
							<p>
								<span>We are here to listen from you deliver exellence</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
								Ut enim ad minim. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor.
							</p>
							<a class="text-uppercase primary-btn" href="#">get details</a>
						</div>
					</div>
				</div>	
			</section-->
			<!-- End home-about Area -->	

			<!-- Start model Area -->
			<section class="model-area section-gap" id="cars">
				<div class="container">
					<div class="row d-flex justify-content-center pb-40">
						<div class="col-md-8 pb-40 header-text">
							<h1 class="text-center pb-10">Pilih mobil Anda sekarang juga</h1>
							<p class="text-center">
								Disajikan dengan pilihan mobil yang bertenaga dan hemat bahan bakar. Dan pastinya muat banyak
							</p>
						</div>
					</div>					
					<div class="active-model-carusel">
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Toyota Innova 2017</h4>
									<h2>Rp425k<span>/hari</span></h2>
								</div>
								<p>
									Tipe Mesin : 2 GD FTV 4 Cylinder In-Line, 16 Valve DOHC With VNT Intercooler, 1 TR-FE 4 cylinder In-LIne, 16 Valve DOHC With Dual VVT-i(Gasoline) 2.393 cc (Diesel), 1998 cc (Gasoline)
								</p>
								<p>
									Kapasitas        : 07 Orang <br>
									Pintu            : 05 <br>
									Air Condition    : Dual Zone <br>
									Transmisi        : A/T M/T
								</p>
								<a class="text-uppercase primary-btn" href="#">Pesan Sekarang Juga</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="assets/img/car.jpg" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">Suzuki Ertiga Dreza</h4>
									<h2>Rp350k<span>/hari</span></h2>
								</div>
								<p>
									Jenis K14B Isi Silinder 1.373 cc Jumlah Katup 16 Jumlah Silinder 4 in-line Diameter x Langkah 73.0 x 82.0 mm Perbandingan Kompresi 1:10
								</p>
								<p>
									Kapasitas        : 07 orang <br>
									Pintu            : 04 <br>
									Air Condition    : Double blower <br>
									Transmisi        : M/T
								</p>
								<a class="text-uppercase primary-btn" href="#">Pesan Sekarang Juga</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="assets/img/car.jpg" alt="">
							</div>
						</div>
						<div class="row align-items-center single-model item">
							<div class="col-lg-6 model-left">
								<div class="title justify-content-between d-flex">
									<h4 class="mt-20">All new rush</h4>
									<h2>Rp400k<span>/hari</span></h2>
								</div>
								<p>
									AC, power window depan-belakang, automatic climate control, power steering, pemanas, ventilasi AC belakang, engine start stop button, on board computer, automatic head lamp, power outlet, cruise control, keyless entry
								</p>
								<p>
									Capacity         : 07 Orang <br>
									Doors            : 04 <br>
									Air Condition    : Dual cooled, ventilasi AC belakang <br>
									Transmission     : AT/MT
								</p>
								<a class="text-uppercase primary-btn" href="#">Pesan Sekarang Juga</a>
							</div>
							<div class="col-lg-6 model-right">
								<img class="img-fluid" src="assets/img/car.jpg" alt="">
							</div>
						</div>												
					</div>
				</div>	
			</section>
			<!-- End model Area -->


			<!-- Start fact Area -->
			<section class="facts-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col single-fact">
							<h1 class="counter">1660</h1>
							<p>Hari berjalan</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">3</h1>
							<p>Kota naungan kami</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">274</h1>
							<p>Total pelanggan bahagia</p>
						</div>
						<div class="col single-fact">
							<h1 class="counter">4</h1>
							<p>Anggota kami</p>
						</div>	
						<div class="col single-fact">
							<h1 class="counter">100%</h1>
							<p>Kepuasan pelanggan kami</p>
						</div>												
					</div>
				</div>	
			</section>
			<!-- end fact Area -->							

			<!-- Start reviews Area -->
			<!--section class="reviews-area section-gap" id="review">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-40 header-text text-center">
							<h1>Some Features that Made us Unique</h1>
							<p class="mb-10 text-center">
								Who are in extremely love with eco friendly system.
							</p>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Cody Hines</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Chad Herrera</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Andre Gonzalez</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>							
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Jon Banks</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Landon Houston</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Nelle Wade</h4>
								<p>
									Accessories Here you can find the best computer accessory for your laptop, monitor, printer, scanner, speaker.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>												
					</div>
				</div>	
			</section-->
			<!-- End reviews Area -->
			

			<!-- Start callaction Area -->
			<section class="callaction-area relative section-gap">
				<div class="overlay overlay-bg"></div>
				<div class="container">
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<h1 class="text-white">Sewa mobil, Kami ahlinya</h1>
							<p>
								KAKHA rent car telah berdiri selama 4 tahun. Selama itu pula, kami berusaha memuaskan pelanggan. Urusan mobil, serahkan pada Ahlinya
							</p>
							<a class="callaction-btn text-uppercase" href="mailto:pawitragusti.1@gmail.com?Subject=pesan%20mobil"">Kontak WA pak nico</a>	
						</div>
					</div>
				</div>	
			</section>
			<!-- End callaction Area -->

			<!-- Start blog Area -->
			<section class="blog-area section-gap" id="blog">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content pb-70 col-lg-8">
							<div class="title text-center">
								<h1 class="mb-10">Yang Terhangat dari Kami</h1>
								<p>Beberapa alternatif dan solusi yang dapat kami berikan sebagai kawan Anda selama di perjalanan. Trip Anda nyaman, kami senang</p>
							</div>
						</div>
					</div>					
					<div class="row">
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="assets/img/b1.jpg" alt="">								
							</div>
							<p class="date">Tips &amp; Trik</p>
							<a href="https://www.semisena.com/12/tips-mengemudi-mobil-jarak-jauh.html" target="_blank"><h4>Tips Mengemudi Mobil Jarak Jauh</h4></a>
							<p>
								Mengemudi jarak jauh merupakan suatu perjalanan yang melelahkan, sehingga membutuhkan ketahanan fisik dan faktor-faktor penting saat menyetir mobil atau kendaraan
							</p>
							<!--div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div-->									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="assets/img/b2.jpg" alt="">								
							</div>
							<p class="date">Sekilas Info</p>
							<a href="https://twitter.com/e100ss" target="_blank"><h4>Info harian seputar jalan raya yang aktual dan terkini</h4></a>
							<p>
								Siap menemani perjalanan Anda, melewati kemacetan, jalan alternatif, hingga informasi kecelakaan lalu lintas
							</p>
							<!--div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div-->									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="assets/img/b3.jpg" alt="">								
							</div>
							<p class="date">Enjoy</p>
							<a href="https://www.youtube.com/watch?v=y0Blq-W0MZM&t=1194s" target="_blank"><h4>Playlist menyenangkan saat di jalan</h4></a>
							<p>
								Disajikan khusus untuk Anda yang ingin ber-experience japan road trip
							</p>
							<!--div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div-->									
						</div>
						<div class="col-lg-3 col-md-6 single-blog">
							<div class="thumb">
								<img class="img-fluid" src="assets/img/b4.jpg" alt="">								
							</div>
							<p class="date">Nomor Penting</p>
							<a href="https://news.idntimes.com/indonesia/erny/penting-ini-17-nomor-darurat-yang-harus-kamu-ketahui/full" target="_blank"><h4>10 nomor penting yang harus Anda ketahui</h4></a>
							<p>
								Beberapa nomor penyelamat saat Anda dalam situasi dan kondisi urgen selama di perjalanan
							</p>
							<!--div class="meta-bottom d-flex justify-content-between">
								<p><span class="lnr lnr-heart"></span> 15 Likes</p>
								<p><span class="lnr lnr-bubble"></span> 02 Comments</p>
							</div-->									
						</div>							
					</div>
				</div>	
			</section>
			<!-- End blog Area -->


			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<!--div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Quick links</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Features</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div>
						<div class="col-lg-2 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Resources</h6>
								<ul>
									<li><a href="#">Jobs</a></li>
									<li><a href="#">Brand Assets</a></li>
									<li><a href="#">Investor Relations</a></li>
									<li><a href="#">Terms of Service</a></li>
								</ul>								
							</div>
						</div-->												
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6></h6>
								<p>Hubungi Kami Segera</p>
								<div class="footer-social d-flex align-items-center">
									<a href="https://www.facebook.com/Kakha-rent-car-151548038214578/" target="_blank"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</div>
							</div>
						</div>							
						<div class="col-lg-4  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<p>Daftar untuk tawaran eksklusif dan lainnya</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Alamat Email Anda" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '" required="" type="email">
			                            	<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>

										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>	
						<p class="mt-50 mx-auto footer-text col-lg-12">
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- \Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. >
						</p>											
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->		

			<script src="assets/js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="assets/js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
			<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>			
  			<script src="assets/js/easing.min.js"></script>			
			<script src="assets/js/hoverIntent.js"></script>
			<script src="assets/js/superfish.min.js"></script>	
			<script src="assets/js/jquery.ajaxchimp.min.js"></script>
			<script src="assets/js/jquery.magnific-popup.min.js"></script>	
			<script src="assets/js/owl.carousel.min.js"></script>			
			<script src="assets/js/jquery.sticky.js"></script>
			<script src="assets/js/jquery.nice-select.min.js"></script>	
			<script src="assets/js/waypoints.min.js"></script>
			<script src="assets/js/jquery.counterup.min.js"></script>					
			<script src="assets/js/parallax.min.js"></script>		
			<script src="assets/js/mail-script.js"></script>	
			<script src="assets/js/main.js"></script>	
		</body>
	</html>



