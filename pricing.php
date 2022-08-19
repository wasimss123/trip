<?php 


?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title>TRIPBEEP</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
	
  </head>
  <body>
    
	  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.php"><img  src="images/logo.png" name="img" height="50px;" width="200px;"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	           <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
              <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>
              
             <!--  <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li> -->
              <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
              <li class="nav-item"><a href="login2.php" class="nav-link">Publish a Ride</a></li>
 <li class="nav-item"><a href="parcel/searchp.php" class="nav-link"> Send a Parcel</a></li>
                  <li class="nav-item"><a href="login.php" class="nav-link">SIGNIN</a></li>
              
	        
	           <!-- <li class="nav-item"><a href="car.html" class="nav-link">Car|Bike</a></li> -->
               
	         
	          
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('images/bg_3.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
	  
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
          <div class="col-md-9 ftco-animate pb-5">
          	<p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>How do pricing and payment work? <i class="ion-ios-arrow-forward"></i></span></p>
            <h1 class="mb-3 bread">How do pricing and payment work?</h1>
          </div>
        </div>
      </div>
    </section>
	

    <section class="ftco-section ftco-about">
			<div class="container">
				<div class="row no-gutters">
					<div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center" style="background-image: url(images/about.jpg);">
					</div>
					
					<div class="col-md-6 wrap-about ftco-animate">
	          <div class="heading-section heading-section-white pl-md-5">
	          	<span class="subheading">How it Works</span>
	            <h2 class="mb-4">How do pricing and payment work?</h2>
                <!-- <span class="subheading">Need to travel?<b></span>
                    <span class="subheading">Its easy as taking a bite of sandwitch <br>
                    Just 3 Steps to book & travel! and enjoy your ride.<b></span> -->

	            <p>Prices are fixed when a car owner offers a ride. They are non-negotiable and the same for all co-travellers. The price is always based on a suggestion calculated by TRIPBEEP according to the itinerary and real costs incurred by car owners. Car owners are free to adjust the price within reason, to account for the comfort of their car or their willingness to make a detour. The price cannot exceed a ceiling set by TREEPBEEP, in order to ensure costs are fairly shared and that car owners do not make a profit. Price per passenger is limited to a partial contribution towards the cost of the journey, and does not allow the driver to make a profit.</p>


	           <p>Payment is made in cash OR any UPI Payment method, in the car.</p>
	          </div>
					</div>
				</div>
			</div>
		</section>

		
		
		
 




</div>
<script>
//full name validation
document.querySelector('#full-name').addEventListener('blur',(event)=>{
    let err = document.querySelector(".error-messg");
    err.innerText = "";
    try{
        //if field empty
        if(event.target.validity.valueMissing)
            throw event.target.validationMessage;
        
        else if(event.target.validity.patternMismatch){
            //event.target.setCustomValidity("Enter A valid name");
            throw "Please enter a valid name!";
        }

        else{
            event.target.style.borderBottomColor = 'green';
            err.innerText = "";
        }
    }

    catch(messg){
        err.innerText = messg;
    }
    
});


//to validate email
document.querySelector('#email').addEventListener('blur',(event)=>{
    validateEmail(event);
});

//to validate confirm email
document.querySelector('#confirm-email').addEventListener('blur',(event)=>{
    validateEmail(event);
    validateConfirmation(document.querySelector('#email'),event.target);
});


//function for email and confirm email validation
function validateEmail(event){
    let error = event.target.nextElementSibling;
    error.innerText = "";
    try{
        
        if(event.target.validity.valueMissing)
            throw event.target.validationMessage;

        else if(!event.target.validity.valid || event.target.value.slice(-4)!='.com')
            throw "Please enter a valid email.";

        else
            event.target.style.borderBottom = '2px solid green';
         
    }

    
    catch(messg){
        error.innerText = messg;
    }

}

//for validating confirm 
function validateConfirmation(el,cEl){
    if(el.value == cEl.value){
        cEl.nextElementSibling.innerText = "";
        document.querySelector('[type="submit"]').removeAttribute('disabled');
    }

    else{
        cEl.nextElementSibling.innerText = "Confirm email not mached!";
        document.querySelector('[type="submit"]').setAttribute('disabled',"disabled");
    }
}


//validating contact number
document.querySelector('#contact-no').addEventListener('blur',function(event){
    let error = event.target.nextElementSibling ;
    error.innerText = "";
    try{
        if(event.target.validity.valueMissing)
            throw event.target.validationMessage;

        else if(event.target.value.length!=10)
            throw "Please enter 10 digit mobile number.";

        else    
            event.target.style.borderBottom = "2px solid green";
    }
    catch(messg){
        error.innerText = messg;
    }
});


//password show/hide functionality
document.querySelector('.passkey-icon').addEventListener('click',displayPassword);
document.querySelectorAll('.passkey-icon')[1].addEventListener('click',displayPassword);

function displayPassword(event){
    if(event.target.parentNode.getAttribute('data-display-passkey')=='off'){
        event.target.parentNode.setAttribute('data-display-passkey','on');
        event.target.setAttribute('class','fas fa-eye-slash');
        event.target.parentElement.previousSibling.previousSibling.setAttribute('type','text');
        console.log(event.target.parentElement.previousSibling.previousSibling);
    }
    else{
        event.target.parentNode.setAttribute('data-display-passkey','off');
        event.target.setAttribute('class','fas fa-eye');
        event.target.parentElement.previousSibling.previousSibling.setAttribute('type','password');
    }
}


//adding to password field
document.querySelector("#passkey").addEventListener('blur',validatePassword);

//password validation
function validatePassword(event){
    let error = event.target.parentElement.nextElementSibling;
    error.innerText = "";
    try{
        console.log((event.target.value));
        console.log();
    if(event.target.validity.valueMissing)
        throw event.target.validationMessage;

    else if(!(/[0-9]{4,}/g).test(event.target.value)){
        throw "There must be atleast 4 digit.";
    }

    else if(event.target.value.length<8 || event.target.value.length>15){
        
        throw "Password must be 8 to 15 charaters.";
    }

    else{
        document.querySelector('[type="submit"]').removeAttribute('disabled');
        event.target.style.borderBottom = "2px solid green";
    }

    }
    catch(messg){
        document.querySelector('[type="submit"]').setAttribute('disabled',"disabled");
        error.innerText = messg;
    }
    console.log(error);
}


//confirm password validation
document.querySelector('#confirm-passkey').addEventListener('blur',function(event){
    try{
        var error = document.querySelectorAll('.error-messg')[5];
        error.innerText = "";
        if(event.target.validity.valueMissing)
            throw event.target.validationMessage;

        else if(document.querySelector('#passkey').value != event.target.value){
            throw "Password not matched!";
        }

        else{
            document.querySelector('[type="submit"]').removeAttribute('disabled');
            event.target.style.borderBottom = "2px solid green";
        }
    }

    catch(messg){
        document.querySelector('[type="submit"]').setAttribute('disabled',"disabled");
        error.innerText = messg;
    }
});

console.log(document.querySelector('#email'));

</script>
	

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2"><a href="#" class="logo">TRIP<span>BEEP</span></a></h2>
              <p>Thank you for riding with us.Please wear a mask during the TRIPBEEP.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
           <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Information</h2>
              <ul class="list-unstyled">
                <li><a href="about.php" class="py-2 d-block">About Us</a></li>
                <!-- <li><a href="#" class="py-2 d-block">Services</a></li> -->
                <li><a href="#" class="py-2 d-block">Term and Conditions</a></li>
                <li><a href="#" class="py-2 d-block">Best Price Guarantee</a></li>
                <li><a href="#" class="py-2 d-block">Privacy &amp; Cookies Policy</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Customer Support</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-2 d-block">FAQ</a></li>
                <li><a href="pricing.php" class="py-2 d-block">Payment Option</a></li>
                <li><a href="bookingtips.php" class="py-2 d-block">Booking Tips</a></li>
                <li><a href="howitworks.php" class="py-2 d-block">How it works</a></li>
                <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">PVK Tech Solutions, BLDEA'S Engineering college Incubation Space at 1st floor, CRC Building Vijayapur, Karnataka-586103</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91(9481314010)</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">manjunath@pvktechsolutions.in</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

             <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Pvk Tech Solutions <i class="icon-heart color-danger" aria-hidden="true"></i><a href="https://site.pvktechsolutions.in/" target="_blank">tripbeep</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script
      src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap&v=weekly"
      async
    ></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>