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
   if(isset($_POST['submit'])){
        $adhar = $_POST['adhar'];
  
		 $select= "select * from users where email='$email'";
    $sql = mysqli_query($conn,$select);
    $row = mysqli_fetch_assoc($sql);
    $result= $row['email'];
    if($result == $email)
    {
   
  $sql = "UPDATE users SET adhar = '$adhar'  WHERE email = '$email'";			
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
<html>
<title>Tripbeep</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="parcel/css/style12.css">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


<body>

  
<?php include('include/dropdown1.php');?>
</br>
</br></br></br></br>
  
 <div class="register-photo">
<div class="form-container">
<div class="image-holder"></div>
<form method="POST">

<h2 class="text-center"><strong><h4>Govt Id Verification</strong> </h2><br><br>
<div class="form-group"><input class="form-control" type="text" name="username"  value=<?php echo $row['username'] ?>></div>
<div class="form-group"><input class="form-control" type="number" name="adhar"  value=<?php echo $row['adhar'] ?> id="txtAadhar" onblur="AadharValidate();" / placeholder="Enter Your Adhar Number"></div>
<br>
<div class="form-group"><button class="btn btn-success btn-block" type="submit"  name="submit">Update</button></div>
</form>
</div>
</div> 
<script type="text/javascript">
    function AadharValidate() {
        var aadhar = document.getElementById("txtAadhar").value;
        var adharcardTwelveDigit = /^\d{12}$/;
        var adharSixteenDigit = /^\d{16}$/;
        if (aadhar != '') {
            if (aadhar.match(adharcardTwelveDigit)) {
                return true;
            }
            else if (aadhar.match(adharSixteenDigit)) {
                return true;
            }
            else {
                alert("Enter valid Aadhar Number");
                return false;
            }
        }
    }
</script>
<style>
.register-photo {
background: #ffffff;
padding: 100px 0
}
.register-photo .image-holder {
display: table-cell;
width: auto;
background: url(images/govt.svg);
background-size: cover
}
.register-photo .form-container {
display: table;
max-width: 1200px;

width: 90%;
margin: 0 auto;
box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.1)
}
.register-photo form {
display: table-cell;
width: 500px;
background-color: #ffffff;
padding: 40px 60px;
color: #505e6c
}
@media (max-width:991px) {
.register-photo form {
padding: 40px
}
}
.register-photo form h2 {
font-size: 24px;
line-height: 1.5;
margin-bottom: 30px
}
.register-photo form .form-control {
background: transparent;
border: none;
border-bottom: 1px solid #dfe7f1;
border-radius: 0;
box-shadow: none;
outline: none;
color: inherit;
text-indent: 0px;
height: 40px
}
.register-photo form .form-check {
font-size: 13px;
line-height: 20px
}
.register-photo form .btn-primary {
background: green;
border: none;
border-radius: 4px;
padding: 11px;
box-shadow: none;
margin-top: 35px;
text-shadow: none;
outline: none !important
}
.register-photo form .btn-primary:hover,
.register-photo form .btn-primary:active {
background: green
}
.register-photo form .btn-primary:active {
transform: translateY(1px)
}
.register-photo form .already {
display: block;
text-align: center;
font-size: 12px;
color: #6f7a85;
opacity: 0.9;
text-decoration: none
}
</style>
