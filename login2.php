<?php
$protocol=$_SERVER['SERVER_PROTOCOL'];

if(strpos($protocol, "HTTPS"))
{
    $protocol="HTTPS://";
}
else
{
    $protocol="HTTP://";   
}
$redirect_link_var=$protocol.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
?>

<?php 

include 'include/config.php';

session_start();

error_reporting(0);
if($_POST)
{

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		$_SESSION['uid'] = $row['uid'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['mno'] = $row['mno'];
		$_SESSION['dob'] = $row['dob'];
		$_SESSION['gender'] = $row['gender'];
			$_SESSION['smoking'] = $row['smoking'];
$_SESSION['music']= $row['music'];
$_SESSION['img']= $row['img'];

$_SESSION['pets']= $row['pets'];
		$_SESSION['image'] = $row['image'];
		$_SESSION['accno'] = $row['accno'];
		$_SESSION['bank'] = $row['bank'];
		$_SESSION['ifcs'] = $row['ifsc'];
	 
        $redirect_link=$_REQUEST['page_url'];
        if($redirect_link=="")
        {
          header("Location: ../index.php");
        }
        else
        {
            header("location: ".$redirect_link);   
        }
    }
}
		
		// header("Location: roffer/checkd.php");
	// } else {
		// echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	// }
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <title> TRIPBEEP </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon " type="image/x-icon"  href="images/tb2.jpg">
	<link rel="stylesheet" href="css/signinsingup.css">
 <link rel="stylesheet" href="css/social.css">


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<!--<h2> Sign in/up Form</h2>-->
<br>
<div class="container" id="container">
	<div class="form-container sign-up-container">
	
		<form action="register.php" method="POST" class="login-email">
			<h3>Create Account</h3>
			<div class="social-container">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-linkedin"></a>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
				<div class="input-group">
				<input type="no" placeholder="Mobile No" name="mno" value="<?php echo $mno; ?>" required>
			</div>
			<div class="input-group">
			
				<input type="text" id="txtDate" onblur="ValidateDOB()" placeholder="Date Of Birth" name="dob" value="<?php echo $dob; ?>" required>
    <span class="error" id="lblError"></span>
    <br />

    
    <script type="text/javascript">
        function ValidateDOB() {
            var lblError = document.getElementById("lblError");

            //Get the date from the TextBox.
            var dateString = document.getElementById("txtDate").value;
            var regex = /(((0|1)[0-9]|2[0-9]|3[0-1])\/(0[1-9]|1[0-2])\/((19|20)\d\d))$/;

            //Check whether valid dd/MM/yyyy Date Format.
            if (regex.test(dateString)) {
                var parts = dateString.split("/");
                var dtDOB = new Date(parts[1] + "/" + parts[0] + "/" + parts[2]);
                var dtCurrent = new Date();
                lblError.innerHTML = "Eligibility 18 years ONLY."
                if (dtCurrent.getFullYear() - dtDOB.getFullYear() < 18) {
                    return false;
                }

                if (dtCurrent.getFullYear() - dtDOB.getFullYear() == 18) {

                    //CD: 11/06/2018 and DB: 15/07/2000. Will turned 18 on 15/07/2018.
                    if (dtCurrent.getMonth() < dtDOB.getMonth()) {
                        return false;
                    }
                    if (dtCurrent.getMonth() == dtDOB.getMonth()) {
                        //CD: 11/06/2018 and DB: 15/06/2000. Will turned 18 on 15/06/2018.
                        if (dtCurrent.getDate() < dtDOB.getDate()) {
                            return false;
                        }
                    }
                }
                lblError.innerHTML = "";
                return true;
            } else {
                lblError.innerHTML = "Enter date in dd/MM/yyyy format ONLY."
                return false;
            }
        }
    </script>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Gender" name="gender" value="<?php echo $gender; ?>" required>
			</div>
			
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<button name="submit" class="btn">Sign Up</button></a>
			
			
			<p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
		</form>
	</div>
	<div class="form-container sign-in-container">
				<form action="" method="POST" class="login-email">
			<h1>Sign in</h1>
			<div class="social-container">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-linkedin"></a>
				
			</div>
			<span><b> or use your account</b></span>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<a href="#">Forgot your password?</a>
		
				<button name="submit" class="btn">Sign In</button></a>
			
			
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay">
			<div class="overlay-panel overlay-left">
				<h1>Welcome Back!</h1>
				<p>To keep connected with us please login with your personal info</p>
				<button class="ghost" id="signIn">Sign In</a></button>
			</div>
			<div class="overlay-panel overlay-right">
				<h1>Hello, Friend!</h1>
				<p>Enter your personal details and start journey with us</p>
				<button class="ghost" id="signUp">Sign Up</a></button>
			</div>
		</div>
	</div>
</div>


            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Pvk Tech Solutions <i class="icon-heart color-danger" aria-hidden="true"></i><a href="https://site.pvktechsolutions.in/" target="_blank">tripbeep</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
<script>
const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});
</script>
</head>
</html>
