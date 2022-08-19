<?php 

session_start();

if (!isset($_SESSION['username'])) {

    header("Location: wel.php");

// $sql = "SELECT * FROM users";
// $result = mysqli_query($db, $sql) or die( mysqli_error($db));
}
?>
<html lang="en">
  <head>
    <title> TRIPBEEP </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon " type="image/x-icon"  href="assets/image/tb2.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

   
    <link rel="stylesheet" href="../css/style12.css">
	<link rel="stylesheet" href="../css/dlt vehicle PROFILE.css">
	
  </head>
  <body>
    
<?php include('include/dropdown1.php');?><br><br><br><br><br>





 
<div class="center">
  <h2><img src="images/ride6.jpg" width="500px" height="300px"></h2>
  <h2><b>We haven't booked any ride.</b></h2>
<style>
body {
font-family: havetica neve;
}
h2 {
  font-size:35px;
  font-weight: normal;
  text-align: center;
  color: seagreen;
 
}
.center {
  text-align: center;
}
</style>
</body>