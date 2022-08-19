<style>
.hoverTable{
		width:200%; 
		border-collapse:collapse; 
		overflow-y: scroll;
		border:black;
		margin-left: auto;
  margin-right: auto;
   font-size: 40px;
		
	}
	
	.hoverTable td{ 
		padding:5px;
		width:700px;
		<!-- border: solid black; -->
		text-align:left-center;
		font-family:Helvetica;
	}
	/* Define the default color for all the table rows */
	.hoverTable tr{
		background: ;
	}
	/* Define the hover highlight color for the table row */
    .hoverTable td:hover {
          background-color:#eef4f2d1;
    }

	</style>
<?php 

session_start();

if (!isset($_SESSION['username'])) {

    header("Location: accounts.php");

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
    
<?php include('include/dropdown1.php');?>
<br><br><br><br><br>
<table class="hoverTable" style="width:auto">
	<tr>
<th><h1><div style="padding-bottom:20px; font-size :40px; color:seagreen"><b>Notifications and Communications</b></div></h1><th>
<tr><td><a href="push noti.html"><h4>Push Notifications</h4></a><tr><td>
<tr><td><h4 style="color:skyblue";><a href="email.html">Email</a></h4></tr><td>
<tr><td><h4 style="color:skyblue";><a href="sms.html">SMS</a></h4></tr><td>
 </table>












