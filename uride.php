

<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: wel.php");
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <title> TRIPBEEP </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon " type="image/x-icon"  href="images/tb2.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="css/animate.css"> -->
    
    <!-- <link rel="stylesheet" href="css/owl.carousel.min.css"> -->
    <!-- <link rel="stylesheet" href="css/owl.theme.default.min.css"> -->
    <!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->

    <!-- <link rel="stylesheet" href="css/aos.css"> -->

    <!-- <link rel="stylesheet" href="css/ionicons.min.css"> -->

    <!-- <link rel="stylesheet" href="css/bootstrap-datepicker.css"> -->
    <!-- <link rel="stylesheet" href="css/jquery.timepicker.css"> -->

    
    <!-- <link rel="stylesheet" href="css/flaticon.css"> -->
    <!-- <link rel="stylesheet" href="css/icomoon.css"> -->
    <link rel="stylesheet" href="css/style12.css">
	
  </head>
  <?php include('include/dropdown1.php');?>
<div class="col-md-8 d-flex align-items-center">
	  						
<img src="images/plan.jpg" alt="" class="center" style="height:200px width:200px";>
<br><br>
<h1><b>Your future travel plans will appear here</b></h1>






















