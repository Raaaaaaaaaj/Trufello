<?php include 'incl/config.php' ?>
<?php include 'incl/header.php' ?>
<?php include 'incl/nav.php' ?>
<style>
.contact-bg {
  background-image: url('https://images.pexels.com/photos/6078298/pexels-photo-6078298.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1'); /* Image URL yahan lagayein */
  background-size: cover;
  background-position: center;
  position: relative;
  height: 100%; /* Ya jitna height aapko chahiye */
}

.contact-bg::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background: rgba(255, 255, 255, 0.5); /* Iske saath background opacity control hoti hai */
  z-index: 1;
}

.contact-bg form {
  position: relative;
  z-index: 2; /* Form content ko image ke upar rakhne ke liye */
  padding: 20px;
  border-radius: 10px;
}
.card-header {
    padding: 25px !important;
}
@media(max-width:576px){
	.homeIcons{
		width: 50% !important;
	}
}
</style>
<div id="carouselExampleIndicators" class="carousel slide hero-wrap js-fullheight" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<!-- First slide -->
		<div class="carousel-item active js-fullheight" style="background-image: url('images/banners/tennis_banner2.jpg'); background-size: cover; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-12 col-lg-12 ftco-animate">
						<h2 class="subheading">Welcome to Turfelo</h2>
						<h1>Changing the Definition of Sports Infrastructure</h1>
						<p class="mb-4">Let us work on your yard</p>
						<p><a href="about.php" class="btn btn-primary mr-md-4 py-2 px-4">Learn more</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Second slide -->
		<div class="carousel-item js-fullheight" style="background-image: url('images/banners/bdmntn_banner1.jpg'); background-size: cover;  background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-12 col-lg-12 ftco-animate">
						<h2 class="subheading">Professional Lawn Services</h2>
						<h1>Transform your outdoor space</h1>
						<p class="mb-4">Trust us with your lawn care needs</p>
						<p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Know more</a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Third slide -->
		<div class="carousel-item js-fullheight" style="background-image: url('images/banners/football_banner4.jpg'); background-size: cover; background-repeat: no-repeat;" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-12 ftco-animate">
						<h2 class="subheading">Expert Lawn Care</h2>
						<h1>Get the lawn you’ve always wanted</h1>
						<p class="mb-4">Affordable services just for you</p>
						<p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Contact us</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Carousel controls -->
	<!-- <a class="carousel-control-prev controllers" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next controllers" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a> -->
</div>
<section class="ftco-section ftco-no-pt mt-5">
	<div class="container">
		<div class="row">
					<div class="col-md-12 services d-flex justify-content-around align-items-center">
						<div class="text-center homeIcons">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="flaticon-fence"></span>
							</div>
							<div class="text">
								<h3>Garden Care</h3>
							</div>
						</div>
						<div class="text-center homeIcons">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="flaticon-lawn-mower"></span>
							</div>
							<div class="text">
								<h3>Lawn mowing</h3>
							</div>
						</div>
						<div class="text-center homeIcons">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="flaticon-natural-resources"></span>
							</div>
							<div class="text">
								<h3>Lawn care</h3>
							</div>
						</div>
						<div class="text-center homeIcons">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="flaticon-natural-resources"></span>
							</div>
							<div class="text">
								<h3>Lawn care</h3>
							</div>
						</div>
		</div>
	</div>
	</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb bg-light"></section>
<div class="container">
	<div class="row d-flex">
	<div class="col-md-6 d-flex">
					<img class="img-fluid d-flex align-items-center justify-content-center justify-content-md-end 70vh" src="<?php echo BASE_URL; ?>/images/service/bdmntn1.jpg" alt="">
    		</div>
		<div class="col-md-6 pl-md-5">
			<div class="row justify-content-start py-5">
				<div class="col-md-12 heading-section ftco-animate">
				<div class="text-left p-3 py-lg-0">				
					<span class="subheading">Who are we</span>										
					<h2 class="mb-4">Innovators in Sustainable and High-Performance Turf Solutions</h2>
					<p>Turfelo is recognized as one of the top producers and distributors of synthetic turf grass in India. We are committed to delivering top-quality synthetic turf grass suitable for athletic and landscaping purposes.With an internal engineering and project team consisting of industry professionals in sports construction and management.</p>
					<p><a href="<?php echo BASE_URL; ?>/about.php" class="btn btn-primary mr-md-4 py-2 px-4">Get in touch</a></p>
				</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!--antara card section changed-->
<section class="ftco-section ftco-no-pt ftco-no-pb bg-light mt-2 mt-lg-4">
	<div class="container">
		<div class="row d-flex">
			<div class="col-lg-12 col-md-12 col-sm-12 pl-md-5">
				<div class="row justify-content-start py-5">
					<div class="col-md-12 heading-section ftco-animate text-center">
						<span class="subheading">Why Us</span>
						<h2 class="mb-4">We are the best solution to your problem</h2>
						<p class="text-left p-3 py-lg-0">We provide top-notch, highly effective sports systems that are customised to meet your needs in the market. Envision a painstakingly crafted, scientifically supported exhibit that aims to avoid cartilage injuries—a ground-breaking solution that puts the health of athletes and sports fans first.</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-md-3">
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="services text-center">
						<h3>Premium Quality Artificial Turf</h3>
						<p class="text-left p-3 py-lg-0">We offer a wide range of high-quality artificial turf options that mimic the look and feel of natural grass, ensuring durability, UV resistance, and low maintenance for both residential and commercial applications.</p>
					<!-- <a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a> -->
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="services text-center">
						<h3>Custom Turf Installation Solutions</h3>
						<p class="text-left p-3 py-lg-0">We provide tailored turf installation services, catering to different needs such as sports fields, playgrounds, rooftops, and landscaping. Offer flexible options for indoor and outdoor spaces with personalized designs and layouts.</p>					
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="services text-center">				
						<h3>Multi-Sport Turf Grounds</h3>
						<p class="text-left p-3 py-lg-0">Highlight specialized turf for multi-sport facilities, ensuring durability, all-weather performance, and safety features for sports like football, cricket, tennis, and more. Include customizable options for line markings and field dimensions.</p>				
				</div>
			</div>
			<!-- <div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center mt-2 mt-lg-5">
				<p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Learn more</a></p>
			</div> -->
		</div>
		<!-- 2nd copy -->
		<div class="row pt-md-4 mt-lg-4">
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="services text-center">		
						<h3>Eco-Friendly & Pet-Friendly Turf</h3>
						<p class="text-left p-3 py-lg-0">We promote eco-friendly artificial turf that conserves water, reduces the need for chemical treatments, and is safe for pets. This option appeals to environmentally conscious customers and pet owners alike.</p>
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="services text-center">
					<!-- <div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-lawn-mower"></span>
					</div> -->					
						<h3>Playground & Recreational Turf</h3>
						<p class="text-left p-3 py-lg-0">Our playground and recreational turf offers added safety and durability for spaces used by children. Engineered with extra cushioning, this turf reduces the risk of injury from falls and is highly durable to withstand the wear and tear of active play.</p>					
					
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="services text-center">
					<!-- <div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-natural-resources"></span>
					</div> -->					
						<h3>Turf Repair & Maintenance Services</h3>
						<p class="text-left p-3 py-lg-0">Our post-installation turf repair and maintenance services help extend the lifespan of your artificial turf.From minor repairs and seam corrections to thorough cleaning and rejuvenation, we ensure your turf remains in pristine condition.</p>
					<!--  -->
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center mt-2 mt-lg-5">
				<p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Learn more</a></p>
			</div>
		</div>
	</div>
	</div>
</section>
<section class="container pt-5">
	<div class="row bg-light d-flex align-items-center justify-content-around p-5 icon-section">
		<img src="images/vector_images/fifa.png" alt="">
		<img src="images/vector_images/maintanance.png" alt="">
		<img src="images/vector_images/experience.png" alt="">
		<img src="images/vector_images/field.png" alt="">
		<img src="images/vector_images/trophy.png" alt="">
	</div>
</section>
<section class="ftco-section">
	<div class="container">
		<div class="row justify-content-center mb-5">
			<div class="col-md-10 text-center heading-section ftco-animate">
				<span class="subheading">Tips &amp; Techniques</span>
				<h2 class="mb-4">Seasonal Lawn Care Tips</h2>
			</div>
		</div>
		<div class="row">
			<!-- <div class="col-md-12"> -->
				<!-- <div class="ftco-owl"> -->
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="wrap">
							<div class="seasonal img d-flex align-items-center justify-content-center hoverEffect" style="background-image: url(images/seasonal-1.jpg);">
							</div>
							<div class="text text-center px-4">
								<h3><a href="#">Spring</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="wrap">
							<div class="seasonal img d-flex align-items-center justify-content-center hoverEffect" style="background-image: url(images/seasonal-2.jpg);">
							</div>
							<div class="text text-center px-4">
								<h3><a href="#">Summer</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="wrap">
							<div class="seasonal img d-flex align-items-center justify-content-center hoverEffect" style="background-image: url(images/seasonal-3.jpg);">
							</div>
							<div class="text text-center px-4">
								<h3><a href="#">Winter</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-12 col-sm-12">
						<div class="wrap">
							<div class="seasonal img d-flex align-items-center justify-content-center hoverEffect" style="background-image: url(images/seasonal-4.jpg);">
							</div>
							<div class="text text-center px-4">
								<h3><a href="#">Fall</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
				<!-- </div> -->
			<!-- </div> -->
		</div>
	</div>
</section>

<!--icon section deleted-->

<section class="ftco-section bg-light mt-5">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- <div id="form-message-warning" class="mb-4"></div> 
               <div id="form-message-success" class="mb-4">
                   Your message was sent, thank you!
               </div> -->
				<h3 class="mb-2 mb-lg-2">
					FAQ's
				</h3>
				<div id="accordion" class="myaccordion mb-4 mb-lg-0"> 
					<div class="card border-0">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="d-flex align-items-center justify-content-between btn btn-link collapsed text-left" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
								     What sports facilities are available at Trufello?
									<i class="fa-solid fa-angle-down float-right" style="color: #4e9525;"></i>
								</button>
							</h2>
						</div>
						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								<p>At Turfelo, we offer a variety of sports facilities including football turf, badminton court, swimming pool, volleyball court, basketball turf, tennis court, and multisport turf. Whether you are looking for a place to play with friends or host a tournament, our premium turfs are designed to cater to all your needs.</p>
							</div>
						</div>
					</div>
					<div class="card border-0">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="d-flex align-items-center justify-content-between btn btn-link collapsed text-left" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								    How can I book a football turf or badminton court?
									<i class="fa-solid fa-angle-down float-right" style="color: #4e9525;"></i>
								</button>
							</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								<p>Booking a football turf, badminton court, or any other facility is easy. You can book online through our website or call us directly. We provide flexible slots for your convenience. Be sure to book in advance to secure your preferred time.</p>
							</div>
						</div>
					</div>
					<div class="card border-0">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="d-flex align-items-center justify-content-between btn btn-link collapsed text-left" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								Is the turf suitable for both professional and casual players?
									<i class="fa-solid fa-angle-down float-right" style="color: #4e9525;"></i>
								</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								<p>Yes, our football turf, tennis court, and multisport turfs are designed to cater to both professional and casual players. We ensure high-quality, well-maintained facilities so you can enjoy the best experience whether you are training professionally or just having fun with friends.</p>
							</div>
						</div>
					</div>

					<div class="card border-0">
						<div class="card-header" id="headingFour">
							<h2 class="mb-0">
								<button class="d-flex align-items-center justify-content-between btn btn-link collapsed text-left" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
								What are the charges for using the swimming pool and other facilities?
									<i class="fa-solid fa-angle-down float-right" style="color: #4e9525;"></i>
								</button>
							</h2>
						</div>
						<div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
							<div class="card-body">
								<p>The charges for our facilities like swimming pool, football turf, badminton court, and others vary depending on the duration and time of booking. Please visit our pricing page or contact us directly for detailed information about our affordable rates.</p>
							</div>
						</div>
					</div>
					<div class="card border-0">
						<div class="card-header" id="headingFive">
							<h2 class="mb-0">
								<button class="d-flex align-items-center justify-content-between btn btn-link collapsed text-left" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
								Do you provide landscape grass services for personal or commercial use?
									<i class="fa-solid fa-angle-down float-right" style="color: #4e9525;"></i>
								</button>
							</h2>
						</div>
						<div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
							<div class="card-body">
								<p> Yes, apart from our sports facilities, we also offer landscape grass services for personal lawns or commercial spaces. Our team ensures high-quality, eco-friendly grass installation that enhances the beauty of your space.</p>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-12 contact-bg">
				<h3 class="mb-4">Contact Us</h3>
				<!-- <div id="form-message-warning" class="mb-4"></div> 
               <div id="form-message-success" class="mb-4">
                   Your message was sent, thank you!
               </div> -->
			   <form method="POST" id="contactForm" name="contactForm" class="contactForm">
											<div class="row">
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="name">Full Name</label>
														<input type="text" class="form-control" name="name" id="name" placeholder="Name" oninput="removeNumbers(this)">
													</div>
												</div>
												<div class="col-md-6">
													<div class="form-group">
														<label class="label" for="phone">Phone Number</label>
														<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" maxlength="10" onkeyup="numberOnly(this)">
													</div>
												</div>
												<div class="col-md-12"> 
													<div class="form-group">
														<label class="label" for="email">Email Address</label>
														<input type="email" class="form-control" name="email" id="email" placeholder="Email">
														<span id="emailError" style="color: red; display: none;">Please enter a valid email address.</span>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="subject">Subject</label>
														<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject">
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label class="label" for="#">Message</label>
														<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" maxlength="300"></textarea>
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<input type="submit" value="Send Message" class="btn btn-primary">
														<div class="submitting"></div>
													</div>
												</div>
											</div>
										</form>
			</div>
		</div>
	</div>
</section>

<!--icon section deleted-->

<?php include 'incl/cta.php'; ?>
<?php include 'incl/footer.php' ?>