<?php 
session_start();
require 'include/config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['username'])) {
    header("Location: login.php");
}

if (isset($_POST['submit'])) {
	$username = $_POST['username'];
	$email = $_POST['email'];
	$mno = $_POST['mno'];
	$dob = $_POST['dob'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	$sql = "SELECT * FROM users WHERE email='$email'";
	$result = mysqli_query($conn, $sql);
	if (!$result->num_rows > 0) {
		$sql = "INSERT INTO users (username, email, password,mno,dob)
				VALUES ('$username', '$email', '$password','$mno','$dob')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "<script>alert('Wow! User Registration Completed.')</script>";
			
			$username = "";
			$email = "";
			$mno = "";
			$dob = "";
			$gender = "";
			$_POST['password'] = "";
			$_POST['cpassword'] = "";
			header("Location: login.php?success=200");
		} else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";
			header("Location: login.php?error='Something Wrong Went'");
		}
	} else {
		echo "<script>alert('Woops! Email Already Exists.')</script>";
		header("Location: login.php?error='Email Already Exists'");
	}
}

?>
