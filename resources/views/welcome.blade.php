<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	<link rel="shortcut icon" href="{{asset('img/fav.png')}}">
	<!-- Author Meta -->
	<meta name="author" content="CodePixar">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="UTF-8">
	<!-- Site Title -->
	<title>Uncle's area</title>
	<!--
		CSS
		============================================= -->
	<link rel="stylesheet" href="{{asset('css/linearicons.css')}}">
	<link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
	<link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
	<link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
	<link rel="stylesheet" href="{{asset('css/nouislider.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/ion.rangeSlider.css')}}" />
	<link rel="stylesheet" href="{{asset('css/ion.rangeSlider.skinFlat.css')}}" />
	<link rel="stylesheet" href="{{asset('css/main.css')}}">
	<link rel="stylesheet" href="{{asset('css/generalStyles.css')}}">
</head>

<body>

	<!-- Start Header Area -->
	<header class="header_area sticky-header">
		<div class="main_menu">
			<nav class="navbar navbar-expand-lg navbar-light main_box">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="{{ asset('/') }}"><img src="{{asset('img/logo.png')}}" alt=""></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
					 aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset" id="navbarSupportedContent">
						<ul class="nav navbar-nav menu_nav ml-auto">
							<li class="{{ ($url=='/') ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="{{ asset('/') }}">Home</a></li>
							<li class="{{ ($url=='/category') ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="{{ asset('category') }}">Catalog</a></li>
							<li class="{{ ($url=='/blog' || $url=='/singleBlog') ? 'nav-item submenu dropdown active' : 'nav-item submenu dropdown'}}">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Blog</a>
								<ul class="dropdown-menu">
									<li class="{{ ($url=='/blog') ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="{{ asset('blog') }}">Blog</a></li>
									<li class="{{ ($url=='/singleBlog') ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="{{ asset('singleBlog') }}">Blog Details</a></li>
								</ul>
							</li>
							<li class="{{ ($url=='/tracking' || $url=='/elements') ? 'nav-item submenu dropdown active' : 'nav-item submenu dropdown'}}">
								<a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
								 aria-expanded="false">Pages</a>
								<ul class="dropdown-menu">
									<li class="{{ ($url=='/tracking') ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="{{ asset('tracking') }}">Tracking</a></li>
									<li class="{{ ($url=='/elements') ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="{{ asset('elements') }}">Elements</a></li>
								</ul>
							</li>
							<li class="{{ ($url=='/contact') ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="{{ asset('contact') }}">Contact</a></li>

							@if (Auth::check())
							<li class="{{ ($url=='/login') ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="{{ asset('login') }}">{{Auth::user()->name}}</a></li>
								<li class="nav-item"><a class="nav-link" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a> </li>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
							@else
								<li class="{{ ($url=='/login') ? 'nav-item active' : 'nav-item'}}"><a class="nav-link" href="{{ asset('login') }}">Login</a></li>
							@endif
								
						</ul>
						<ul class="nav navbar-nav navbar-right">
							<li class="nav-item"><a href="{{asset('cart')}}" class="cart"><span class="ti-bag"></span></a></li>
							<li class="nav-item">
								<button class="search"><span class="lnr lnr-magnifier" id="search"></span></button>
							</li>
						</ul>
					</div>
				</div>
			</nav>
		</div>
		<div class="search_input" id="search_input_box">
			<div class="container">
				<form class="d-flex justify-content-between">
					<input type="text" class="form-control" id="search_input" placeholder="Search Here">
					<button type="submit" class="btn"></button>
					<span class="lnr lnr-cross" id="close_search" title="Close Search"></span>
				</form>
			</div>
		</div>
	</header>
	<!-- End Header Area -->

	@yield('content')
	
	<!-- start footer Area -->
	<footer class="footer-area section_gap">
		<div class="container">
			<div class="row">
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>About Us</h6>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore dolore
							magna aliqua.
						</p>
					</div>
				</div>
				<div class="col-lg-4  col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Newsletter</h6>
						<p>Stay update with our latest</p>
						<div class="" id="mc_embed_signup">

							<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
							 method="get" class="form-inline">

								<div class="d-flex flex-row">

									<input class="form-control" name="EMAIL" placeholder="Enter Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email '"
									 required="" type="email">


									<button class="click-btn btn btn-default"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></button>
									<div style="position: absolute; left: -5000px;">
										<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
									</div>

									<!-- <div class="col-lg-4 col-md-4">
												<button class="bb-btn btn"><span class="lnr lnr-arrow-right"></span></button>
											</div>  -->
								</div>
								<div class="info"></div>
							</form>
						</div>
					</div>
				</div>
				<div class="col-lg-3  col-md-6 col-sm-6">
					<div class="single-footer-widget mail-chimp">
						<h6 class="mb-20">Instragram Feed</h6>
						<ul class="instafeed d-flex flex-wrap">
							<li><img src="{{asset('img/i1.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/i2.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/i3.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/i4.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/i5.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/i6.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/i7.jpg')}}" alt=""></li>
							<li><img src="{{asset('img/i8.jpg')}}" alt=""></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-2 col-md-6 col-sm-6">
					<div class="single-footer-widget">
						<h6>Follow Us</h6>
						<p>Let us be social</p>
						<div class="footer-social d-flex align-items-center">
							<a href="#"><i class="fa fa-facebook"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
							<a href="#"><i class="fa fa-dribbble"></i></a>
							<a href="#"><i class="fa fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom d-flex justify-content-center align-items-center flex-wrap">
				<p class="footer-text m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
				<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
				</p>
			</div>
		</div>
	</footer>
	<!-- End footer Area -->
	<script src="{{asset('js/vendor/jquery-2.2.4.min.js')}}"></script>
	<script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js')}}" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
	 crossorigin="anonymous"></script>
	<script src="{{asset('js/vendor/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
	<script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
	<script src="{{asset('js/jquery.sticky.js')}}"></script>
    <script src="{{asset('js/countdown.js')}}"></script>
	<script src="{{asset('js/nouislider.min.js')}}"></script>
	<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{asset('js/owl.carousel.min.js')}}"></script>
	<!--gmaps Js-->
	<!-- <script src="{{asset('https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE')}}"></script>
	<script src="{{asset('js/gmaps.min.js')}}"></script> -->
	<script src="{{asset('js/main.js')}}"></script>
	<script>
		$.ajaxSetup({
			beforeSend: function(xhr, type) {
				if (!type.crossDomain) {
					xhr.setRequestHeader('X-CSRF-Token', $('meta[name="csrf-token"]').attr('content'));
				}
			},	
		});
	$(document).ready(function(){
		$('.pixel-radio').click(function() {
			var brand = $(this).attr('id');
			var dataString = "brand="+brand; 
			$.ajax({
        	    type:'POST',
	            url:'/ajax',
    	        data: dataString,
        	    success:function(product){
					$('.lattest-product-area').html(product); 
        	    }
            });
		});
	});
    </script>`
	<script>
	$(".test").change(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
		var numb = $(this).val(); 
		var dataString = "numb="+numb; 
		$.ajax({ 
			type: "POST",
			url: "/ajaxShow", 
			data: dataString, 
			success: function(result){ 
				$('.lattest-product-area').html(result); 
			}
		});
	});
	</script>
	<script>
		$(".test123").click(function(){ /* WHEN YOU CHANGE AND SELECT FROM THE SELECT FIELD */
			var numb = $(this).attr('data-product');
			var dataString = "numb="+numb; 
			$.ajax({ 
				type: "POST",
				url: "/ajaxCart", 
				data: dataString, 
				success: function(result){ 
			//		if(result == 'reload') window.location.href('/login');
				}
			});
		});
	</script>

</body>
</html>
