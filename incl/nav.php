<?php include 'config.php'; ?>
<body>
	<nav class="container navbar navbar-expand-lg ftco_navbar ftco-navbar-light fixed-top" id="navbar">
	    <div class="container-fluid">
		<a class="navbar-brand" href="index.php">
      		<img src="<?php echo BASE_URL; ?>logo.png" alt="Logo" height="40"> <!-- Adjust path and height as needed -->
    	</a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="fa fa-bars"></span>
	      </button>
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav mx-auto">
	        	<li class="nav-item active"><a href="<?php echo BASE_URL; ?>/index.php" class="nav-link">Home</a></li>
	        	<li class="nav-item" onclick="activeOption()"><a href="<?php echo BASE_URL; ?>/about.php" class="nav-link">About us</a></li>
				<li class="nav-item dropdown">
					<a href="#" class="nav-link">
					  Services <i class="fas fa-chevron-down ml-1"></i> <!-- Down arrow icon -->
					</a>
					<ul class="dropdown-menu">
					  <li><a href="<?php echo BASE_URL; ?>/service_pages/football_turf.php" class="dropdown-item">Football Turf</a></li>
					  <li><a href="<?php echo BASE_URL; ?>/service_pages/swimming_pool.php" class="dropdown-item">Swimmng Pool</a></li>
					  <li><a href="<?php echo BASE_URL; ?>/service_pages/cricket_turf.php" class="dropdown-item">Cricket Turf</a></li>
					  <li><a href="<?php echo BASE_URL; ?>/service_pages/tennis.php" class="dropdown-item">Tennis</a></li>
					  <li><a href="<?php echo BASE_URL; ?>/service_pages/volleyball.php" class="dropdown-item">Volleyball</a></li>
					  <li><a href="<?php echo BASE_URL; ?>/service_pages/multisport.php" class="dropdown-item">Multi Sport Turf</a></li>
					  <li><a href="<?php echo BASE_URL; ?>/service_pages/badminton.php" class="dropdown-item">Badminton Court</a></li>
					  <li><a href="<?php echo BASE_URL; ?>/service_pages/land_grass.php" class="dropdown-item">Landscape Grass</a></li>
					  <li><a href="<?php echo BASE_URL; ?>/service_pages/proj_consul.php" class="dropdown-item">Project Consultancy</a></li>
					  <li><a href="<?php echo BASE_URL; ?>/service_pages/basketball.php" class="dropdown-item">Basketball Court</a></li>
					</ul>
				  </li>
				<!-- As we dont have any portfolio page we will use the blog page as portfolio page -->
				<li class="nav-item"><a href="<?php echo BASE_URL; ?>/project.php" class="nav-link">Projects</a></li>
	        	<li class="nav-item"><a href="<?php echo BASE_URL; ?>/gallery.php" class="nav-link">Gallery</a></li>
	        </ul>

			<!-- Button on the right side -->
			<!-- <a href="your-button-link.php" class="btn btn-primary ">Your Button</a> -->
			<button class="btn btn-warning px-4 py-2 text-white"><a href="<?php echo BASE_URL; ?>/contact.php">Contact Us</a></button>


	      </div>
	    </div>
	  </nav>