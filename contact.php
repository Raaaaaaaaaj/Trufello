<?php include 'incl/config.php'; ?>
<?php include 'incl/header.php' ?>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact-Us</title>
	<meta name="description" content="" />

	<meta property="og:locale" content="en_US" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Contact-Us" />
	<meta property="og:image" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="https://www.turfelo.com/contact" />
	<link rel="canonical" href="https://www.turfelo.com/contact" />
</head>
<?php include 'incl/nav.php' ?>

<div class="banner">
	<img src="<?php echo BASE_URL; ?>/images/banners/football_banner4.jpg" alt="Banner Image" class="img-fluid">
	<div class="overlay"></div>
	<div class="banner-text">
		<h1 class="mb-3 bread">Contact</h1>
		<p>Home >> Contact Us</p>
	</div>
</div>
<section class="ftco-section bg-light">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-12">
				<div class="wrapper">
					<div class="row mb-5">
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="fa fa-map-marker"></span>
								</div>
								<div class="text">
									<p><span>Address:</span> Barrackpore, Kolkata-121</p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="fa fa-phone"></span>
								</div>
								<div class="text">
									<p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="fa fa-paper-plane"></span>
								</div>
								<div class="text">
									<p><span>Email:</span> <a href="mailto:info@turfelo.com">info@turfelo.com</a></p>
								</div>
							</div>
						</div>
						<div class="col-md-3">
							<div class="dbox w-100 text-center">
								<div class="icon d-flex align-items-center justify-content-center">
									<span class="fa fa-globe"></span>
								</div>
								<div class="text">
									<p><span>Website</span> <a href="index.php">turfelo.com</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class="row no-gutters">
						<div class="col-md-7">
							<div class="contact-wrap w-100 p-md-5 p-4">
								<h3 class="mb-4">Contact Us</h3>
								<div id="form-message-warning" class="mb-4"></div>
								<form method="POST" id="contactForm" name="contactForm" class="contactForm" action="contact_db.php">
									<div class="row">
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="name">Full Name</label>
												<input type="text" class="form-control" name="name" id="name" placeholder="Name" onblur="validateName()">
												<span id="nameError" style="color: red; display: none; font-size: 12px;">Name is not valid.</span>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-group">
												<label class="label" for="phone">Phone Number</label>
												<input type="tel" class="form-control" id="phone" name="phone" placeholder="Phone" maxlength="10" onblur="validatePhone()">
												<span id="phoneError" style="color: red; display: none; font-size: 12px;">Please enter a valid 10-digit phone number.</span>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="email">Email Address</label>
												<input type="email" class="form-control" name="email" id="email" placeholder="Email" onblur="validateEmail()">
												<span id="emailError" style="color: red; display: none; font-size: 12px;">Please enter a valid email address.</span>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="subject">Subject</label>
												<input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" onblur="validateSubject()" maxlength="100">
												<span id="subjectError" style="color: red; display: none; font-size: 12px;">Subject must not exceed 100 characters.</span>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<label class="label" for="#">Message</label>
												<textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Message" maxlength="350" onblur="validateMessage()"></textarea>
												<span id="messageError" style="color: red; display: none; font-size: 12px;">Message must not exceed 350 characters.</span>
											</div>
										</div>
										<div class="col-md-12">
											<div class="form-group">
												<input type="submit" value="Send Message" name="submit" class="btn btn-primary" onclick="return validateForm()">
												<div class="submitting"></div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
						<div class="col-md-5 d-flex align-items-stretch">
							<div class="info-wrap w-100 p-5 img" style="background-image: url(images/about.jpg);">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include 'incl/footer.php' ?>

