<!DOCTYPE html>
<html lang="en">
  <head>
    <title>GBSID - Global Business Seller Identification</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/animate.css">
    
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/magnific-popup.css">

    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/aos.css">

    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/ionicons.min.css">

    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/flaticon.css">
    <link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/icomoon.css">
	<link rel="stylesheet" href="<?php echo base_url()."assets/";?>landing/css/style.css">
	
	<style>
		@media (max-width:500px) {
			.owl-carousel .owl-item {
				text-align:center;
			}
			.owl-carousel .item {
				float: none;
				display: inline-block;
			}
		}
	</style>
  </head>
  <body>
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-4	">
	      <a class="navbar-brand" href="/">GBSID - Global Business Seller Identification</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="<?php echo site_url('home');?>" class="nav-link">Home</a></li>
			  <li class="nav-item"><a href="<?php echo site_url('user/login');?>" class="nav-link">Login</a></li>
			  <li class="nav-item"><a href="<?php echo site_url('user/register');?>" class="nav-link">Register</a></li>
	          <li class="nav-item"><a href="<?php echo site_url('test');?>" class="nav-link">Test Page (Ecommerce Sending Data)</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <div class="hero-wrap img" style="background-image: url('<?php echo base_url()."assets/";?>landing/images/bg_1.jpg');">
      <div class="overlay"></div>
      <div class="container">
      	<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-center">
	        <div class="col-md-10 d-flex align-items-center ftco-animate">
	        	<div class="text text-center pt-5 mt-md-5">
	        		<p class="mb-4">Powered by high-end Encryption Blockchain Technology</p>
	            <h1 class="mb-5">Authenticity Verification of Business-Seller Across the World</h1>
							<div class="ftco-counter ftco-no-pt ftco-no-pb">
			        	<div class="row">
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-worldwide"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="46">0</strong>
					                <span>Countries</span>
				                </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-visitor"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="450">0</strong>
					                <span>Business</span>
					              </div>
				              </div>
				            </div>
				          </div>
				          <div class="col-md-4 d-flex justify-content-center counter-wrap ftco-animate">
				            <div class="block-18 text-center">
				              <div class="text d-flex">
				              	<div class="icon mr-2">
				              		<span class="flaticon-resume"></span>
				              	</div>
				              	<div class="desc text-left">
					                <strong class="number" data-number="80000">0</strong>
					                <span>Sellers</span>
					              </div>
				              </div>
				            </div>
				          </div>
				        </div>
			        </div>
							<div class="ftco-search my-md-5">
								<div class="row">
			            <div class="col-md-12 nav-link-wrap">
				            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
				              <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Authenticate Business</a>

				              <a class="nav-link" id="v-pills-2-tab" data-toggle="pill" href="#v-pills-2" role="tab" aria-controls="v-pills-2" aria-selected="false">Authenticate Seller</a>

				            </div>
				          </div>
				          <div class="col-md-12 tab-wrap">
				            <div class="tab-content p-4" id="v-pills-tabContent">
				              <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
				              	<form method="POST" action="<?php echo site_url('authenticate');?>" class="search-job">
				              		<div class="row no-gutters">
				              			<div class="col-md-10 mr-md-10">
				              				<div class="form-group">
					              				<div class="form-field">
					              					<div class="icon"><span class="icon-briefcase"></span></div>
									                <input type="text" name ="business" class="form-control" placeholder="eg. Lazada">
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
								                	<button type="submit" class="form-control btn btn-primary">Search</button>
									              </div>
								              </div>
				              			</div>
				              		</div>
				              	</form>
				              </div>

				              <div class="tab-pane fade" id="v-pills-2" role="tabpanel" aria-labelledby="v-pills-performance-tab">
				              	<form method="post" action="<?php echo site_url('authenticate');?>" class="search-job">
				              		<div class="row">
										<div class="col-md-10 mr-md-10">
				              				<div class="form-group">
					              				<div class="form-field">
					              					<div class="icon"><span class="icon-user"></span></div>
									                <input type="text" class="form-control" name="seller" placeholder="eg. Juan Dela Cruz">
									              </div>
								              </div>
				              			</div>
				              			<div class="col-md">
				              				<div class="form-group">
				              					<div class="form-field">
									                <button type="submit" class="form-control btn btn-primary">Search</button>
									              </div>
								              </div>
				              			</div>
				              		</div>
				              	</form>
				              </div>
				            </div>
				          </div>
				        </div>
			        </div>
	          </div>
	        </div>
	    	</div>
      </div>
    </div>

    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12">
    				<div class="category-wrap">
    					<div class="row no-gutters">
    						<div class="col-md-2">
    							<div class="top-category text-center no-border-left">
    								<h3><a href="#">Website &amp; Software</a></h3>
    								<span class="icon flaticon-contact"></span>
    								<p><span class="number">143</span> <span>Authenticated</span></p>
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center active">
    								<h3><a href="#">Education &amp; Training</a></h3>
    								<span class="icon flaticon-mortarboard"></span>
    								<p><span class="number">143</span> <span>Authenticated</span></p>
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Graphic &amp; UI/UX Design</a></h3>
    								<span class="icon flaticon-idea"></span>
    								<p><span class="number">143</span> <span>Authenticated</span></p>
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Accounting &amp; Finance</a></h3>
    								<span class="icon flaticon-accounting"></span>
    								<p><span class="number">143</span> <span>Authenticated</span></p>
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Restaurant &amp; Food</a></h3>
    								<span class="icon flaticon-dish"></span>
    								<p><span class="number">143</span> <span>Authenticated</span></p>
    							</div>
    						</div>
    						<div class="col-md-2">
    							<div class="top-category text-center">
    								<h3><a href="#">Health &amp; Hospital</a></h3>
    								<span class="icon flaticon-stethoscope"></span>
    								<p><span class="number">143</span> <span>Authenticated</span></p>
    							</div>
    						</div>
    					</div>
    				</div>
    			</div>
    		</div>
    	</div>
    </section>
    <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-4">
          <div class="col-md-7 text-center heading-section ftco-animate">
          	<span class="subheading">Testimonial</span>
            <h2 class="mb-4">Happy Clients</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url('<?php echo base_url()."assets/";?>landing/images/person_1.jpg');"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url('<?php echo base_url()."assets/";?>landing/images/person_2.jpg');"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url('<?php echo base_url()."assets/";?>landing/images/person_3.jpg');"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url('<?php echo base_url()."assets/";?>landing/images/person_1.jpg');"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div class="text">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <div class="d-flex align-items-center">
                    	<div class="user-img" style="background-image: url('<?php echo base_url()."assets/";?>landing/images/person_2.jpg');"></div>
                    	<div class="pl-3">
		                    <p class="name">Roger Scott</p>
		                    <span class="position">Marketing Manager</span>
		                  </div>
	                  </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section ftco-candidates bg-primary">
    	<div class="container">
    		<div class="row justify-content-center pb-3">
          <div class="col-md-10 heading-section heading-section-white text-center ftco-animate">
            <h2 class="mb-4">The Founders</h2>
          </div>
        </div>
    	</div>
    	<div class="container" >
        <div class="row">
        	<div class="col-md-12 ftco-animate">
        		<div class="carousel-candidates owl-carousel">
        			<div class="item">
	        			<a href="#" class="team text-center owl-centered" >
		        			<div class="img" style="background-image: url('<?php echo base_url()."assets/";?>landing/images/rufo.jpg');"></div>
		        			<h2>Rufo Marasigan Jr</h2>
		        			<span class="position">Xcellerator Expert</span>
		        		</a>
					</div>
					<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url('<?php echo base_url()."assets/";?>landing/images/ramon.jpg');"></div>
		        			<h2>Ramon Sampang</h2>
		        			<span class="position">Xcellerator Expert</span>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url('<?php echo base_url()."assets/";?>landing/images/mathew.jpg');"></div>
		        			<h2>Mathew Monteverde</h2>
		        			<span class="position">Xcellerator Expert</span>
		        		</a>
	        		</div>
	        		<div class="item">
	        			<a href="#" class="team text-center">
		        			<div class="img" style="background-image: url('<?php echo base_url()."assets/";?>landing/images/justin.jpg');"></div>
		        			<h2>Justing Ryo</h2>
		        			<span class="position">Xcellerator Expert</span>
		        		</a>
					</div>
					<div class="item">
							<a href="#" class="team text-center">
								<div class="img" style="background-image: url('<?php echo base_url()."assets/";?>landing/images/ubx.jpg');"></div>
								<h2>Unionbank</h2>
								<span class="position">UB Xcellerator</span>
							</a>
						</div>
				</div>
        		</div>
        	</div>
        </div>
	</section>
	
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">

          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Account</h2>
              <ul class="list-unstyled">
                <li><a href="/login" class="pb-1 d-block">Sign In</a></li>
                <li><a href="/register" class="pb-1 d-block">Create Account</a></li>
                <li><a href="/faq" class="pb-1 d-block">FAQ</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Meralco Avenue corner Onyx & Sapphire Streets, Ortigas Center, Pasig, Philippines</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">(02) 8888-123456</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@gbsid.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <script src="<?php echo base_url()."assets/";?>landing/js/jquery.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/popper.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/bootstrap.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/jquery.easing.1.3.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/jquery.waypoints.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/jquery.stellar.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/aos.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/jquery.animateNumber.min.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/google-map.js"></script>
  <script src="<?php echo base_url()."assets/";?>landing/js/main.js"></script>
    
  </body>
</html>