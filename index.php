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
</style>
<div id="carouselExampleIndicators" class="carousel slide hero-wrap js-fullheight" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
	</ol>
	<div class="carousel-inner">
		<!-- First slide -->
		<div class="carousel-item active js-fullheight" style="background-image: url('images/bg_1.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h2 class="subheading">Welcome to Turfelo</h2>
						<h1>Lawn care for everyone</h1>
						<p class="mb-4">Let us work on your yard</p>
						<p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Second slide -->
		<div class="carousel-item js-fullheight" style="background-image: url('images/bg_2.jpg');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h2 class="subheading">Professional Lawn Services</h2>
						<h1>Transform your outdoor space</h1>
						<p class="mb-4">Trust us with your lawn care needs</p>
						<p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Get started <span class="ion-ios-arrow-forward"></span></a></p>
					</div>
				</div>
			</div>
		</div>
		<!-- Third slide -->
		<div class="carousel-item js-fullheight" style="background-image: url('https://images.pexels.com/photos/19842796/pexels-photo-19842796/free-photo-of-sweet-cake-on-white-plate.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1');" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
					<div class="col-md-6 ftco-animate">
						<h2 class="subheading">Expert Lawn Care</h2>
						<h1>Get the lawn you’ve always wanted</h1>
						<p class="mb-4">Affordable services just for you</p>
						<p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Contact us <span class="ion-ios-arrow-forward"></span></a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Carousel controls -->
	<a class="carousel-control-prev controllers" href="#carouselExampleIndicators" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
	</a>
	<a class="carousel-control-next controllers" href="#carouselExampleIndicators" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
	</a>
</div>
<section class="ftco-section ftco-no-pt">
	<div class="container">
		<div class="row">
			<div class="col-lg-3 py-5 order-md-last">
				<div class="heading-section ftco-animate">
					<span class="subheading">Services</span>
					<h2 class="mb-4">Lawn Services</h2>
					<p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your.</p>
					<p><a href="#" class="btn btn-primary py-3 px-4">Get a Quote</a></p>
				</div>
			</div>
			<div class="col-lg-9 services-wrap px-4 pt-5">
				<div class="row pt-md-3">
					<div class="col-md-4 d-flex align-items-stretch">
						<div class="services text-center">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="flaticon-fence"></span>
							</div>
							<div class="text">
								<h3>Garden Care</h3>
								<p>Seeking justice in the world is a sed significant emotional and investment when we follow this call.</p>
							</div>
							<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
						</div>
					</div>
					<div class="col-md-4 d-flex align-items-stretch">
						<div class="services text-center">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="flaticon-lawn-mower"></span>
							</div>
							<div class="text">
								<h3>Lawn mowing</h3>
								<p>Seeking justice in the world is a sed significant emotional and investment when we follow this call.</p>
							</div>
							<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
						</div>
					</div>
					<div class="col-md-4 d-flex align-items-stretch">
						<div class="services text-center">
							<div class="icon d-flex justify-content-center align-items-center">
								<span class="flaticon-natural-resources"></span>
							</div>
							<div class="text">
								<h3>Lawn care</h3>
								<p>Seeking justice in the world is a sed significant emotional and investment when we follow this call.</p>
							</div>
							<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
						</div>
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
			<div class="img d-flex align-self-stretch align-items-center justify-content-center justify-content-md-end  popup-vimeo" style="background-image:url(images/about.jpg);">
				<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
               </a> -->
			</div>
		</div>
		<div class="col-md-6 pl-md-5">
			<div class="row justify-content-start py-5">
				<div class="col-md-12 heading-section ftco-animate">
					<span class="subheading">Who are we</span>
					<h2 class="mb-4">We are the best solution to your problem</h2>
					<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
					<p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<section class="ftco-section ftco-no-pt ftco-no-pb bg-light mt-2 mt-lg-4">
	<div class="container">
		<div class="row d-flex">
			<div class="col-lg-12 col-md-12 col-sm-12 pl-md-5">
				<div class="row justify-content-start py-5">
					<div class="col-md-12 heading-section ftco-animate text-center">
						<span class="subheading">Why Us</span>
						<h2 class="mb-4">We are the best solution to your problem</h2>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia</p>
					</div>
				</div>
			</div>
		</div>
		<div class="row pt-md-3">
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="services text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-fence"></span>
					</div>
					<div class="text">
						<h3>Garden Care</h3>
					</div>
					<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="services text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-lawn-mower"></span>
					</div>
					<div class="text">
						<h3>Lawn mowing</h3>
					</div>
					<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
				</div>
			</div>
			<div class="col-md-4 d-flex align-items-stretch">
				<div class="services text-center">
					<div class="icon d-flex justify-content-center align-items-center">
						<span class="flaticon-natural-resources"></span>
					</div>
					<div class="text">
						<h3>Lawn care</h3>
					</div>
					<a href="#" class="btn-custom d-flex align-items-center justify-content-center"><span class="ion-ios-arrow-round-forward"></span></a>
				</div>
			</div>
			<div class="col-lg-12 col-md-12 col-sm-12 d-flex justify-content-center mt-2 mt-lg-5">
				<p><a href="#" class="btn btn-primary mr-md-4 py-2 px-4">Learn more <span class="ion-ios-arrow-forward"></span></a></p>
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
			<div class="col-md-12">
				<div class="ftco-owl">
					<div class="item">
						<div class="wrap">
							<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-1.jpg);">
							</div>
							<div class="text text-center px-4">
								<h3><a href="#">Spring</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="wrap">
							<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-2.jpg);">
							</div>
							<div class="text text-center px-4">
								<h3><a href="#">Summer</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="wrap">
							<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-3.jpg);">
							</div>
							<div class="text text-center px-4">
								<h3><a href="#">Winter</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="wrap">
							<div class="seasonal img d-flex align-items-center justify-content-center" style="background-image: url(images/seasonal-4.jpg);">
							</div>
							<div class="text text-center px-4">
								<h3><a href="#">Fall</a></h3>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							</div>
						</div>
					</div>
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
<section class="ftco-section bg-light mt-5">
	<div class="container">
		<div class="row justify-content-center">

			<div class="col-lg-6 col-md-6 col-sm-12">
				<!-- <div id="form-message-warning" class="mb-4"></div> 
               <div id="form-message-success" class="mb-4">
                   Your message was sent, thank you!
               </div> -->
				<h3 class="mb-2 mb-lg-5">
					FAQ's
				</h3>
				<div id="accordion" class="myaccordion mb-4 mb-lg-0">
					<div class="card border-0">
						<div class="card-header" id="headingOne">
							<h2 class="mb-0">
								<button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
									Undergraduate Studies
									<i class="fa-solid fa-angle-down float-right" style="color: #4e9525;"></i>
								</button>
							</h2>
						</div>
						<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
							<div class="card-body">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima, esse. Doloribus reiciendis nihil error quisquam modi libero, provident illum in earum ducimus? Animi itaque ipsum sunt velit ad, quos omnis facere, consequuntur veritatis illo illum? Quas cum porro quaerat incidunt. Natus voluptatum consectetur quos voluptas ducimus, atque nemo voluptates quisquam.</p>
							</div>
						</div>
					</div>
					<div class="card border-0">
						<div class="card-header" id="headingTwo">
							<h2 class="mb-0">
								<button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
									Postgraduate Studies
									<i class="fa-solid fa-angle-down float-right" style="color: #4e9525;"></i>

								</button>
							</h2>
						</div>
						<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
							<div class="card-body">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. At, ab voluptatibus! Deserunt animi odio maxime voluptas sunt natus soluta, ducimus fugiat, ratione nisi tempore velit quaerat eum nulla quasi atque.</p>
							</div>
						</div>
					</div>
					<div class="card border-0">
						<div class="card-header" id="headingThree">
							<h2 class="mb-0">
								<button class="d-flex align-items-center justify-content-between btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
									Research
									<i class="fa-solid fa-angle-down float-right" style="color: #4e9525;"></i>
								</button>
							</h2>
						</div>
						<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
							<div class="card-body">
								<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta non distinctio unde deserunt totam odit necessitatibus nostrum assumenda voluptates ipsum, laboriosam ea delectus atque at nulla consectetur ipsam magnam laborum beatae maiores excepturi? Praesentium temporibus, aliquid fugit soluta totam magni.</p>
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
				<form method="POST" id="contactForm" name="contactForm" class="contactForm ">
					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label class="label" for="name">Full Name</label>
								<input type="text" class="form-control" name="name" id="name" placeholder="Name">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label class="label" for="email">Email Address</label>
								<input type="email" class="form-control" name="email" id="email" placeholder="Email">
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
								<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message"></textarea>
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


<section class="container pt-5 pb-5">
	<div class="row bg-light d-flex align-items-center justify-content-around p-5 icon-section">
		<img src="images/vector_images/fifa.png" alt="">
		<img src="images/vector_images/maintanance.png" alt="">
		<img src="images/vector_images/experience.png" alt="">
		<img src="images/vector_images/field.png" alt="">
		<img src="images/vector_images/trophy.png" alt="">
	</div>
</section>
<?php include 'incl/cta.php'; ?>
<section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-lg-8 py-4">
				<div class="row">
					<div class="col-md-6 ftco-animate d-flex align-items-center">
						<h2 class="mb-0" style="color:white; font-size: 24px;">Subcribe to our Newsletter</h2>
					</div>
					<div class="col-md-6 d-flex align-items-center">
						<form action="#" class="subscribe-form">
							<div class="form-group d-flex">
								<input type="text" class="form-control" placeholder="Enter email address">
								<input type="submit" value="Subscribe" class="submit px-3">
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'incl/footer.php' ?>