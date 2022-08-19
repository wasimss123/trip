<?php require_once "include/controllerUserData.php"; ?>

<?php 
$email = $_SESSION['email'];
$password = $_SESSION['password'];
if($email != false && $password != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $sql);
    if($result){
        $row = mysqli_fetch_assoc($result);
		
		
        $status = $row['status'];
        $code = $row['code'];
        if($status == "verified"){
            if($code != 0){
                header('Location: reset-code.php');
            }
        }else{
            header('Location: user-otp.php');
        }
    }
}
      if (isset($_POST['submit'])) {	
	
	
	//code for image uploading
	if($_FILES['f1']['name']){
		move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
		$img="image/".$_FILES['f1']['name'];
	}
	
$select= "select * from users where email ='$email'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $result= $_SESSION['email'];
    if($result == $email)
    {
	$sql = "UPDATE users SET img='$img' WHERE email = '$email'";			
		$result = mysqli_query($conn, $sql);
                   if(mysqli_query($conn, $sql)){
				  echo "<script>alert('Wow! Adding Successful.')</script>";
				  }
				   
     else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";	
			}
		} 
                
	  }   
?>  



   
   <!Doctype html>
<html lang="en">	
<html>
<title>TRIPBEEP</title>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
 <link rel="stylesheet" href="css/style12.css">
</head>


<body>

<?php include('include/dropdown1.php');?>
<br>
<br>
<br>
<br><br><br>

 <form method="POST" enctype="multipart/form-data" >

<div><h2><b>Upload image</b></h2></div>
<br>
<h3>
  <div id="profile-container">
  <image id="profileImage" src="<?php echo $row['img'] ?> " name="img">

</div>
<input id="imageUpload" type="file" class="input-field" name="f1" placeholder="Photo" required="capture" >

 
	   <br>
	  <h2> <div id="content">
<button class="mbtn blue" type="submit" name="submit" style=" position:center";>Upload</button>
</div> 
	   
	   </div>
	   </form>
<style>
button.mbtn {
  background-color:seagreen;
  color: white;
  border: none;
  text-align: center;
  padding: 10px 20px;
 border-radius: 150px;
  
}
					#content {
					max-width: 300px;
					margin: auto;
					left: 2%;
					right: 2%;
					position: absolute;
				
					}
h2 {
  font-size: 40px;
  font-weight: normal;
  text-align: center;
  color: seagreen;
  top: 70%;
}
h3 {
  font-size: 20px;
  font-weight: normal;
  text-align: center;
  color: seagreen;
  top: 70%;
}

#imageUpload
{
    display: none;
}

#profileImage
{
    cursor: pointer;
}

#profile-container {
    width: 150px;
    height: 150px;
    overflow: hidden;
    -webkit-border-radius: 50%;
    -moz-border-radius: 50%;
    -ms-border-radius: 50%;
    -o-border-radius: 50%;
    border-radius: 50%;
	margin-left: auto;
  margin-right: auto;
 
}

#profile-container img {
    width: 150px;
    height: 150px;
	background-color:grey;
	

	display: block;
  
	
}



</style>
<script>
$("#profileImage").click(function(e) {
    $("#imageUpload").click();
});

function fasterPreview( uploader ) {
    if ( uploader.files && uploader.files[0] ){
          $('#profileImage').attr('src', 
             window.URL.createObjectURL(uploader.files[0]) );
    }
}

$("#imageUpload").change(function(){
    fasterPreview( this );
});
</script>
