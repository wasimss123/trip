<?php
// phpcs:disable Generic.Commenting.Todo.Found
$protocol=$_SERVER['SERVER_PROTOCOL'];

if (strpos($protocol, "HTTPS")) {
    $protocol="HTTPS://";
} else {
    $protocol="HTTP://";
}

$redirect_link_var=$protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>
<?php 

require 'include/config.php';

session_start();

error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title> TRIPBEEP </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon " type="image/x-icon" href="images/tb2.jpg">


    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa4vDt3RifaxcNpSMO8DuB7JIlQ3D97wE&libraries=places"></script>


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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:700|Work+Sans&display=swap" rel="stylesheet">
    <!--jQuery CDN-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!--Including Stylesheet-->



</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="index.html"><img src="images/logo.png" name="img" height="50px;"
                    width="200px;"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.php" class="nav-link">About Us</a></li>

                    <!--  <li class="nav-item"><a href="blog.php" class="nav-link">Blog</a></li> -->
                    <li class="nav-item"><a href="contact.php" class="nav-link">Contact Us</a></li>
                    <?php if(!isset($_SESSION['email'])) : ?>
                    <li class="nav-item"><a href="login2.php" class="nav-link">Publish a Ride</a></li>
                    <li class="nav-item"><a href="login2.php" class="nav-link">Book a Ride</a></li>
                    <?php else : ?>
                    <li class="nav-item"><a href="publish/publishride.php" class="nav-link">Publish a Ride</a></li>
                    <li class="nav-item"><a href="publish/bookride.php" class="nav-link">Book a Ride</a></li>
                    <li class="nav-item"><a href="publish/publishride.php" class="nav-link">Publish a Ride</a></li>
                    <?php endif; ?>
                    <li class="nav-item"><a href="parcel/searchp.php" class="nav-link"> Send a Parcel</a></li>
                    <?php if(!isset($_SESSION['email'])) : ?>
                    <li class="nav-item"><a href="login.php?page_url=<?php echo $redirect_link_var;?> "
                            class="nav-link">Sign In</a>
                    </li>
                    <?php else : ?>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <?php echo ucfirst($_SESSION['username']); ?>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="logout.php">Log Out</a>
                        </div>
                    </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </nav>

    <!-- END nav -->

    <div class="hero-wrap ftco-degree-bg" style="background-image: url('images/bgg.jpg');"
        data-stellar-background-ratio="0.5">

        <div class="w3-content w3-section" style="max-width:1500px">

            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
                    <div class="col-lg-8 ftco-animate">
                        <div class="text w-100 text-center mb-md-5 pb-md-5">
                            <h1 class="mb-4">Ride Share &amp; Drive Less</h1>
                            <p style="font-size: 18px;">Start <b>TRIPBEEP</b> Stop pollution taking steps towards a
                                better future save money and reduce the cost of fuel.</p>
                            <a class="icon-wrap popup-vimeo d-flex align-items-center mt-4 justify-content-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="ion-ios-play"></span>
                                </div>
                                <div class="heading-title ml-5">
                                    <span>Easy steps for sharing a Car or a Bike and to Send parcel </span>
                                </div>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script>
        const loginText = document.querySelector(".title-text .login");
        const loginForm = document.querySelector("form.login");
        const loginBtn = document.querySelector("label.login");
        const signupBtn = document.querySelector("label.signup");
        const signupLink = document.querySelector("form .signup-link a");
        signupBtn.onclick = (() => {
            loginForm.style.marginLeft = "-50%";
            loginText.style.marginLeft = "-50%";
        });
        loginBtn.onclick = (() => {
            loginForm.style.marginLeft = "0%";
            loginText.style.marginLeft = "0%";
        });
        signupLink.onclick = (() => {
            signupBtn.click();
            return false;
        });
    </script>

    <section class="ftco-section ftco-no-pt bg-light">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12	featured-top">
                    <div class="row no-gutters">
                        <div class="col-md-12 d-flex align-items-center">
                            <div class="wrapper">
                                <div class="title-text">
                                    <div class="title findride" style="color:seagreen;"><strong>Ride Form</strong></div>
                                    <div class="title parcelp" style="color:seagreen;"><strong>Parcel Form</strong>
                                    </div>
                                </div>
                                <div class="form-container">
                                    <div class="slide-controls">
                                        <input type="radio" name="slide" id="findride" checked>
                                        <input type="radio" name="slide" id="parcelp">
                                        <label for="findride" class="slide findride">Ride</label>
                                        <label for="parcelp" class="slide parcelp">Parcel</label>
                                        <div class="slider-tab"></div>
                                    </div>
                                    <div class="form-inner">
                                        <form action="roffer/tripcard.php" class="findride">
                                            <div class="field">
                                                <input type="text" id="origin-input" name="source"
                                                    placeholder="Enter Pickup" required>
                                            </div>
                                            <div class="field">
                                                <input type="text" id="destination-input" name="destination"
                                                    placeholder="Enter Destination" required>
                                            </div>

                                            <div class="field">
                                                <input type="date" name="date" placeholder="Pickup Date" required>
                                            </div>
                                            <div class="field">
                                                <input type="number" placeholder="Passenger" required>
                                            </div>
                                            <a href="roffer/tripcard.php">
                                                <div class="field btn">
                                                    <div class="btn-layer"></div>
                                                    <input type="submit" name="submit" value="Search">
                                                </div>
                                            </a>
                                        </form>
                                        <form action="parcel/searchp.php" class="parcelp">
                                            <div class="field">
                                                <input type="text" id="searchTextField" placeholder="Pick up" required>
                                            </div>
                                            <div class="field">
                                                <input type="text" id="searchTextField1" placeholder="Drop off"
                                                    required>
                                            </div>
                                            <div class="field">
                                                <select class="form-control datepicker px-3" name="typet" required>
                                                    <option>Select transport</option>
                                                    <option><i class="fa fa-train" style="font-size:24px">Train</i>
                                                    </option>
                                                    <option><i class="fa fa-road" style="font-size:24px">On road</i>
                                                    </option>
                                                    <option><i class="fa fa-plane" style="font-size:24px">Air</i>
                                                    </option>
                                                </select>
                                            </div>
                                            <a href="parcel/searchp.php">
                                                <div class="field btn">
                                                    <div class="btn-layer"></div>
                                                    <input type="submit" value="Search">
                                                </div>
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <script>
                                const findrideText = document.querySelector(".title-text .findride");
                                const findrideForm = document.querySelector("form.findride");
                                const findrideBtn = document.querySelector("label.findride");
                                const parcelpBtn = document.querySelector("label.parcelp");
                                const parcelpLink = document.querySelector("form .parcelp-link a");
                                parcelpBtn.onclick = (() => {
                                    findrideForm.style.marginLeft = "-50%";
                                    findrideText.style.marginLeft = "-50%";
                                });
                                findrideBtn.onclick = (() => {
                                    findrideForm.style.marginLeft = "0%";
                                    findrideText.style.marginLeft = "0%";
                                });
                                parcelpLink.onclick = (() => {
                                    parcelpBtn.click();
                                    return false;
                                });
                            </script>




                            <!-- MAPS-->

                            <script
                                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCa4vDt3RifaxcNpSMO8DuB7JIlQ3D97wE&libraries=places"
                                async defer></script>
                            <script>
                                function initialize() {
                                    var originInput = document.getElementById('origin-input');
                                    var destinationInput = document.getElementById('destination-input');
                                    var input = document.getElementById('searchTextField');
                                    var input1 = document.getElementById('searchTextField1');

                                    new google.maps.places.Autocomplete(input);
                                    new google.maps.places.Autocomplete(input1);
                                    new google.maps.places.Autocomplete(originInput);
                                    new google.maps.places.Autocomplete(destinationInput);
                                }

                                google.maps.event.addDomListener(window, 'load', initialize);
                            </script>
                            <script type="text/javascript">

                                function initMap() {
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                        mapTypeControl: false,
                                        center: { lat: 28.5621, lng: 77.2841 },
                                        zoom: 13
                                    });

                                    new AutocompleteDirectionsHandler(map);
                                }

                                function AutocompleteDirectionsHandler(map) {
                                    this.map = map;
                                    this.originPlaceId = null;
                                    this.destinationPlaceId = null;
                                    this.travelMode = 'TRANSIT';
                                    var originInput = document.getElementById('origin-input');
                                    var destinationInput = document.getElementById('destination-input');
                                    var modeSelector = document.getElementById('mode-selector');
                                    this.directionsService = new google.maps.DirectionsService;
                                    this.directionsDisplay = new google.maps.DirectionsRenderer;
                                    this.directionsDisplay.setMap(map);

                                    var originAutocomplete = new google.maps.places.Autocomplete(
                                        originInput, { placeIdOnly: true });
                                    var destinationAutocomplete = new google.maps.places.Autocomplete(
                                        destinationInput, { placeIdOnly: true });

                                    this.setupClickListener('changemode-walking', 'WALKING');
                                    this.setupClickListener('changemode-transit', 'TRANSIT');
                                    this.setupClickListener('changemode-driving', 'DRIVING');

                                    this.setupPlaceChangedListener(originAutocomplete, 'ORIG');
                                    this.setupPlaceChangedListener(destinationAutocomplete, 'DEST');

                                    /* this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(originInput);
                                       this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(destinationInput);
                                       this.map.controls[google.maps.ControlPosition.TOP_LEFT].push(modeSelector);*/
                                }

                                // Sets a listener on a radio button to change the filter type on Places
                                // Autocomplete.
                                AutocompleteDirectionsHandler.prototype.setupClickListener = function (id, mode) {
                                    var radioButton = document.getElementById(id);
                                    var me = this;
                                    radioButton.addEventListener('click', function () {
                                        me.travelMode = mode;
                                        me.route();
                                    });
                                };

                                AutocompleteDirectionsHandler.prototype.setupPlaceChangedListener = function (autocomplete, mode) {
                                    var me = this;
                                    autocomplete.bindTo('bounds', this.map);
                                    autocomplete.addListener('place_changed', function () {
                                        var place = autocomplete.getPlace();
                                        if (!place.place_id) {
                                            window.alert("Please select an option from the dropdown list.");
                                            return;
                                        }

                                        if (mode === 'ORIG') {
                                            me.originPlaceId = place.place_id;
                                        } else {
                                            me.destinationPlaceId = place.place_id;
                                        }
                                        me.route();
                                    });

                                };

                                AutocompleteDirectionsHandler.prototype.route = function () {
                                    if (!this.originPlaceId || !this.destinationPlaceId) {
                                        return;
                                    }
                                    var me = this;

                                    this.directionsService.route({
                                        origin: { 'placeId': this.originPlaceId },
                                        destination: { 'placeId': this.destinationPlaceId },
                                        travelMode: this.travelMode
                                    }, function (response, status) {
                                        if (status === 'OK') {
                                            me.directionsDisplay.setDirections(response);
                                        } else {
                                            window.alert('Directions request failed due to ' + status);
                                        }
                                    });
                                };



                            </script>


                            <style>
                                * {
                                    box-sizing: border-box;
                                }

                                /* Create three equal columns that floats next to each other */
                                .column {
                                    float: left;
                                    width: 33.33%;
                                    padding: 10px;
                                    height: 300px;
                                    /* Should be removed. Only for demonstration */
                                }

                                /* Clear floats after the columns */
                                .row:after {
                                    content: "";
                                    display: table;
                                    clear: both;
                                }

                                * {
                                    margin: 0;
                                    padding: 0;
                                    box-sizing: border-box;
                                    font-family: 'Poppins', sans-serif;
                                }

                                ::selection {
                                    background: #fa4299;
                                    color: #fff;
                                }

                                .wrapper {
                                    overflow: hidden;
                                    max-width: 390px;
                                    background: #fff;
                                    padding: 30px;
                                    border-radius: 5px;
                                    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
                                }

                                .wrapper .title-text {
                                    display: flex;
                                    width: 200%;
                                }

                                .wrapper .title {
                                    width: 50%;
                                    font-size: 35px;
                                    font-weight: 600;
                                    text-align: center;
                                    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                                }

                                .wrapper .slide-controls {
                                    position: relative;
                                    display: flex;
                                    height: 50px;
                                    width: 100%;
                                    overflow: hidden;
                                    margin: 30px 0 10px 0;
                                    justify-content: space-between;
                                    border: 1px solid lightgrey;
                                    border-radius: 5px;
                                }

                                .slide-controls .slide {
                                    height: 100%;
                                    width: 100%;
                                    color: #fff;
                                    font-size: 18px;
                                    font-weight: 500;
                                    text-align: center;
                                    line-height: 48px;
                                    cursor: pointer;
                                    z-index: 1;
                                    transition: all 0.6s ease;
                                }

                                .slide-controls label.parcelp {
                                    color: #000;
                                }

                                .slide-controls .slider-tab {
                                    position: absolute;
                                    height: 100%;
                                    width: 50%;
                                    left: 0;
                                    z-index: 0;
                                    border-radius: 5px;
                                    background: linear-gradient(to left, #ff3300 0%, #cc3300 100%);
                                    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                                }

                                input[type="radio"] {
                                    display: none;
                                }

                                #parcelp:checked~.slider-tab {
                                    left: 50%;
                                }

                                #parcelp:checked~label.parcelp {
                                    color: #fff;
                                    cursor: default;
                                    user-select: none;
                                }

                                #parcelp:checked~label.findride {
                                    color: #000;
                                }

                                #findride:checked~label.parcelp {
                                    color: #000;
                                }

                                #findride:checked~label.findride {
                                    cursor: default;
                                    user-select: none;
                                }

                                .wrapper .form-container {
                                    width: 100%;
                                    overflow: hidden;
                                }

                                .form-container .form-inner {
                                    display: flex;
                                    width: 200%;
                                }

                                .form-container .form-inner form {
                                    width: 50%;
                                    transition: all 0.6s cubic-bezier(0.68, -0.55, 0.265, 1.55);
                                }

                                .form-inner form .field {
                                    height: 50px;
                                    width: 100%;
                                    margin-top: 20px;
                                }

                                .form-inner form .field input {
                                    height: 100%;
                                    width: 100%;
                                    outline: none;
                                    padding-left: 15px;
                                    border-radius: 5px;
                                    border: 1px solid lightgrey;
                                    border-bottom-width: 2px;
                                    font-size: 17px;
                                    transition: all 0.3s ease;
                                }

                                .form-inner form .field input:focus {
                                    border-color: #fc83bb;
                                    /* box-shadow: inset 0 0 3px #fb6aae; */
                                }

                                .form-inner form .field input::placeholder {
                                    color: #999;
                                    transition: all 0.3s ease;
                                }

                                form .field input:focus::placeholder {
                                    color: #b3b3b3;
                                }

                                .form-inner form .pass-link {
                                    margin-top: 5px;
                                }

                                .form-inner form .parcelp-link {
                                    text-align: center;
                                    margin-top: 30px;
                                }

                                .form-inner form .pass-link a,
                                .form-inner form .parcelp-link a {
                                    color: #fa4299;
                                    text-decoration: none;
                                }

                                .form-inner form .pass-link a:hover,
                                .form-inner form .parcelp-link a:hover {
                                    text-decoration: underline;
                                }

                                form .btn {
                                    height: 50px;
                                    width: 100%;
                                    border-radius: 5px;
                                    position: relative;
                                    overflow: hidden;
                                }

                                form .btn .btn-layer {
                                    height: 100%;
                                    width: 300%;
                                    position: absolute;
                                    left: -100%;
                                    background: linear-gradient(to bottom, #ff9900 0%, #cc3300 100%);
                                    border-radius: 5px;
                                    transition: all 0.4s ease;
                                    ;
                                }

                                form .btn:hover .btn-layer {
                                    left: 0;
                                }

                                form .btn input[type="submit"] {
                                    height: 100%;
                                    width: 100%;
                                    z-index: 1;
                                    position: relative;
                                    background: none;
                                    border: none;
                                    color: #fff;
                                    padding-left: 0;
                                    border-radius: 5px;
                                    font-size: 20px;
                                    font-weight: 500;
                                    cursor: pointer;
                                }
                            </style>

                            <div class="col-md-7 d-flex align-items-center">
                                <div class="services-wrap rounded-right w-100">
                                    <h2 class="heading-section mb-6" style="text-align:center;color:#00702cfc;">Better
                                        Way to Share Your Journey </h3>
                                        <div class="row d-flex mb-4">
                                            <div class="row">
                                                <div class="column" style="background-color:;"><img
                                                        style=" margin: 0px 15px 15px 0px;" src="images/b.svg"
                                                        height="170px;" width="170px;" />

                                                    <h6 style="text-align:center; color:#00702cfc;">Find your bike</h3>
                                                </div>

                                                <div class="column" style="background-color:;"><img
                                                        style=" margin: 0px 15px 15px 0px;" src="images/c.svg"
                                                        height="170px;" width="170px;" />

                                                    <h6 style="text-align:center;color:#00702cfc;">Find your car </h3>
                                                </div>

                                                <div class="column" style="background-color:;"><img
                                                        style=" margin: 0px 15px 15px 0px;" src="images/p.svg"
                                                        height="170px;" width="170px;" />

                                                    <h6 style="text-align:center;color:#00702cfc;"> &emsp;Send Your
                                                        Parcel </h5>

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
    </section>



    <section class="ftco-section ftco-about">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url('images/offer.jpg')">
                </div>
                <div class="col-md-6 wrap-about ftco-animate">
                    <div class="heading-section heading-section-white pl-md-5">

                        <h2 class="mb-4">Do You Want To Earn With Us? So Don't Be Late.</h2>
                        <p>Let's make this your least expensive journey</p>
                        <a href="login.php" id="contBtn2">Offer a Ride</a>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section" ; style="background-color:rgb(5, 71,82)" id="section-counter">
        <div class="post">
            <div class="container">
                <div class="heading-section heading-section-white pl-md-1">
                    <h2 class="mb-2">Where do you want to go?</h2>
                    <br></br>

                    <div class="overlay"></div>
                    <div class="row">

                        <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                            <div class="center">
                                <button>
                                    <div class="btn-text">
                                        <span class="left text">
                                            <span class="sc-3jatzg-0 dvIJjD">
                                                <span>Vijayapur</span>
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                    class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                    height="24" aria-hidden="true">
                                                    <g fill="none" stroke="#708C91" stroke-width="2"
                                                        stroke-miterlimit="10" stroke-linejoin="round"
                                                        stroke-linecap="round" transform="rotate(180 12 12)">
                                                        <path d="M9 19l-7-7 7-7"></path>
                                                        <path d="M22 12H2"></path>
                                                    </g>
                                                </svg>
                                                <span>Bengaluru</span>
                                            </span>
                                        </span>
                                        <span class="right text">
                                            <span class="rightAddon">
                                                <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                    style="color: rgb(5, 71, 82);">₹500
                                            </span>
                                        </span>
                                    </div>
                                </button>
                            </div>
                        </div>


                        <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                            <div class="center">
                                <button>
                                    <div class="btn-text">
                                        <span class="left text">
                                            <span class="sc-3jatzg-0 dvIJjD">
                                                <span>Bagalkot</span>
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                    class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                    height="24" aria-hidden="true">
                                                    <g fill="none" stroke="#708C91" stroke-width="2"
                                                        stroke-miterlimit="10" stroke-linejoin="round"
                                                        stroke-linecap="round" transform="rotate(180 12 12)">
                                                        <path d="M9 19l-7-7 7-7"></path>
                                                        <path d="M22 12H2"></path>
                                                    </g>
                                                </svg>
                                                <span>Belagavi</span>
                                            </span>
                                        </span>
                                        <span class="right text">
                                            <span class="rightAddon">
                                                <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                    style="color: rgb(5, 71, 82);">₹150
                                            </span>
                                        </span>
                                    </div>
                                </button>
                            </div>
                        </div>


                        <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                            <div class="center">
                                <button>
                                    <div class="btn-text">
                                        <span class="left text">
                                            <span class="sc-3jatzg-0 dvIJjD">
                                                <span>Delhi</span>
                                                <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                    class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                    height="24" aria-hidden="true">
                                                    <g fill="none" stroke="#708C91" stroke-width="2"
                                                        stroke-miterlimit="10" stroke-linejoin="round"
                                                        stroke-linecap="round" transform="rotate(180 12 12)">
                                                        <path d="M9 19l-7-7 7-7"></path>
                                                        <path d="M22 12H2"></path>
                                                    </g>
                                                </svg>
                                                <span>Kolhapur</span>
                                            </span>
                                        </span>
                                        <span class="right text">
                                            <span class="rightAddon">
                                                <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                    style="color: rgb(5, 71, 82);">₹900
                                            </span>
                                        </span>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <span class="dots"></span>
                    <span class="more">

                        <br><br><br><br>
                        <div class="overlay"></div>
                        <div class="row">

                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Delhi</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>Panaji</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹500
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>


                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Delhi</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>Mumbai</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹600
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>


                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Delhi</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>Kochi</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹1200
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <br><br><br><br>
                        <div class="overlay"></div>
                        <div class="row">

                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Delhi</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>Bengaluru</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹1000
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>


                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Bengaluru</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>Chennai</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹600
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>


                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Delhi</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>Pune</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹900
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <br><br><br><br>
                        <div class="overlay"></div>
                        <div class="row">

                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Hubli</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>Mangaluru</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹600
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>


                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Pune</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>Chandigarh</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹500
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>


                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Delhi</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>Ahmedabad</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹400
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <br><br><br><br>
                        <div class="overlay"></div>
                        <div class="row">

                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Delhi</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>Mumbai</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹700
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>


                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Hyderabad</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>Chandigarh</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹1000
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>


                            <div class="col-md-12 col-lg-4 justify-content-center counter-wrap ftco-animate">
                                <div class="center">
                                    <button>
                                        <div class="btn-text">
                                            <span class="left text">
                                                <span class="sc-3jatzg-0 dvIJjD">
                                                    <span>Delhi</span>
                                                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                                        class="icon sc-3dofso-0 kvCBWc sc-3jatzg-1 gQuTBd" width="24"
                                                        height="24" aria-hidden="true">
                                                        <g fill="none" stroke="#708C91" stroke-width="2"
                                                            stroke-miterlimit="10" stroke-linejoin="round"
                                                            stroke-linecap="round" transform="rotate(180 12 12)">
                                                            <path d="M9 19l-7-7 7-7"></path>
                                                            <path d="M22 12H2"></path>
                                                        </g>
                                                    </svg>
                                                    <span>kolkata</span>
                                                </span>
                                            </span>
                                            <span class="right text">
                                                <span class="rightAddon">
                                                    <div class="text-subheaderStrong sc-d9g8h2-0 grUvZq kirk-item-title"
                                                        style="color: rgb(5, 71, 82);">₹800
                                                </span>
                                            </span>
                                        </div>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </span>
                    <button type="button" class="read" area-expanded="false" area-controls="region9">View more</button>
                </div>
            </div>
        </div>
    </section>

    <script src="js/main.js"></script>



    <section class="ftco-counter ftco-section img bg-light" id="section-counter">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="00">0</strong>
                            <span>Year <br>Experienced</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="0000">0</strong>
                            <span>Total <br>Cars</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text text-border d-flex align-items-center">
                            <strong class="number" data-number="0000">0</strong>
                            <span>Happy <br>Customers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="text d-flex align-items-center">
                            <strong class="number" data-number="00">0</strong>
                            <span>Total <br>Branches</span>
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
                                <li><span class="icon icon-map-marker"></span><span class="text">PVK Tech Solutions,
                                        BLDEA'S Engineering college Incubation Space at 1st floor, CRC Building
                                        Vijayapur, Karnataka-586103</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span
                                            class="text">+91(9481314010)</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">manjunath@pvktechsolutions.in</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> Pvk Tech Solutions <i
                            class="icon-heart color-danger" aria-hidden="true"></i><a
                            href="https://site.pvktechsolutions.in/" target="_blank">tripbeep</a>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" />
        </svg>
    </div>


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
    <script src="js/main.js"></script>

</body>

</html>


<script>
    $(document).ready(function () {
        $(".read").click(function () {
            $(this).prev().toggle();
            $(this).siblings('.dots').toggle();
            if ($(this).text() == 'View more') {
                $(this).text('View less');
            }
            else {
                $(this).text('View more');
            }
        });
    });
</script>