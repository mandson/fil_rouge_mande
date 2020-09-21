<!doctype html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" href="{{asset('users/img/favicon.png')}}" type="{{asset('users/image/png')}}">
	<title>EduSmart Education</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="{{asset('users/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('users/vendors/linericon/style.css')}}">
	<link rel="stylesheet" href="{{asset('users/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('users/vendors/owl-carousel/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('users/vendors/lightbox/simpleLightbox.css')}}">
	<link rel="stylesheet" href="{{asset('users/vendors/nice-select/css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('users/vendors/animate-css/animate.css')}}">
	<!-- main css -->
	<link rel="stylesheet" href="{{asset('users/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('users/css/monstyle.css')}}">
	<link rel="stylesheet" href="{{asset('users/css/mambastyle.css')}}">
	<link rel="stylesheet" href="{{asset('users/css/eternastyle.css')}}">


</head>

<body>

	<!--================ Start Header Menu Area =================-->
	<header class="header_area">
		<div class="header-top">
			<div class="container">
				<div class="row align-items-center">
				 @foreach($universites as $universite)
					
							
					<div class="col-lg-6 col-sm-6 col-4 header-top-left">
						<a href="tel:+9530123654896">
							<span class="lnr lnr-phone"></span>
							<span class="text">
								<span class="text">{{$universite->contact}}</span>

							</span>
						</a>
						<a href="mailto:support@colorlib.com">
							<span class="lnr lnr-envelope"></span>
							<span class="text">
								<span class="text">{{$universite->email}}</span>
							</span>
						</a>
					</div>
					<div class="col-lg-6 col-sm-6 col-8 header-top-right">
						<a href="#" class="text-uppercase">Login</a>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		<div class="main_menu">
			<div class="search_input" id="search_input_box">
				<div class="container">
					<form class="d-flex justify-content-between" method="" action="">
						<input type="text" class="form-control" id="search_input" placeholder="Search Here">
						<button type="submit" class="btn"></button>
						<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
					</form>
				</div>
			</div>

			<nav class="navbar navbar-expand-lg navbar-light">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div>	<a class="navbar-brand logo_h " href="#"><img class="ftk_logo1 button" src="users/img/ftk-img/irisprog.png" alt=""></a></div>
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						
						<ul class="nav navbar-nav menu_nav ml-auto">
						    <li class="nav-item  {{ Request::is('accueil*','/') ? 'active' : '' }} "><a class="nav-link ftk_font_menu ftk_espace " href="{{route('p_accueil.index') }} ">ACCUEIL</a></li>
						    <li class="nav-item  {{ Request::is('temps*') ? 'active' : '' }} "><a class="nav-link ftk_font_menu" href="temps">MON EMPLOI DU TEMPS</a><span class="lnr lnr-layers"></span></li>
							<li class="nav-item {{ Request::is('oeil*') ? 'active' : '' }}"><a class="nav-link ftk_font_menu" href="oeil">OEIL DU CAMPUS</a> <span class="lnr lnr-eye"></span></li>
							<li class="nav-item"><a class="nav-link ftk_font_menu" href="#">FORUM</a></li>
							<li class="nav-item"><a class="nav-link " href="#">A PROPOS</a></li>
							<li class="nav-item submenu dropdown">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">COMPTE</a>
								<ul class="dropdown-menu">
									<li class="nav-item"><a class="nav-link" href="#">SE CONNECTE</a></li>
									<li class="nav-item"><a class="nav-link" href="#">INSCRIPTION</a></li>
								</ul>
						

							<li class="nav-item">
								<a href="#" class="nav-link search" id="search">
									<i class="lnr lnr-magnifier"></i>
								</a>
							</li>
						</ul>
						
					</div>
					<div>@foreach($universites as $universite)
					
						<a class="navbar-brand logo_h " href="#">  <img src=" {{asset('storage').'/'.$universite->logo}}" style="width:100px;height:100px;" class="bf5  rounded-circle"> </a></div>
						
						@endforeach
				</div>
			</nav>
		</div>
	</header>
	<!--================ End Header Menu Area =================-->

	<!--================ Start Home Banner Area =================-->
	<section class="home_banner_area">
		<div class="banner_inner">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
					<div class="banner_content">
							<h2>
								Bienvenue Sur <span class="ftk_iris_text1 button"> IRISPROGRAMME</span> <br>
							 </h2>  
							 <h3 class="ftk_iris_text2">Platte forme universitaire de retransmition des programmes</h3>
							
							<p>
						        Plus besion de vous deplacé pour Connaitre le programme du jours .
								Incrivez-Vous et Profiter du numerique en marche
							</p>
				
							<div class="search_course_wrap">
								<form action="" class="form_box d-flex justify-content-between w-100">
									<input type="text" placeholder="Recherche..." class="form-control" name="username" onfocus="this.placeholder = ''"
									 onblur="this.placeholder = 'Search Courses'">
									<button type="submit" class="btn search_course_btn">Rechercher</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!--================ End Home Banner Area =================-->

	<!--================ Start Feature Area =================-->

	

<!--================ Debut Centre accueil des pages =================-->
                    <div class="mt-5" >@yield('content')</div>

<!--================ Fin Centre accueil des pages =================-->

	<!--================ Start Testimonial Area =================-->
	<div class="section_gap testimonial_area">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-lg-10 text-center">
					<div class="active_testimonial owl-carousel" data-slider-id="1">
						<!-- single testimonial -->
						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>Francophonie</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>Partenaire de la Francophonie, la société civile francophone est à la fois un relais de plaidoyer sur la scène 
									internationale, un vecteur de mise en œuvre des programmes francophones sur le terrain, 
									mais aussi un acteur à part entière dans la définition et la conduite d’initiatives au plus 
									près des populations. </p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="img/quote.png" alt="">
								<h4>Partenaires</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>Pour améliorer la capacité et l'utilisation des TIC par les administrations publiques et privées, il a été formulé en 2016, le projet e-Burkina. 

Financé par la Banque Mondiale, le projet est exécuté par l’ANPTIC et est prévu  pour une durée de 05 ans . .</p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="{{asset('users/img/quote.png')}}" alt="">
								<h4>Partenaire</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>CAMPUSFASO :pour les inscription des etudiant et autres  </a> </p>
							</div>
						</div>

						<div class="single_testimonial">
							<div class="testimonial_head">
								<img src="{{asset('users/img/quote.png')}}" alt="">
								<h4>2ie</h4>
								<div class="review">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</div>
							</div>
							<div class="testimonial_content">
								<p>IRISPROGRAMME beneficie de l'accompagnement des partenaires officiel 2ie .</p>
							</div>
						</div>
					</div>

					<div class="owl-thumbs d-flex justify-content-center" data-slider-id="1">
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="users/img/ftk-img/francophoni.png" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="users/img/ftk-img/images.jpg" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="users/img/ftk-img/campus.jpg" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
						<div class="owl-thumb-item">
							<div class="position-relative">
								<img class="img-fluid" src="users/img/ftk-img/2ie.jpg" alt="">
							</div>
							<div class="overlay-grad"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--================ End Testimonial Area =================-->

	

	<!--================ Start footer Area  =================-->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Partenaire</h4>
					<ul>
						<li><a href="#">Managed Website</a></li>
						<li><a href="#">Manage Reputation</a></li>
						<li><a href="#">Power Tools</a></li>
						<li><a href="#">Marketing Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Lien Utile</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Contact</h4>
					<ul>
						<li><a href="#">Jobs</a></li>
						<li><a href="#">Brand Assets</a></li>
						<li><a href="#">Investor Relations</a></li>
						<li><a href="#">Terms of Service</a></li>
					</ul>
				</div>
				<div class="col-lg-2 col-md-6 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li><a href="#">Guides</a></li>
						<li><a href="#">Research</a></li>
						<li><a href="#">Experts</a></li>
						<li><a href="#">Agencies</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>Souscrire au Newsletter</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						 method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="entrer votre Email " onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address'"
							 required="" type="email">
							<button class="click-btn btn btn-default">
								<span>subscribe</span>
							</button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>
			<div class="row footer-bottom d-flex justify-content-between">
				<p class="col-lg-8 col-sm-12 footer-text m-0 text-white">Copyright © 2020 All rights reserved 
					made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">Mandson1er</a></p>
				<div class="col-lg-4 col-sm-12 footer-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-dribbble"></i></a>
					<a href="#"><i class="fa fa-behance"></i></a>
				</div>
			</div>
		</div>
	</footer>
	<!--================ End footer Area  =================-->

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="{{asset('users/js/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('users/js/popper.js')}}"></script>
	<script src="{{asset('users/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('users/js/stellar.js')}}"></script>
	<script src="{{asset('users/js/countdown.js')}}"></script>
	<script src="{{asset('users/vendors/nice-select/js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('users/vendors/owl-carousel/owl.carousel.min.js')}}"></script>
	<script src="{{asset('users/js/owl-carousel-thumb.min.js')}}"></script>
	<script src="{{asset('users/js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('users/vendors/counter-up/jquery.counterup.js')}}"></script>
	<script src="{{asset('users/js/mail-script.js')}}"></script>
	<!--gmaps Js-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
	<script src="{{asset('users/js/gmaps.min.js')}}"></script>
	<script src="{{asset('users/js/theme.js')}}"></script>
</body>

</html>