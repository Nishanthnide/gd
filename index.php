<!DOCTYPE html>
<html>
<head>
	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Gear Doctor</title>
	<meta name="description" content="Gear Doctor">
	<meta name="author" content="Nishanth, Vardhini">
	<!-- Mobile Specific Metas
  ================================================== -->
	<?php include 'lander/assets/csslink.php'; ?>
    
</head>
<body class="homepages-5">
	<!-- Images Loader -->
	<div class="images-preloader">
	    <div id="preloader_1" class="rectangle-bounce">
	        <span></span>
	        <span></span>
	        <span></span>
	        <span></span>
	        <span></span>
	    </div>
	</div>
	<header class="header">
		<!-- Show Desktop Header -->
		<div class="show-desktop-header header-hp-1">
			<div class="top-header" id="home">
				<div class="container">
					<div class="top-header-inner">
						<span>Best services quality for customers.</span>
						<div class="header-socials">
							<span>Follow Us:</span>
							<a href="#"><i class="fab fa-facebook-f"></i></a>
							<a href="#"><i class="fab fa-whatsapp"></i></a>
							<a href="#"><i class="fab fa-twitter"></i></a>
							<a href="#"><i class="fab fa-behance"></i></a>
						</div>
					</div>
				</div>
			</div>
			<div id="js-navbar-fixed" class="menu-desktop">
				<div class="container menu-desktop-inner">
					<!-- Logo -->
					<div class="logo">
						<a href="index.php"><img src="lander/images/icons/logo-black.png" alt="logo"></a>
					</div>
					<!-- Main Menu -->
					<nav class="main-menu">
						<ul>
							<li class="menu-item">
								<a href="#home">HOME</a> 							
							</li>
                            <li class="menu-item">
							     <a  href="#about">ABOUT US</a>
                            </li>  
							<li class="menu-item">
								<a href="#services">SERVICES</a> 
							</li>
							<li class="menu-item">
								<a onclick="document.getElementById('modal-wrapper').style.display='block'">CONTACT US</a>
                                <div id="modal-wrapper" class="modal">
                                    <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                    <img src="lander/images/contactus.png" class="cont"  >
                                    
                                </div>
    
							</li>
							<li class="menu-item">
								<a href="login/index.php">LOGIN</a> 
							</li>
                            <li class="menu-item">
								<a href="customer/register/infinity.php">REGISTER</a> 
							</li>
						</ul>
					</nav>
					<div class="header-appointment">
						<a href="signup/quick.php" class="au-btn au-btn-green btn-small">Quick Book</a>
					</div>
				</div>
			</div>
		</div>
		<!-- Show Mobile Header -->
		<div class="show-mobile-header">
			<!-- Logo And Hamburger Button -->
			<div class="mobile-top-header">
				<div class="logo-mobile">
					<a href="index.php"><img src="lander/images/icons/logo-black.png" alt="logo"></a>
				</div>
				<button class="hamburger hamburger--spin hidden-tablet-landscape-up" id="toggle-icon">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
				</button>
			</div>
			<!-- Au Navbar Menu -->
			<div class="au-navbar-mobile navbar-mobile-1">
				<div class="au-navbar-menu">
					<ul>
						<li class="drop">							
							<a class="drop-link" href="#home">HOME</a>
						</li>                        
                        <li class="drop">
							<a class="drop-link" href="#about">ABOUT US</a>
                        </li>  
                        <li class="drop">
							<a class="drop-link" href="#services">SERVICES</a>
                        </li>            
						<li class="drop">							
							<a classonclick="document.getElementById('modal-wrapper').style.display='block'">CONTACT US</a>
                                <div id="modal-wrapper" class="modal">
                                    <span onclick="document.getElementById('modal-wrapper').style.display='none'" class="close" title="Close PopUp">&times;</span>
                                    <img src="lander/images/contactus.png" class="cont"  >
                                    
                                </div>
                                <script>
                                    var modal = document.getElementById('modal-wrapper');
                                        window.onclick = function(event) {
                                            if (event.target == modal) {
                                                modal.style.display = "none";
                                            }
                                        }
                                </script>
						</li>                        
						<li class="drop">							
							<a class="drop-link" href="#">LOGIN</a>	
						</li>
                        <li class="drop">
							<a class="drop-link" href="customer/register/infinity.php">REGISTER</a>
                        </li>
                        <li class="drop">
							<a class="drop-link" href="customer/register/infinity.php">QUICK BOOK</a>
                        </li>
					</ul>
				</div>				
			</div>
		</div>
	</header>
	<div class="page-content">

		<!-- Slider Revolution Section -->
		<section class="home-slider style-home-slider-hp-1">
			<div class="rev_slider_wrapper fullscreen-container" >
	        	<!-- the ID here will be used in the inline JavaScript below to initialize the slider -->
	       		<div id="rev_slider_1" class="rev_slider fullscreenbanner" data-version="5.4.5">
		            <ul> 
		                <li data-transition="boxslide">
		                    <img src="lander/images/bg3.png" alt="slide-1" class="rev-slidebg">
                        </li>
		                <li data-transition="boxslide">
		                    <img src="lander/images/bg2.jpg" alt="slide-2" class="rev-slidebg">
		                </li>
						<li data-transition="boxslide">
		                    <img src="lander/images/bg1.jpg" alt="slide-2" class="rev-slidebg">
		                </li>
		            </ul>
    			</div>
			</div>
            <div id="about">
        
        </div>

		</section>  
		<!-- End Slider Revolution Section -->
  
		<!-- About Company -->
		<div class="about-cpy welcome-section section-box">
			<div class="container">
				<h2 class="special-heading">ABOUT COMPANY</h2>
				<div class="about-content">
					<div class="about-tab">
						<ul class="nav nav-pills" id="pills-tab" role="tablist">
						  	<li class="nav-item">
						    	<a class="nav-link active"  data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">WHY CHOOSE US</a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">OUR HISTORY</a>
						  	</li>
						  	<li class="nav-item">
						    	<a class="nav-link" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">OUR MISSION</a>
						  	</li>
						</ul>
					</div>
					<div class="tab-content " id="pills-tabContent">
					  	<div class="tab-pane fade show js-waypoint active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
					  		<div class="row">
					  			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
					  				<div class="welcome-content">
										<h3>Our Team Skills</h3>
										<p>A highly skilled team who are always available to serve you at any place and at any time.</p>
										<div class="progress-box progress-box-1 m-b-25">
					                        <p class="progress-label">Services Quality</p>
					                        <div class="au-progress au-progress-1">
							                    <div class="au-progress-bar" role="progressbar" data-transitiongoal="90">
							                        <span></span>
							                     </div>
							                </div>
							            </div>
					                    <div class="progress-box progress-box-1 m-b-25">
					                        <p class="progress-label">Support Quality</p>
					                        <div class="au-progress au-progress-1">
					                            <div class="au-progress-bar" role="progressbar" data-transitiongoal="95">
					                                <span></span>
					                            </div>
					                        </div>
					                    </div>
					                    <div class="progress-box progress-box-1">
					                        <p class="progress-label">Availability</p>
					                        <div class="au-progress au-progress-1">
					                            <div class="au-progress-bar" role="progressbar" data-transitiongoal="98">
					                                <span></span>
					                            </div>
					                        </div>
					                    </div>
									</div>
					  			</div>
					  			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
					  				<div class="about-image">
					  					<img src="./lander/images/team.jpg" alt="images" width="350px" height="350px">
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					  	<div class="tab-pane fade" id="pills-profile" role="tabpanel" >
					  		<div class="row">
					  			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
					  				<div class="history">
					  					<h3>Our Company History</h3>
					  					<p>In the existing system, if there is a sudden break down of the vehicle, the customer will
have to search for a nearby mechanic shop and will have to personally leave the
vehicle. This causes lot of inconvenience to the customer as it might be difficult to take
the vehicle if there is a major breakdown. <br>This problem made us to think in an innovative way to solve customers problem. And on 05 October 2019 the system is proposed which allows the customer to book a service at his requirement thus
saving time and making it very convenient for the customer. Gear Doctor ensures that the nearby
mechanic to a customer is made available to serve the needs at ease.</p>
					  					
					  				</div>
					  			</div>
					  			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
					  				<div class="about-image">
					  					<img src="./lander/images/ab1.png" alt="images" width="350px" height="350px">
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					  	<div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
					  		<div class="row">
					  			<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-12">
					  				<div class="mission">
					  					<h3>Our Mission</h3>
					  					<p>In present day scenario, we find a lot of people pushing their vehicles all the way to
a nearby mechanic shop or any service center. If the vehicle has had a major breakdown it is very difficult for the person to get it fixed as immediate solution is not available to this problem.<br>
Gear Doctor is a here to resolve this problem.<br>
                                            <b>Our mission</b> is to provide service to the customer so that they can book for a service from their current location for a nearby mechanic available. This saves a lot of time for the customer and also facilitates quick service. Depending on the services provided the invoice is ggenrated and sent.</p>
					  				</div>
					  			</div>
					  			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-12">
					  				<div class="about-image">
					  					<img src="./lander/images/mission.jpg" alt="images" width="400px" height="400px">
					  				</div>
					  			</div>
					  		</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End About Company -->

		

		<!-- CTA Section -->
		<section class="cta-section cta-our-team cta-hp-5 section-box">
			<div class="container">
				<div class="cta-content">
					<div class="cta-text">
						<p id="services">ARE YOU READY?</p>
						<span>Let’s Repair it Now! Let’s Do It!</span>
					</div>
					<a href="clean-service.html" class="au-btn btn-small">Quick Book</a>
				</div>
			</div>
		</section>
		<!-- End CTA Section -->
<section  class="services-section section-box">
			<div class="container">
				<h2 class="special-heading">OUR SERVICES</h2>
				<div id="services-hp-1" class="owl-carousel owl-theme">
					<!-- Services-1 -->
					<div class="services-content">
						<div class="services-icon">
							<a href="clean-service.html"><img src="lander/images/icons/hp-1-services-1.png" alt="services-1"></a>
						</div>
						<div class="services-text">
							<span><a href="clean-service.html">Oil Filter</a></span>
							<p>Changing the oil filter will give the good maintaince to the vehicle and we will check with vehicle's oil filter and replace it with new and proper one.</p>
						</div>
					</div>
					<!-- Services-2 -->
					<div class="services-content">
						<div class="services-icon">
							<a href="repair-part-service.html"><img src="lander/images/icons/hp-1-services-2.png" alt="services-2"></a>
						</div>
						<div class="services-text">
							<span><a href="repair-part-service.html">Brake</a></span>
							<p>We will check the worness of the brake and also with the brake fluid and also with most important bleeding in brakes.</p>
						</div>
					</div>
					<!-- Services-3 -->
					<div class="services-content">
						<div class="services-icon">
							<a href="engine-repair-service.html"><img src="lander/images/icons/hp-1-services-3.png" alt="services-3"></a>
						</div>
						<div class="services-text">
							<span><a href="engine-repair-service.html">Engine Repair</a></span>
							<p>We will check for the oil leakages in the engine, flooding up of engine and also for the coolent in the engine.</p>
					
						</div>
					</div>
					<!-- Services-4 -->
					<div class="services-content">
						<div class="services-icon">
							<a href="painting-service.html"><img src="lander/images/icons/hp-1-services-4.png" alt="services-4"></a>
						</div>
						<div class="services-text">
							<span><a href="painting-service.html">Painting Services</a></span>
							<p> Your car’s paint needs to be protected in order to make it look all shiny and brand new every time. We are here to do that.</p>
						</div>
					</div>
					<!-- Services-5 -->
					<div class="services-content">
						<div class="services-icon">
							<a href="oil-change-service.html"><img src="lander/images/icons/hp-1-services-7.png" alt="services-5"></a>
						</div>
						<div class="services-text">
							<span><a href="oil-change-service.html">Engine Oil Change</a></span>
							<p>The engine oil, which is the lubricant that decreases the temperature of the engine, and reduces wear on moving parts. We will take care of chnaging up of new engine oil.</p>
						</div>
					</div>
					<!-- Services-6 -->
					<div class="services-content">
						<div class="services-icon">
							<a href="battery-car-service.html"><img src="lander/images/icons/hp-1-services-6.png" alt="services-6"></a>
						</div>
						<div class="services-text">
							<span><a href="battery-car-service.html">Car Battery Service</a></span>
							<p>We will check for the short circuited cells which occurs due to seperation between positive and negative plates and we will also check for power and replace of batteries.</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Car Type Section -->
       
		<section class="car-type-section car-type-hp-5 section-box">
			<div class="container">
				<h2>THE VEHICLES WE SUPPORT</h2>
				<p>We belive that we can achieve sucess only when we dont tell no.</p>
				<div id="car-type" class="owl-carousel owl-theme">
					<!-- Car 1 -->
					<div class="car-type">
						<img src="lander/images/icons/hp-2-car-1.png" alt="car-1">
					</div>
					<!-- Car 2 -->
					<div class="car-type">
						<img src="lander/images/icons/hp-2-car-6.png" alt="car-2">
					</div>
					<!-- Car 3 -->
					<div class="car-type">
						<img src="lander/images/icons/hp-2-car-3.png" alt="car-3">
					</div>
					<!-- Car 4 -->
					<div class="car-type">
						<img src="lander/images/icons/hp-2-car-4.png" alt="car-4">
					</div>
					<!-- Car 5 -->
					<div class="car-type">
						<img src="lander/images/icons/hp-2-car-5.png" alt="car-5">
					</div>
					<!-- Car 6 -->
					<div class="car-type">
						<img src="lander/images/icons/hp-2-car-2.png" alt="car-6">
					</div>
					<!-- Car 7 -->
					<div class="car-type">
						<img src="lander/images/icons/hp-2-car-7.png" alt="car-7">
					</div>
				</div>
			</div>
		</section>
		<!-- End Car Type Section -->
	</div>
    
    <!--  Footer   -->
    <?php include'lander/assets/footer.php'; ?>
    <!-- End of footer -->
	

	<!-- Back To Top Button -->
	<a href="#" id="back-to-top">
		<i class="la la-arrow-up"></i>
	</a>
	<!-- End Back To Top Button -->

	<!--  JS  -->
  <script>
$(document).ready(function() {
  
  var scrollLink = $('.scroll');
  
  // Smooth scrolling
  scrollLink.click(function(e) {
    e.preventDefault();
    $('body,html').animate({
      scrollTop: $(this.hash).offset().top
    }, 1000 );
  });
  
  // Active link switching
  $(window).scroll(function() {
    var scrollbarLocation = $(this).scrollTop();
    
    scrollLink.each(function() {
      
      var sectionOffset = $(this.hash).offset().top - 20;
      
      if ( sectionOffset <= scrollbarLocation ) {
        $(this).parent().addClass('active');
        $(this).parent().siblings().removeClass('active');
      }
    })
    
  })
  
})
    
</script>
    
	<!-- Jquery -->
    <script src="lander/js/smoothscroll.min.js"></script>
    <script src="lander/js/jquery-scrolltofixed.min.js"></script>    
    <script src="lander/js/layerslider.transitions.js"></script>
    <script src="lander/js/layerslider.kreaturamedia.jquery.js"></script>
    <script src="lander/vendor/jquery/dist/jquery.min.js"></script>
	<!-- Bootrap -->
	<script src="lander/vendor/bootrap/js/bootstrap.min.js"></script>
	<script src="lander/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
	<!-- Owl Carousel 2 -->
  	<script src="lander/vendor/owl/js/owl.carousel.min.js"></script>
  	<script src="lander/vendor/owl/js/OwlCarousel2Thumbs.min.js"></script>
  	<!-- Slider Revolution core JavaScript files -->
    <script src="lander/vendor/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="lander/vendor/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="lander/vendor/matchHeight/dist/jquery.matchHeight-min.js"></script>
    <!-- Isotope Library-->
	<script type="text/javascript" src="lander/js/isotope.pkgd.min.js"></script>
	<script src="lander/js/imagesloaded.pkgd.min.js"></script>
	<!-- Masonry Library -->
	<script type="text/javascript" src="lander/js/jquery.masonry.min.js"></script>
	<script type="text/javascript" src="lander/js/masonry.pkgd.min.js"></script>
	<!-- noUiSlider Library -->
	<script type="text/javascript" src="lander/vendor/nouislider/js/nouislider.js"></script>
	<!-- fancybox-master Library -->
	<script type="text/javascript" src="lander/vendor/fancybox-master/js/jquery.fancybox.min.js"></script>
	<!-- Google Map -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAEmXgQ65zpsjsEAfNPP9mBAz-5zjnIZBw"></script>
	<script src="lander/js/theme-map.js"></script>
	<script  type="text/javascript" src="lander/vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script  type="text/javascript" src="lander/vendor/jquery.counterup/jquery.counterup.min.js"></script>
	<!-- Form -->
    <script src="lander/vendor/sweetalert/sweetalert.min.js"></script>
	<script src="lander/js/config-contact.js"></script>
	<!-- Main Js -->
	<script src="lander/js/custom.js"></script>
</body>
</html>