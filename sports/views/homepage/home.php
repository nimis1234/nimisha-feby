
<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
    	<!-- meta character set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Blue One Page HTML Template</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- CSS
		================================================== -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700' rel='stylesheet' type='text/css'>
		
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="<?=base_url()?>Assets/build/css/font-awesome.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?=base_url()?>Assets/build/css/jquery.fancybox.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?=base_url()?>Assets/build/css/bootstrap.min.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?=base_url()?>Assets/build/css/owl.carousel.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?=base_url()?>Assets/build/css/slit-slider.css">
		<!-- bootstrap.min -->
        <link rel="stylesheet" href="<?=base_url()?>Assets/build/css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="<?=base_url()?>Assets/build/css/main.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="<?=base_url()?>Assets/build/js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">

		<!-- preloader -->
		<div id="preloader">
            <div class="loder-box">
            	<div class="battery"></div>
            </div>
		</div>
		<!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-inverse navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
                    </button>
					<!-- /responsive nav button -->
					
					<!-- logo -->
					<h1 class="navbar-brand">
						<a href="#body">Blue</a>
					</h1>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li><a href="#body">Home</a></li>
                        <li><a href="#service">Brands</a></li>
                        <li><a href="#portfolio">Products</a></li>
                        <li><a href="#testimonials">Testimonial</a></li>
                      <!--   <li><a href="#price">price</a></li> -->
                        <li><a href="#social">About us</a></li>
                        <li><a href="#contact">Contact</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		
		<main class="site-content" role="main">
		
        <!--
        Home Slider
        ==================================== -->
		
		<section id="home-slider">
            <div id="slider" class="sl-slider-wrapper">

				<div class="sl-slider">
				
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="-25" data-slice2-rotation="-25" data-slice1-scale="2" data-slice2-scale="2">

						<div class="bg-img bg-img-1"></div>

						<div class="slide-caption">
                            <div class="caption-content">
                                <h2 class="animated fadeInDown">BLUE Onepage HTML5 Template</h2>
                                <span class="animated fadeInDown">Clean and Professional one page Template</span>
                                <a href="#" class="btn btn-blue btn-effect">Join US</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="vertical" data-slice1-rotation="10" data-slice2-rotation="-15" data-slice1-scale="1.5" data-slice2-scale="1.5">
					
						<div class="bg-img bg-img-2"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>BLUE Onepage HTML5 Template</h2>
                                <span>Clean and Professional one page Template</span>
                                <a href="#" class="btn btn-blue btn-effect">Join US</a>
                            </div>
                        </div>
						
					</div>
					
					<div class="sl-slide" data-orientation="horizontal" data-slice1-rotation="3" data-slice2-rotation="3" data-slice1-scale="2" data-slice2-scale="1">
						
						<div class="bg-img bg-img-3"></div>
						<div class="slide-caption">
                            <div class="caption-content">
                                <h2>BLUE Onepage HTML5 Template</h2>
                                <span>Clean and Professional one page Template</span>
                                <a href="#" class="btn btn-blue btn-effect">Join US</a>
                            </div>
                        </div>

					</div>

				</div><!-- /sl-slider -->

                <!-- 
                <nav id="nav-arrows" class="nav-arrows">
                    <span class="nav-arrow-prev">Previous</span>
                    <span class="nav-arrow-next">Next</span>
                </nav>
                -->
                
                <nav id="nav-arrows" class="nav-arrows hidden-xs hidden-sm visible-md visible-lg">
                    <a href="javascript:;" class="sl-prev">
                        <i class="fa fa-angle-left fa-3x"></i>
                    </a>
                    <a href="javascript:;" class="sl-next">
                        <i class="fa fa-angle-right fa-3x"></i>
                    </a>
                </nav>
                

				<nav id="nav-dots" class="nav-dots visible-xs visible-sm hidden-md hidden-lg">
					<span class="nav-dot-current"></span>
					<span></span>
					<span></span>
				</nav>

			</div><!-- /slider-wrapper -->
		</section>
			
			
		<!-- Service section -->
		<section id="service">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2 class="wow animated bounceInLeft">Brands</h2>
						<!--<p class="wow animated bounceInRight">The Key Features of our Job</p>-->
					</div>
					<?php foreach ($brands as $key => $value) { ?>
					
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn">
						<div class="service-item">
							<div class="brands">
								<img src="http://localhost/Project/Assets/images/brand/<?=$value['brand_img']?>" alt="image" height="250" height="250">
							</div>
							<h3><?=$value['brandname']?></h3>
							<p><?=$value['brand_des']?> </p>
						</div>
					</div>
				<?php } ?>
					<!-- <div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.3s">
						<div class="service-item">
							<div class="brands">
								<img src="http://localhost/Project/Assets/img/slider/nike.png" alt="image" height="250" height="250">
							</div>
							<h3>Nike</h3>
							<p>Nike, Inc. (official, US /?na?ki/; also, non-US /?na?k/)[note 1] is an American multinational corporation that is engaged in the design, development, manufacturing, and worldwide marketing and sales of footwear, apparel, equipment, accessories, and services.  </p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.6s">
						<div class="service-item">
							<div class="brands">
								<img src="http://localhost/Project/Assets/img/slider/puma.png" alt="image" height="250" height="250">
							</div>
							<h3>Puma</h3>
							<p>PUMA SE, branded as PUMA, is a German multinational company that designs and manufactures athletic and casual footwear, apparel and accessories, headquartered </p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 text-center wow animated zoomIn" data-wow-delay="0.9s">
						<div class="service-item">
						<div class="brands">
								<img src="http://localhost/Project/Assets/img/slider/cosco.png" alt="image" height="250" height="250">
							</div>
							
							<h3>Cosco</h3>
							<p>well as a number of well-known domestic logistic enterprises including COSCO, CSCL, SINOTRANS, CRE, Transfar Group, South Logistic Group, YCH, and STO </p>							
						</div>
					</div> -->
					
				</div>
			</div>
		</section>
		<!-- end Service section -->
		
		<!-- portfolio section -->
		<section id="portfolio">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center wow animated fadeInDown">
						<h2>FEATURED PRODUCTS</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
					</div>
					
					
					
					<ul class="project-wrapper wow animated fadeInUp">
					<?php foreach ($products as $key2 => $value2) { ?>
						<li class="portfolio-item">
							<img src="http://localhost/Project/Assets/images/product/<?=$value2['product_img']?>" height="374.39" width="284.97" class="img-responsive" alt="">
							<figcaption class="mask">
								<h3><?=$value2['productname']?></h3>
								<p><?=$value2['pro_description']?> </p>
							</figcaption>
							<ul class="external">
								<li><a class="fancybox" title="Araund The world" data-fancybox-group="works" href="http://localhost/Project/Assets/images/product/<?=$value2['product_img']?>"><i class="fa fa-search"></i></a></li>
								<li><a href=""><i class="fa fa-link"></i></a></li>
							</ul>
						</li>

					<?php } ?>
					</ul>	
					
				</div>
			</div>
		</section>
		<!-- end portfolio section -->
		
		<!-- Testimonial section -->
		<section id="testimonials" class="parallax">
			<div class="overlay">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center white wow animated fadeInDown">
							<h2>What people say</h2>
						</div>
						
						<div id="testimonial" class=" wow animated fadeInUp">
							<div class="testimonial-item text-center">
								<img src="http://localhost/Project/Assets/img/member-1.jpg" alt="Our Clients">
								<div class="clearfix">
									<span>Katty Flower</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</div>
							</div>
							<div class="testimonial-item text-center">
								<img src="http://localhost/Project/Assets/img/author.jpg" alt="Our Clients">
								<div class="clearfix">
									<span>Steve Jobs</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</div>
							</div>
							<div class="testimonial-item text-center">
								<img src="http://localhost/Project/Assets/img/img.jpg" alt="Our Clients">
								<div class="clearfix">
									<span>John Doe</span>
									<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								</div>
							</div>
						</div>
					
					</div>
				</div>
			</div>
		</section>
		<!-- end Testimonial section -->
		

		<!--start link section  -->
		 <section id="downsection" class="">
			<div class="link">
				<div class="container">
				  <div class="sec-title text-center red wow animated fadeInDown">
							<h2>Down Load our app today</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
						</div>
					<div class="row">
					  <div class="col-lg-6 col-md-6 col-xs-6">
					     <img src="http://localhost/Project/Assets/img/android.png" alt="image" height="150" width="500">
					  </div>
					  <div class="col-lg-6 col-md-6 col-xs-6">
						 <img src="http://localhost/Project/Assets/img/appstore.png" alt="image" height="150" width="500">
					  </div>
					  </div>
				  
				</div>
			</div>
		</section> 
		<!--end link section  -->
		
		<!-- Social section -->
		<section id="social" class="parallax">
			<div class="overlay">
				<div class="container">
					<div class="row">
					
						<div class="sec-title text-center white wow animated fadeInDown">
							<h2>ABOUT US</h2>
		<?php  foreach ($about as $key3 => $value3) { ?>
					
							<p><?=$value3['aboutus']?></p>
                    <?php  } ?>
						</div>
						
						<ul class="social-button">
							<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-2x"></i></a></li>
							<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-2x"></i></a></li>
							<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-dribbble fa-2x"></i></a></li>							
						</ul>
						
					</div>
				</div>
			</div>
		</section>
		<!-- end Social section -->
		
		<!-- Contact section -->
		<section id="contact" >
			<div class="container">
				<div class="row">
					
					<div class="sec-title text-center wow animated fadeInDown">
						<h2>Contact</h2>
						<p>Leave a Message</p>
					</div>
					
					
					<div class="col-md-7 contact-form wow animated fadeInLeft">
						<form action="#" method="post">
							<div class="input-field">
								<input type="text" name="name" class="form-control" placeholder="Your Name...">
							</div>
							<div class="input-field">
								<input type="email" name="email" class="form-control" placeholder="Your Email...">
							</div>
							<div class="input-field">
								<input type="text" name="subject" class="form-control" placeholder="Subject...">
							</div>
							<div class="input-field">
								<textarea name="message" class="form-control" placeholder="Messages..."></textarea>
							</div>
					       	<button type="submit" id="submit" class="btn btn-blue btn-effect">Send</button>
						</form>
					</div>
					
					<div class="col-md-5 wow animated fadeInRight">
						<address class="contact-details">
							<h3>Contact Us</h3>						
							<p><i class="fa fa-pencil"></i>Vankrath Towers,<span>NH Bypass Junction,</span> <span>Palarivattom,Edapally P.O </span><span>Kochi</span></p><br>
							<p><i class="fa fa-phone"></i>Phone: 91 4842341420/19</p>
							<p><i class="fa fa-envelope"></i>website@yourname.com</p>
						</address>
					</div>
		
				</div>
			</div>
		</section>
		<!-- end Contact section -->
		
		<section id="google-map">
			<div id="map-canvas" class="wow animated fadeInUp"></div>
		</section>
		
		</main>
		
		<footer id="footer">
			<div class="container">
				<div class="row text-center">
					<div class="footer-content">
						<div class="wow animated fadeInDown">
							<p>newsletter signup</p>
							<p>Get Cool Stuff! We hate spam!</p>
						</div>
						<form action="#" method="post" class="subscribe-form wow animated fadeInUp">
							<div class="input-field">
								<input type="email" class="subscribe form-control" placeholder="Enter Your Email...">
								<button type="submit" class="submit-icon">
									<i class="fa fa-paper-plane fa-lg"></i>
								</button>
							</div>
						</form>
						<div class="footer-social">
							<ul>
								<li class="wow animated zoomIn"><a href="#"><i class="fa fa-thumbs-up fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.3s"><a href="#"><i class="fa fa-twitter fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.6s"><a href="#"><i class="fa fa-skype fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="0.9s"><a href="#"><i class="fa fa-dribbble fa-3x"></i></a></li>
								<li class="wow animated zoomIn" data-wow-delay="1.2s"><a href="#"><i class="fa fa-youtube fa-3x"></i></a></li>
							</ul>
						</div>
						
						<p>Copyright &copy; 2014-2015 Design and Developed By<a href="http://www.themefisher.com">Themefisher</a> </p>
					</div>
				</div>
			</div>
		</footer>
  <script>
    function getMobileOperatingSystem() {
    var userAgent = navigator.userAgent || navigator.vendor || window.opera;

     // Windows Phone must come first because its UA also contains "Android"
   if (/windows phone/i.test(userAgent)) {
      
      }  

    if (/android/i.test(userAgent)) {

          document.getElementById("downsection").innerHTML = '<li><a href="#" title="" class="badge-googleplay" data-aos="fade-up">Play Store</a></li>';
      }
    // iOS detection from: http://stackoverflow.com/a/9039885/177710
    if (/iPad|iPhone|iPod/.test(userAgent) && !window.MSStream) {
        document.getElementById("downsection").innerHTML = '<li><a href="#" title="" class="badge-appstore"  data-aos="fade-up">App Store</a></li>';
   
      }

   }
   </script>
		<!-- Essential jQuery Plugins
		================================================== -->
		<!-- Main jQuery -->

        <script src="<?=base_url()?>Assets/build/js/jquery-1.11.1.min.js"></script>
		<!-- Twitter Bootstrap -->
        <script src="<?=base_url()?>Assets/build/js/bootstrap.min.js"></script>
		<!-- Single Page Nav -->
        <script src="<?=base_url()?>Assets/build/js/jquery.singlePageNav.min.js"></script>
		<!-- jquery.fancybox.pack -->
        <script src="<?=base_url()?>Assets/build/js/jquery.fancybox.pack.js"></script>
		<!-- Google Map API -->
		<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
		<!-- Owl Carousel -->
        <script src="<?=base_url()?>Assets/build/js/owl.carousel.min.js"></script>
        <!-- jquery easing -->
        <script src="<?=base_url()?>Assets/build/js/jquery.easing.min.js"></script>
        <!-- Fullscreen slider -->
        <script src="<?=base_url()?>Assets/build/js/jquery.slitslider.js"></script>
        <script src="<?=base_url()?>Assets/build/js/jquery.ba-cond.min.js"></script>
		<!-- onscroll animation -->
        <script src="<?=base_url()?>Assets/build/js/wow.min.js"></script>
		<!-- Custom Functions -->
        <script src="<?=base_url()?>Assets/build/js/main.js"></script>
    </body>
</html>