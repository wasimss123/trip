
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
		
	$username = $_POST['username'];
	$email = $_POST['email'];
$mno = $_POST['mno'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$select= "select * from users where email='$email'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $result= $row['email'];
    if($result == $email)
    {
   
  $sql = "UPDATE users SET username = '$username',email='$email',mno='$mno',dob='$dob',gender = '$gender'  WHERE email = '$email'";			
		$result = mysqli_query($conn, $sql);
                   if(mysqli_query($conn, $sql)){
    echo "<script>alert('Records were updated successfully.')</script>";
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
             }    
	  }			 
?>                  

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="css/edit.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>TripBeep</title>
	
  </head>
  <body>
  
  
  
  
    <div class="container">
	
      <div class="forms-container">
        <div class="signin-signup">
          <form action="" method="POST" class="sign-in-form">
            <h2 class="title">Personal Details</h2>
            <div class="input-field">
              <i class='fas fa-grin'></i>
             <input type="text" name="username" id="username" value=<?php echo $row['username'] ?> type="text"   required>
            </div>
			<div class="input-field">
              <i class='fab fa-etsy'></i>
             <input type="email" name="email" id="email" value=<?php echo $row['email'] ?> type="text" required >
            </div><div class="input-field">
              <i class='fas fa-phone-alt'></i>
             <input type="text" name="mno" id="mno" value=<?php echo $row['mno'] ?> type="text" required>
            </div><div class="input-field">
              <i class="fas fa-calendar"></i>
              <input type="text" name="dob" id="dob" value=<?php echo $row['dob'] ?> type="date" required>
            </div>
            <div class="input-field">
              <i class="fas fa-lock"></i>
              <input type="text" name="gender" id="gender" value=<?php echo $row['gender'] ?> type="text"   required>
            </div>
             <input type="submit" name="submit" class="btn" value=" Update"/>
            
			
          </form>
         
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
         
           
			          <div class="content">
            <h3>Your data</h3>
            <p>
              When you're editing, you want to be the perfect appreciator, not another writer.

            </p>
           <button class="btn transparent" id="sign-in-btn"> 
            <a href="profile.php"> Back</a>
         </button> 
          </div>
          <img src="images/login.svg" class="image" alt="" />
        </div>
        
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
