
<?php require_once "include/controllerUserData.php"; 




if (!isset($_SESSION['email'])) {

    header("Location: wel.php");

}
$sqy = "SELECT * FROM vehicle WHERE email='$email'";
	$resulty = mysqli_query($conn, $sqy);
	if ($resulty->num_rows > 0) {
		$rows = mysqli_fetch_assoc($resulty);
	}
?>

			
			

<!DOCTYPE html>
<html lang="en">
  <head>
    <title> TRIPBEEP </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon " type="image/x-icon"  href="assets/image/tb2.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

   
    <link rel="stylesheet" href="css/style12.css">
	<link rel="stylesheet" href="css/dlt vehicle PROFILE.css">
	
  </head>
  <body>
    
<?php include('include/dropdown1.php');?>

<div id="content">

  
</div>
<br><br><br><br><br><br>
<table class="hoverTable" style="width:auto">
	<tr>
		<th style="font-family:Helvetica;"><h1 style="font-size: 40px; color:seagreen; text-align:center"> <b>   About you </b> </h1><th>
	</tr>

    

   
                <!-- <img src="https://dummyimage.com/600x400/000/"> -->
			
        <tr><td>        
  <div class="container">
                <div class="profile-pic">
                 <p> </p>
                       <h4> <?php echo $row['username'] ?> 
					   
 <span class="checkmark">
   <img  src="<?php echo $row['img'] ?> " name="img" height="100px;" width="100px;"></span></h2>
                        
                        <div style="color:seegreen;" >
						
                      						</div></a>
						
						
</div>
<hr></hr>
</div>
</tr></td>
<tr><td>
<div class="e">
  <h4 style="color:black";><a class="fa fa-plus-circle" style="font-size:20px;color:green; "></a><a href="pic.php">  Add profile picture</a></h2>
  
</div>
</tr></td>
<tr><td>
<div class="e">
 <h4 style="color:black";><a href="editprofile.php">   Edit personal details</a></h2>
  <hr></hr>
</div>
</tr></td>
<tr><td>
 <section>
 <div class="e">
  <h4 style="color:black";><a href="tp/tp.php">   Travel prefrences</a></h2></button>
  <h6 style="font-size: 20px; color:seagreen;">   <?php echo $row['pets'] ?> 
  <h6 style="font-size: 20px; color:seagreen;">  <?php echo $row['music'] ?> 
  <h6 style="font-size: 20px; color:seagreen;">  <?php echo $row['smoking'] ?> 
  
  <hr></hr>
  </div>
  </section>
   </tr></td> 
  
<tr><td>
	<div class="e">
 <h4 style="color:black";><a class="fa fa-plus-circle" style="font-size:20px;color:green"></a><a href="govt.php">  Verify govt id</a></h2>
  <hr></hr>
</div>
 </section>
 </tr></td>

 <tr><td>
	 <section>
	<div class="e">
 <h4 style="color:black";><a style="font-size:24px;color:green" class="fa">&#xf058;</a>  <?php echo $row['mno'] ?></h2>
  
</div>
 </section>
 </tr></td>
 <tr><td>
	 <section>
	<div class="e">
 <h4 style="color:black";><a class="fa fa-plus-circle" style="font-size:20px;color:green"></a>  <?php echo $_SESSION['email']; ?></h2>
  <hr></hr>
</div>
 </section>
</tr></td>	
<tr><td>
<section>
<form method="POST" enctype="multipart/form-data">
<h4 style="color:black";><a class="fa fa-plus-circle" style="font-size:20px;color:green"><a href="vechile.php">  add vehicle </a>  </h4>
<?php  
  // require_once "include/controllerUserData.php"; 




// if (!isset($_SESSION['email'])) {

    // header("Location: wel.php");

// }
  // $sqlv = "select  * FROM vehicle INNER JOIN  users ON
   // users.email = vehicle.email WHERE users.email='$email'";
    // $resultv=mysqli_query($conn,$sqlv);
	// if(mysqli_num_rows($resultv) > 0){
		// $row = mysqli_fetch_assoc($resultv);
		
		// $_SESSION['vbrand'] = $row['vbrand'];
		// $_SESSION['vregno'] = $row['vregno'];
		// $_SESSION['vcolor'] = $row['vcolor'];
		// $_SESSION['vregdate'] = $row['vregdate'];
		
		// $_SESSION['vimg'] = $row['vimg'];
 // ?> 
	<div class="e">
  

  <div class="container">
                <div class="profile-pic">
                 <p> </p>
                       <h4> <?php echo $rows['vbrand'] ?> </h4><?php echo $row['uid'] ?>
					   <h5> <?php echo $rows['vcolor'] ?> </h5>
 <span class="checkmark">
   <img  src="<?php echo $rows['vimg'] ?> " name="img" height="100px;" width="100px;"></span></h2>
                        
                        <div style="color:seegreen;" >
						
                      						</div></a>
						
	<?php 
	//}
	?>	
</form>
	
</div>
<hr></hr>
</div>
</div>
</tr></td>   
</table>
<style>
img{
	border-radius:50%;
}

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
		font-family:Helvetica;
	}
	/* Define the hover highlight color for the table row */
    .hoverTable td:hover {
          background-color:#eef4f2d1;
    }

/* The container Radio button */
.container {
  display: block;
  position: relative;
  padding-left: 35px;
  margin-bottom: 12px;
  cursor: pointer;
  font-size: 15px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}

/* Hide the browser's default radio button */
.container input {
  position: absolute;
  opacity: 0;
  cursor: pointer;
}

/* Create a custom radio button */
.checkmark {
  position: absolute;
  top: 0;
  right: 0;
  height:80px;
  width: 80px;
  border: ; 
  background-color: white;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: white;
}

/* Create the indicator (the dot/circle - hidden when not checked) */
.checkmark:after {
  content: "";
  position: absolute;
  display: none;
}

/* Show the indicator (dot/circle) when checked */
.container input:checked ~ .checkmark:after {
  display: block;
}

/* Style the indicator (dot/circle) */
.container .checkmark:after {
 	height: 15px;
            width: 15px;
	left: 50%;
            top: 50%;
	 transform: translate(-50%, -50%);
            border-radius: 50%;
	
	background: seagreen;
}
button.mbtn {
  padding:0.6em 2em;
  border-radius: 30px;
  color:#fff;
  background-color:Seagreen;
  font-size:1.1em;
  border:0;
  cursor:pointer;
  margin:1em;
  position:center;
  
}
					#content {
					max-width: 200px;
					margin: auto;
					left: 2%;
					right: 2%;
					position: absolute;
				
					}
</style>











   







