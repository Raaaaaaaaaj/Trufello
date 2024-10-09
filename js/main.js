(function($) {

	"use strict";


	$(window).stellar({
    responsive: true,
    parallaxBackgrounds: true,
    parallaxElements: true,
    horizontalScrolling: false,
    hideDistantElements: false,
    scrollProperty: 'scroll'
  });


	var fullHeight = function() {

		$('.js-fullheight').css('height', $(window).height());
		$(window).resize(function(){
			$('.js-fullheight').css('height', $(window).height());
		});

	};
	fullHeight();

	// loader
	var loader = function() {
		setTimeout(function() { 
			if($('#ftco-loader').length > 0) {
				$('#ftco-loader').removeClass('show');
			}
		}, 1);
	};
	loader();

	// Scrollax
   $.Scrollax();

	var carousel = function() {
		$('.carousel-testimony').owlCarousel({
			center: true,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 3
				}
			}
		});

		$('.carousel-seasonal').owlCarousel({
			center: true,
			loop: true,
			items:1,
			margin: 30,
			stagePadding: 0,
			nav: false,
			navText: ['<span class="ion-ios-arrow-back">', '<span class="ion-ios-arrow-forward">'],
			responsive:{
				0:{
					items: 1
				},
				600:{
					items: 2
				},
				1000:{
					items: 3
				}
			}
		});


	};
	carousel();

	$('nav .dropdown').hover(function(){
		var $this = $(this);
		// 	 timer;
		// clearTimeout(timer);
		$this.addClass('show');
		$this.find('> a').attr('aria-expanded', true);
		// $this.find('.dropdown-menu').addClass('animated-fast fadeInUp show');
		$this.find('.dropdown-menu').addClass('show');
	}, function(){
		var $this = $(this);
			// timer;
		// timer = setTimeout(function(){
			$this.removeClass('show');
			$this.find('> a').attr('aria-expanded', false);
			// $this.find('.dropdown-menu').removeClass('animated-fast fadeInUp show');
			$this.find('.dropdown-menu').removeClass('show');
		// }, 100);
	});


	$('#dropdown04').on('show.bs.dropdown', function () {
	  console.log('show');
	});

	// magnific popup
	$('.image-popup').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    closeBtnInside: false,
    fixedContentPos: true,
    mainClass: 'mfp-no-margins mfp-with-zoom', // class to remove default margin from left and right side
     gallery: {
      enabled: true,
      navigateByImgClick: true,
      preload: [0,1] // Will preload 0 - before current, and 1 after the current image
    },
    image: {
      verticalFit: true
    },
    zoom: {
      enabled: true,
      duration: 300 // don't foget to change the duration also in CSS
    }
  });

  $('.popup-youtube, .popup-vimeo, .popup-gmaps').magnificPopup({
    disableOn: 700,
    type: 'iframe',
    mainClass: 'mfp-fade',
    removalDelay: 160,
    preloader: false,

    fixedContentPos: false
  });



	var contentWayPoint = function() {
		var i = 0;
		$('.ftco-animate').waypoint( function( direction ) {

			if( direction === 'down' && !$(this.element).hasClass('ftco-animated') ) {
				
				i++;

				$(this.element).addClass('item-animate');
				setTimeout(function(){

					$('body .ftco-animate.item-animate').each(function(k){
						var el = $(this);
						setTimeout( function () {
							var effect = el.data('animate-effect');
							if ( effect === 'fadeIn') {
								el.addClass('fadeIn ftco-animated');
							} else if ( effect === 'fadeInLeft') {
								el.addClass('fadeInLeft ftco-animated');
							} else if ( effect === 'fadeInRight') {
								el.addClass('fadeInRight ftco-animated');
							} else {
								el.addClass('fadeInUp ftco-animated');
							}
							el.removeClass('item-animate');
						},  k * 50, 'easeInOutExpo' );
					});
					
				}, 100);
				
			}

		} , { offset: '95%' } );
	};
	contentWayPoint();



})(jQuery);


// FAQ



$("#accordion").on("hide.bs.collapse show.bs.collapse", e => {
	$(e.target)
	  .prev()
	  .find("i:last-child")
	  .toggleClass("fa-minus fa-plus");
  });


  // Annwesha
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    //const navbarContainer = navbar.querySelector('.container-fluid'); // Select inner container-fluid
    
    // Check if the page has been scrolled more than 50px
    if (window.scrollY > 50) {
        navbar.classList.add('full-width'); // Add full-width class when scrolled
        navbar.classList.remove('container'); // Remove container class
        navbar.classList.add('container-fluid'); // Add container-fluid class


    } else {
        navbar.classList.remove('container-fluid'); // Remove container-fluid class
        navbar.classList.add('container'); // Add container class
        navbar.classList.remove('full-width'); // Remove full-width class when at the top

    }
});
  

// Function to validate name (only letters and spaces)
function validateName() {
    const nameField = document.getElementById('name');
    const nameError = document.getElementById('nameError');
    const nameRegex = /^[A-Za-z\s]+$/; // Only alphabets and spaces allowed

    if (!nameRegex.test(nameField.value)) {
        nameError.style.display = 'inline';
        nameError.textContent = 'Name should contain only letters and spaces.';
        return false;
    } else {
        nameError.style.display = 'none';
        return true;
    }
}

// Attach input event listener to restrict non-numeric input for phone number
document.getElementById('phone').addEventListener('input', function() {
    this.value = this.value.replace(/[^0-9]/g, ''); // Allow only digits
});

// Function to validate phone number
function validatePhone() {
    const phoneField = document.getElementById('phone');
    const phoneError = document.getElementById('phoneError');
    const phoneValue = phoneField.value;
    const phoneRegex = /^[6-9]\d{9}$/; // Starts with 6, 7, 8, or 9, and is exactly 10 digits long

    if (!phoneRegex.test(phoneValue)) {
        phoneError.style.display = 'inline';
        phoneError.textContent = 'Phone number must start with 6, 7, 8, or 9 and have exactly 10 digits.';
        return false;
    } else {
        phoneError.style.display = 'none';
        return true;
    }
}

// Function to validate email address
function validateEmail() {
    const emailField = document.getElementById('email');
    const emailError = document.getElementById('emailError');
    const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/; // Basic email format

    if (!emailRegex.test(emailField.value)) {
        emailError.style.display = 'inline';
        emailError.textContent = 'Please enter a valid email address.';
        return false;
    } else {
        emailError.style.display = 'none';
        return true;
    }
}

// Function to validate subject length (maximum 100 characters)
function validateSubject() {
    const subjectField = document.getElementById('subject');
    const subjectError = document.getElementById('subjectError');
    
    if (subjectField.value.length > 100) {
        subjectError.style.display = 'inline';
        subjectError.textContent = 'Subject must not exceed 100 characters.';
        return false;
    } else {
        subjectError.style.display = 'none';
        return true;
    }
}

// Function to validate message length (maximum 350 characters)
function validateMessage() {
    const messageField = document.getElementById('message');
    const messageError = document.getElementById('messageError');
    
    if (messageField.value.length > 350) {
        messageError.style.display = 'inline';
        messageError.textContent = 'Message must not exceed 350 characters.';
        return false;
    } else {
        messageError.style.display = 'none';
        return true;
    }
}

// Master validation function for form submission
function validateForm() {
    const isNameValid = validateName();
    const isPhoneValid = validatePhone();
    const isEmailValid = validateEmail();
    const isSubjectValid = validateSubject();
    const isMessageValid = validateMessage();

    // Ensure that all validation passes before form submission
    if (isNameValid && isPhoneValid && isEmailValid && isSubjectValid && isMessageValid) {
        return true; // Allow form submission if all validations pass
    } else {
        // If any validation fails, prevent form submission
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            text: 'Please fill out all fields correctly before submitting.',
            confirmButtonText: 'OK'
        });
        return false;
    }
}

// Attach the validation function to form submit event
document.getElementById('contactForm').addEventListener('submit', function(e) {
    e.preventDefault(); // Prevent the default form submission

    // Perform form validation
    if (validateForm()) {
        // Serialize form data
        const formData = new FormData(this);

        // Send the form data via AJAX
        fetch('contact_db.php', {
            method: 'POST',
            body: formData,
        })
        .then(response => response.json()) // Expecting a JSON response
        .then(data => {
            if (data.success) {
                // Show success SweetAlert
                Swal.fire({
                    icon: 'success',
                    title: 'Success!',
                    text: 'Your message has been sent successfully!',
                    confirmButtonText: 'OK'
                }).then(() => {
                    // Optionally reset the form after success
                    document.getElementById('contactForm').reset();
                });
            } else {
                // Show error SweetAlert if something went wrong
                Swal.fire({
                    icon: 'error',
                    title: 'Error',
                    text: 'There was an error submitting your message. Please try again.',
                    confirmButtonText: 'OK'
                });
            }
        })
        .catch(error => {
            // Handle any errors from the AJAX request
            Swal.fire({
                icon: 'error',
                title: 'Error',
                text: 'There was a problem connecting to the server. Please try again later.',
                confirmButtonText: 'OK'
            });
            console.error('Error:', error);
        });
    } else {
        // If validation fails, show an error alert or let individual field error messages show
        Swal.fire({
            icon: 'warning',
            title: 'Validation Error',
            text: 'Please fill out all fields correctly before submitting.',
            confirmButtonText: 'OK'
        });
    }
});

