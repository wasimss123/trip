
<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
		

}
   $conn= mysqli_connect('localhost','root','','trip');
 
 
    $msg= "" ;
    
    if(isset($_POST['submit'])){
		 
		  $email=$_POST['email'];
		  $select= "select * from users where email='$email'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $result= $row['email'];
    if($result == $email)
    {
   $sql = " DELETE FROM users WHERE  email = '$email'";
   $result = mysqli_query($conn, $sql);
                   if(mysqli_query($conn, $sql)){
    
	 header("location:index.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
         {
            
         }
             }    
	  }			 
?>                  
         
		 
<html lang="en">
  <head>
    <title> TRIPBEEP </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon " type="assets/image/x-icon"  href="../images/tb2.jpg">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<script src="https://kit.fontawesome.com/ab2155e76b.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="../css/style12.css">
    <link rel="stylesheet" href="../css/dlt vehicle PROFILE.css">
	 
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet"> -->
	</head>
	<body>

<button onclick="goBack()" style="color:white"><a href="../account.php">X</a></button>

<?php include('include/dropdown.php');?>	<br>	<br>	<br>	<br>	<br>	
<form method="POST" action="">


<table class="hoverTable" style="width:auto">
	<tr>
		<th style="font-family:Helvetica;"><h1 style="font-size: 40px; color:seagreen;text-align:center"> <b>  Are sure You want to delete your account </b> </h1><th>
	</tr>
	<br><br>
	<tr>
		<td><label class="container"><input type="text" name="username" id="username" value=<?php echo $_SESSION['email'] ?> type="text"   required>
	
</td>
	  </tr> 
	  </table>
	  <br> <br> <br>  
	  
	  <div id="content">
<button class="mbtn blue" style=" position:center"; name="submit">DELETE</button>
</div>
	  </form>
	   <style>
	   
.hoverTable{
		width:200%; 
		border-collapse:collapse; 
		overflow-y: scroll;
		border:black;
		margin-left: auto;
  margin-right: auto;
}
.tr{
	text-align:left-center;
		font-family:Helvetica;	
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
  left: 0;
  height: 25px;
  width: 25px;
  background-color: #eee;
  border-radius: 50%;
}

/* On mouse-over, add a grey background color */
.container:hover input ~ .checkmark {
  background-color: #ccc;
}

/* When the radio button is checked, add a blue background */
.container input:checked ~ .checkmark {
  background-color: #2196F3;
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
 	top: 9px;
	left: 9px;
	width: 8px;
	height: 8px;
	border-radius: 50%;
	background: white;
}
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
}

.select-selected {
  background-color: DodgerBlue;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #ffffff;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
  cursor: pointer;
  user-select: none;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: DodgerBlue;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
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
  position:;
  
}
					#content {
					max-width: 200px;
					margin: auto;
					left: 2%;
					right: 2%;
					position: ;
				
					}
</style>

