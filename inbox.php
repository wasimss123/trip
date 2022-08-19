
<?php require_once "include/controllerUserData.php"; 

include_once "php/config.php";


if (!isset($_SESSION['email'])) {

    header("Location: wel.php");

}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <title> TRIPBEEP </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="shortcut icon " type="image/x-icon"  href="tb2.jpg">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
    <link rel="stylesheet" href="css/style12.css">
	
  </head>
<?php include_once "header.php"; ?>
 <?php include('include/dropdown1.php');?>		
 <body>

  <div class="wrapper">
    <section class="users">
      <header>
        <div class="content">
          <?php 
            $sqlq= mysqli_query($conn, "SELECT * FROM users WHERE email = '$email'");
            if(mysqli_num_rows($sqlq) > 0){
              $rows = mysqli_fetch_assoc($sqlq);
            }
          ?>
          <img src="<?php echo $rows['img']; ?>" alt="">
          <div class="details">
            <span><?php echo $rows['username']?></span>
             <p><?php echo $row['status1']; ?></p>
          </div>
        </div>
        <a href="logout.php?logout_id=<?php echo $rows['unique_id'];?>" class="logout">Logout</a>
      </header>
      <div class="search">
        <span class="text">Select an user to start chat</span>
        <input type="text" placeholder="Enter name to search...">
        <button><i class="fas fa-search"></i></button>
      </div>
      <div class="users-list">
  
  
      </div>
    </section>
  </div>

  <script src="javascript/users.js"></script>

</body>
</html>