<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<!--[if lt IE 9 ]><html class="no-js oldie" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>

    <!--- basic page needs
   ================================================== -->
    <meta charset="utf-8">
    <title>Dazzle</title>
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- mobile specific metas
   ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS
   ================================================== -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/gallery.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/base.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/vendor.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/dist/css/main.css">

    <!-- script
   ================================================== -->
    <script src="<?=base_url()?>assets/dist/js/modernizr.js"></script>
    <script src="<?=base_url()?>assets/dist/js/pace.min.js"></script>
    <script type="text/javascript">
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
  
    <!-- favicons
	================================================== -->
    <link rel="shortcut icon" href="<?=base_url()?>assets/dist/img/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?=base_url()?>assets/dist/img/favicon.ico" type="image/x-icon">

<style type="text/css">

 a:hover{
          text-decoration: none;
        }

</style>

</head>

<body id="top">

    <!-- header 
   ================================================== -->
   <header id="header" class="row">   

   		<div class="header-logo">
	        <a href="<?=base_url()?>">Dazzle</a>
	    </div>

	   	<nav id="header-nav-wrap">
			  <ul class="header-main-nav">

				  <li class="current">
            <a class="smoothscroll"  href="#home" title="home">Home</a>
          </li>

          <li>
            <a class="smoothscroll"  href="#about" title="about">About</a>
          </li>

				  <li>
            <a class="smoothscroll"  href="#services" title="services">Services</a>
          </li>

          <li>
            <a class="smoothscroll"  href="#giftvoucher" title="giftvoucher">Gift Vouchers</a>
          </li>

				  <li>
            <a class="smoothscroll"  href="#testimonials" title="testimonials">Testimonials</a>
          </li>

          <li>
            <a class="smoothscroll"  href="#gallery" title="gallery">Gallery</a>
          </li>

          <li>
            <a class="smoothscroll"  href="#contacts" title="contact">Contact Us</a>
          </li>

				  <li>
             <a class="smoothscroll"  href="#download" title="download">Download</a>
          </li>	

			</ul>

            <a href="#" title="sign-up" class="button button-primary cta">Sign Up</a>
		</nav>

		<a class="header-menu-toggle" href="#"><span>Menu</span></a>    	
   	
   </header> <!-- /header -->


   <!-- home
   ================================================== -->
   <section id="home" data-parallax="scroll" data-image-src="<?=base_url()?>assets/dist/img/hero-bg.jpg" data-natural-width=3000 data-natural-height=2000>

        <div class="overlay"></div>
        <div class="home-content">        

            <div class="row contents">                     
                <div class="home-content-left">

                    <h3 data-aos="fade-up">Welcome to Dazzle</h3>

                    <h1 data-aos="fade-up">
                        Relax your body calm you mind renew your spirit.
                    </h1>

                    <div class="buttons" data-aos="fade-up">
                        <a href="#download" class="smoothscroll button stroke">
                            <span class="fa fa-book" aria-hidden="true"></span>
                            Book Now
                        </a>
                        <a href="https://www.youtube.com/embed/QA7PYNIPnXM"  data-lity class="button stroke">
                            <span class="icon-play" aria-hidden="true"></span>
                            Watch Video
                        </a>
                    </div>                                         

                </div>
            </div>

        </div> <!-- end home-content -->

        <ul class="home-social-list">
            <li>
                <a href="#"><i class="fa fa-facebook-square"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-instagram"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-youtube-play"></i></a>
            </li>
        </ul>
        <!-- end home-social-list -->

        <div class="home-scrolldown">
            <a href="#about" class="scroll-icon smoothscroll">
                <span>Scroll Down</span>
                <i class="icon-arrow-right" aria-hidden="true"></i>
            </a>
        </div>

    </section> <!-- end home -->  


    <!-- about
    ================================================== -->
    <section id="about">

        <div class="row about-intro">

            <div class="col-four">
                <h1 class="intro-header" data-aos="fade-up">About Our Establishment</h1>
            </div>
            <div class="col-eight">
                <p class="lead" data-aos="fade-up">
                    Welcome to Dazzle Spa where our quaint atmosphere and experienced staff will give you the one on one attention you deserve to bring your mind body soul back to harmony with our relaxing spa services. Descend the grand spiral staircase to our tranquil lower level and your spirit transcends into a world of peaceful indulgence. Our beautiful spa features 11 elegant treatment rooms, where certified spa professionals use ancient healing arts to relax and refresh body and spirit. 
                </p>
            </div>                       
            
        </div>

        <div class="row about-features">

            <div class="features-list block-1-3 block-m-1-2 block-mob-full group">

                <div class="bgrid feature" data-aos="fade-up">	

                    <img src="https://img.grouponcdn.com/deal/d8Zj6SZPvv9uJjTjAwbq/KU-2048x1229/v1/c700x420.jpg">            
                      
                    <div class="service-content">	

                        <h3>Ayurvedic Treatements</h3>

                        <p>We unravel the magic of Ayurvedic touch helping you to prevent the Spiritual emptiness, Mental and Physical imbalances defined in Ayurveda as the major cause illness. An umbrella of traditional Ayurvedic health care coupled with various health rejuvenation programme. The Dazzle Spa, we offer a complete range of traditional Ayurvedic Spa services to restore the Physical and Mental harmony to your life.
                        </p>
                        
                    </div> 	         	 

                    </div> <!-- /bgrid -->

                    <div class="bgrid feature" data-aos="fade-up">	

                        <img src="http://diabeteslibrary.org/wp-content/uploads/2016/06/diabetes-skin-care.jpg" height=300px>                          

                    <div class="service-content">	
                        <h3>Expert Employees</h3>  

                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit.
                        </p>

                        
                    </div>	                          

                </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                    <img src="http://kefaloniaspa.gr/wp-content/uploads/2014/01/massage.jpg">            

                    <div class="service-content">
                        <h3>Massages</h3>

                        <p>With our spa and massage services you’re getting an expert’s rhythmic and relaxing touch. With an aromatic pillow for your eyes, a choice of aroma therapy oil, and a heated pillow for your neck, our massage offerings will restore balance to mind and body.
                        </p> 
                            
                    </div> 	            	               

                </div> <!-- /bgrid -->

                    <div class="bgrid feature" data-aos="fade-up">

                       <img src="http://thebeautyisland.co.uk/wp-content/uploads/2014/10/beauty_collage.jpg">

                    <div class="service-content">
                        <h3>Special Beauty Treatments</h3>

                        <p>Specialized beauty salons known as nail salons offer treatments such as manicures and pedicures for the nails. A manicure is a treatment for the hands, incorporating the fingernails and cuticles and often involving the application of nail polish, while a pedicure involves treatment of the feet, incorporating the toenails and the softening or removal of calluses.
                        </p> 
                        
                    </div>                

                    </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                   <img src="http://www.paradisemistspa.com/d/paradisemistspa/media/Spa/__thumbs_800_600_crop/Pedicure.jpg">	            

                    <div class="service-content">	
                        <h3>Kids Spa Services</h3>

                        <p>Let Melodie the Mermaid and her friends add a little sparkle to your child's day with a manicure, pedicure, and "Sea-Glitz" make-up. Glam it up with colorful hair extensions. Take a little beauty back to the mainland with our "Make Your Own" line of lotion and lip gloss.
                        </p>                            
                    </div>	               

                </div> <!-- /bgrid -->

                <div class="bgrid feature" data-aos="fade-up">

                    <img src="http://www.plog.com.sg/ocache/928/resources/themes/voucher+sample.jpg?t=1489634797">   	           

                    <div class="service-content">
                        <h3>Gift Vouchers</h3>

                        <p>Gift Card is all about high fashion products where you can find well-known national and international brand names under a single roof. Shopping here is a treat for anybody who is after trendy designer products that find a place of importance in personal wardrobe.
                        </p> 
                            
                    </div>	               

                </div> <!-- /bgrid -->

            </div> <!-- end features-list -->

        </div> <!-- end about-features -->

        <div class="row about-bottom-image">

           <img src="https://www.habitatbonaire.com/wp-content/uploads/2014/10/Spa.jpg" 
                srcset="https://www.habitatbonaire.com/wp-content/uploads/2014/10/Spa.jpg 600w, 
                        https://www.habitatbonaire.com/wp-content/uploads/2014/10/Spa.jpg 1200w, 
                       https://www.habitatbonaire.com/wp-content/uploads/2014/10/Spa.jpg 2800w" 
                sizes="(max-width: 2800px) 100vw, 2800px"
                alt="App Screenshots" data-aos="fade-up">

        </div>  <!-- end about-bottom-image -->       
        
    </section> <!-- end about -->  
   

    <!-- services
    ================================================== -->
    <section id="services">
      <div class="row about-intro">

           <div class="col-twelve">
                <h1 class="intro-header" data-aos="fade-up">Our Services</h1>
            </div>   
        </div>

        <div class="row about-features">

            <div class="features-list block-1-3 block-m-1-2 block-mob-full group">

               <?php
               foreach ($services as $value) 
                {
              ?>
              

                <div class="bgrid feature" data-aos="fade-up" style="border: 0.5px  solid #ffffff;">  

                    <img src="<?=base_url()?>assets/dist/img/services/<?=$value['service_image']?>" height="450" width="450">            

                        <h3><?=$value['service_name']?></h3>
                    <div class="service-content" style="margin-top:-28px;">   
                        <i style="font-size:20px;">Price:- </i>
                        <i class="fa fa-inr" style="font-size:20px;"     aria-hidden="true"><?=$value['service_price']?></i>
                        
                        </div> 
                        <br/>

                          <a class="btn btn-primary">Book Now </a> 
                          <br/>
                           <br/>
                    </div> <!-- /bgrid -->
                    <?php
                       }
                    ?>


            </div> <!-- end features-list -->

        </div> <!-- end about-features -->

        
    </section> <!-- end services -->


    <!-- giftvoucher
    ================================================== -->
    <section id="giftvoucher" style="background-color: #e6ffe6; min-width:600px;">
      <div class="row about-intro">

           <div class="col-twelve">
                <br/>
                <h1 class="intro-header" data-aos="fade-up">Gift Vochers</h1>
            </div>   
        </div>

        <div class="row about-features">

            <div class="features-list block-1-3 block-m-1-2 block-mob-full group">

              <?php
                 foreach ($vouchers as $value) {
              ?>

                <div class="bgrid feature" data-aos="fade-up" style="border: 0.5px  solid #ffffff;">  

                    <img src="<?=base_url()?>/assets/dist/img/vouchers/<?=$value['gift_image']?>" height="450" width="450">            

                        <h3><?=$value['gift_name']?></h3>
                    <div class="giftvoucher-content" style="margin-top:-28px;">   
                        <i style="font-size:20px;">Price:- </i>
                        <i class="fa fa-inr" style="font-size:20px;"     aria-hidden="true"><?=$value['gift_price']?></i>
                        
                        </div> 
                        <br/>

                          <a class="btn btn-primary">Book Now </a> 
                          <br/>
                           <br/>
                    </div> <!-- /bgrid -->
                  <?php
                     }
                  ?>
                    
            </div> <!-- end features-list -->

        </div> <!-- end about-features -->

        
    </section> <!-- end giftvoucher -->


    <!-- Testimonials Section
    ================================================== -->
    <section id="testimonials">

        <div class="row">
            <div class="col-twelve">
                <h1 class="intro-header" data-aos="fade-up">What They Say About Our Spa.</h1>
            </div>   		
        </div>   	

        <div class="row owl-wrap">

            <div id="testimonial-slider"  data-aos="fade-up">

                <div class="slides owl-carousel">

                    <div>
                        <p>
                        Thank you so much Thea and Jodie. The couples massage with aroma therapy for me and the Japanese facial for Amy were absolutely amazing. All tensions released and we still feel amazing days later.
                        </p> 

                        <div class="testimonial-author">
                                <img src="<?=base_url()?>assets/dist/img/avatars/user-02.jpg" alt="Author image">
                                <div class="author-info">
                                    Steve Eddison
                                    <span class="position">CEO, airso.</span>
                                </div>
                        </div>                 
                    </div> 

                    <div>
                        <p>
                          My family and I recently visited this spa during our vacation. I was in my third trimester, my mother is in her 50's and my aunt is 70. We all got the "heart space special" and loved it. The staff made a point to address each of our individual needs and we all left feeling very well taken care of.    
                        </p>

                        <div class="testimonial-author">
                                <img src="<?=base_url()?>assets/dist/img/avatars/user-03.jpg" alt="Author image">
                                <div class="author-info">
                                    John Doe
                                    <span>CEO, ABC Corp.</span>
                                </div>
                        </div>                                         
                    </div> 

                </div> <!-- end slides -->

            </div> <!-- end testimonial-slider -->         
            
        </div> <!-- end flex-container -->
        <hr style="border-top: solid 0.5px  #e6e6e6;" style="border-top: solid 0.5px #e6e6e6;margin-top: 142px;"/> 
        
    </section> <!-- end testimonials -->
  
    <!-- Gallery Section
    ================================================== -->
    <section id="gallery">
 
        <div class="row">
            <div class="col-twelve" style="margin-top:-165px;">
                <h1 class="intro-header" data-aos="fade-up">Gallery</h1>
            </div>      
        </div>   
        <div class="row owl-wrap">

            <!-- Thumbnails -->
              <div class="thumbnails">
                <?php
                  foreach ($images as $value)
                   {
                ?>
                <div>
                  <a href="<?=base_url()?>assets/dist/img/image_gallery/<?=$value['image_name']?>">
                    <img src="<?=base_url()?>/assets/dist/img/image_gallery/<?=$value['image_name']?>" alt="" />
                  </a>
                </div>
                <?php
                  }
                ?>
                
              </div>    

        </div> <!-- end flex-container -->
    </section> <!-- end testimonials -->


     <!-- Contacts Section
    ================================================== -->
    <section id="contacts" style="background-color:#ffffff;min-height:600px;">

        <div class="row">
            <div class="col-twelve">
                <h1 class="intro-header" data-aos="fade-up">Contact Us</h1>
            </div>          
        </div>      

        <div class="row owl-wrap">
            <div class="col-seven tab-full">
             <br/>

              <form method="post" action="Frond/add_contact">
                    
                  <div>
                        <label for="Name" style="text-align: left;">Your Full Name</label>
                        <input class="full-width" type="text" placeholder="Full Name" id="sampleInput" name="name" required>
                  </div>
                  <div>
                        <label for="email" style="text-align: left;">Your email</label>
                        <input class="full-width" type="email" placeholder="Email" id="sampleInput" name="email" required>
                  </div>
                  <div>
                        <label for="Name" style="text-align: left;">Your Phone No</label>
                        <input class="full-width" type="text" placeholder="Phone No" id="sampleInput" name="phoneno" required>
                  </div>
                   
                    <label for="exampleMessage" style="text-align: left;">Message</label>
                    <textarea class="full-width" placeholder="Your message" id="exampleMessage" name="message" required></textarea>
                   
                    <input class="button-primary" type="submit" value="Submit">

               </form>              

           </div>

           <div class="col-four tab-full">

            <h2 style="padding-left: 5px;">Address</h2> 
            <hr style="border-top: solid 0.5px  #e6e6e6;" /> 

            <br>
            <p style="padding-left: 5px;">
                    1600 Amphitheatre Parkway<br>
                    Mountain View, CA <br>
                    94043 US<br>                
                    </p>

                    <p style="padding-left: 5px;">
                    ceo@dazzlesite.com <br>
                    Phone: (+63) 555 1212 <br>
                    Fax: (+63) 555 0100    
                    </p>                    
                    
           
           </div>            
            
        </div> <!-- end flex-container -->

    </section> <!-- end contacts -->
    

    <!-- download
    ================================================== -->
    <section id="download">

        <div class="row">
            <div class="col-full">
                <h1 class="intro-header"  data-aos="fade-up">Download Our App Today!</h1>

                <p class="lead" data-aos="fade-up">
                    Escape from the buzz of everyday life and it's the time to pamper your body and skin to bring out the beauty! Treat yourself to some well-deserved relaxation treatments at Dazzle Spa. Download our apps today. Book our services and order Gift vouchers as your wish.
                </p>

                <ul class="download-badges" id="downsection">
                    <li><a href="#" title="" class="badge-appstore"  data-aos="fade-up">App Store</a></li>
                    <li><a href="#" title="" class="badge-googleplay" data-aos="fade-up">Play Store</a></li>
                </ul>

            </div>
        </div>

    </section> <!-- end download -->    


    <!-- footer
    ================================================== -->
    <footer>

        <div class="footer-main">
            <div class="row">  

                <div class="col-three md-1-3 tab-full footer-info">            

                    <div class="footer-logo"></div>

                    <p>
                    a good reminder. we live in a culture that values stress, like it makes us better or something.
                    A wonderful decal for my massage room.
 
                    </p>

                    <ul class="footer-social-list">
                        <li>
                            <a href="#"><i class="fa fa-facebook-square"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-behance"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </li>
                    </ul>
                    
                    
                </div> <!-- end footer-info -->

                <div class="col-three md-1-3 tab-1-2 mob-full footer-contact">

                    <h4>Contact</h4>

                    <p>
                    1600 Amphitheatre Parkway<br>
                    Mountain View, CA <br>
                    94043 US<br>		        
                    </p>

                    <p>
                    ceo@dazzlesite.com <br>
                    Phone: (+63) 555 1212 <br>
                    Fax: (+63) 555 0100    
                    </p>                    

                </div> <!-- end footer-contact -->  

                <div class="col-two md-1-3 tab-1-2 mob-full footer-site-links">

                    <h4>Site Links</h4>

                    <ul class="list-links">
                        <li><a href="#home">Home</a></li>
                        <li><a href="#about">About Us</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Terms</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>	      		
                            
                </div> <!-- end footer-site-links --> 

                <div class="col-four md-1-2 tab-full footer-subscribe">

                    <h4>Our Newsletter</h4>

                    <p>Latest Events and news about our spa.</p>

                    <div class="subscribe-form">
                
                        <form id="mc-form" class="group" novalidate="true">

                            <input type="email" value="" name="email" class="email" id="mc-email" placeholder="Email Address" required=""> 
                
                            <input type="submit" name="subscribe" value="Send">
                
                            <label for="mc-email" class="subscribe-message"></label>
                
                        </form>

                    </div>	      		
                            
                </div> <!-- end footer-subscribe -->         

            </div> <!-- /row -->
        </div> <!-- end footer-main -->


      <div class="footer-bottom">

      	<div class="row">

      		<div class="col-twelve">
	      		<div class="copyright">
		         	<span>© Copyright Dazzle 2017.</span> 
		         	<span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>		         	
		         </div>

		         <div id="go-top">
		            <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon-arrow-up"></i></a>
		         </div>         
	      	</div>

      	</div> <!-- end footer-bottom -->     	

      </div>

    </footer>

    <div id="preloader"> 
    	<div id="loader"></div>
    </div>  

    <!-- Java Script
    ================================================== -->
    <script src="<?=base_url()?>assets/dist/js/jquery-2.1.3.min.js"></script>
    <script src="<?=base_url()?>assets/dist/js/plugins.js"></script>
    <script src="<?=base_url()?>assets/dist/js/main.js"></script>
    
    

</body>

</html>