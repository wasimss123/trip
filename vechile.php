 
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
  
    


	if(isset($_POST['submit']))
	{
		$vid=$_POST['vid'];
		$email=$_POST['email'];
        $vregno= $_POST['vregno'];
        $vtype= $_POST['vtype'];
        $vbrand= $_POST['vbrand'];
		$vmodel=$_POST['vmodel'];
        $vcolor= $_POST['vcolor'];
        $vregdate= $_POST['vregdate'];
        $vdescription= $_POST['vdescription'];
		if($_FILES['f1']['name']){
		move_uploaded_file($_FILES['f1']['tmp_name'], "image/".$_FILES['f1']['name']);
		$vimg="image/".$_FILES['f1']['name'];
	}
		 $sqlv = "INSERT INTO vehicle (vid, email,vregno,vtype,vbrand,vmodel,vcolor,vregdate,vdescription,vimg)
	 VALUES ('$vid',' $email','$vregno','$vtype','$vbrand','$vmodel','$vcolor','$vregdate','$vdescription','$vimg')";
	 
	 // $resultv= mysqli_query($conn, $sqlv);
	 if (mysqli_query($conn, $sqlv)) {
			 echo "<script>alert('Wow! Adding Successful.')</script>";
				  }
		else {
			echo "<script>alert('Woops! Something Wrong Went.')</script>";	
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
	
    <link rel="stylesheet" href="css/edit.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>TripBeep</title>
	
  </head>
  <body>
  
  
  
  
    <div class="container1">
	
      <div class="forms-container">
        <div class="signin-signup">
         <form class="form-horizontal" method="POST"  action="" enctype="multipart/form-data">
		
            <h2 class="title">Vehicle's details</h2>
			<input type="hidden" name="email" id="email"  class="input-field" value=<?php echo $row['email'] ?> type="text"   required>
			
            <div class="input-field">
              <i class='fas fa-keyboard-o'></i>
           <input id="vehreg" type="text" class="input-field" name="vregno" placeholder="Reg No">
            </div>
			<div class="input-field">
              <i class="fas fa-calendar"></i>
              <input  name="vregdate" id="vregdate"   placeholder="Registration Year" required>
            </div>
			<div class="input-field">
             <i class="fa fa-automobile"></i>
              <select name="vtype" id="vtype" >
							 <option value="" selected="selected">Type</option>
							
							
						</select>
            </div>
			<div class="input-field">
             <i class="fa fa-automobile"></i>
              <select name="vbrand" id="vbrand">
    <option value="" selected="selected">Please select Brand</option>
  </select>
            </div>
			
			<div class="input-field">
              <i class="fas fa-palette"></i>
              <select name="vcolor" id="vcolor">
    <option value="" selected="selected">Please select color</option>
  </select>
            </div>
			<div class="input-field">
              <i class="fas fa-car"></i>
              <input type="text" name="vmodel" id="vmodel"  placeholder="Model"  required>
            </div>
			
            
			
			<div class="input-field">
              <i class="fas fa-clone"></i>
           <input id="vdescription" type="text" class="input-field" name="vdescription" placeholder="Description" required>
            </div>
			<div class="input-field">
			<i class="fas fa-car"></i>
              <input id="imageUpload" type="file" class="input-field" name="f1" placeholder="Photo" required> 

              
            </div>
             <input type="submit" name="submit" class="btn" value=" Submit">
            
			
          </form>
         
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
         
           
			          <!-- <div class="content"> -->
            
           <!-- <button class="btn transparent" id="sign-in-btn">  -->
            <!-- <a href="profile.php"> Back</a> -->
         <!-- </button>  -->
          <!-- </div> -->
          <img src="images/city.svg" class="image" alt="" />
        </div>
        
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>

<script>
var typeObject = {
  "Car": {
    "Honda": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
	"Maruti":["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
    "Hyundai": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
    "Tata": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
"Volkswagen": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
"Ford": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"]	
  },
  "Bike": {
    "Honda": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
	"Suzaki": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
	"Bajaj": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
	"Yamaha": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
	"Tvs": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
	"KTM": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
    "Hero": ["Red", "Blue", "Black","Gray","White", "Silver","Burgundy","Dark Blue","Brown","Yellow","pink","purpel"],
  }
}
window.onload = function() {
  var typeSel = document.getElementById("vtype");
  var brandSel = document.getElementById("vbrand");
  var colorSel = document.getElementById("vcolor");
  for (var x in typeObject) {
    typeSel.options[typeSel.options.length] = new Option(x, x);
  }
  typeSel.onchange = function() {
    //empty Chapters- and Topics- dropdowns
    colorSel.length = 1;
    brandSel.length = 1;
    //display correct values
    for (var y in typeObject[this.value]) {
      brandSel.options[brandSel.options.length] = new Option(y, y);
    }
  }
  brandSel.onchange = function() {
    //empty Chapters dropdown
    colorSel.length = 1;
    //display correct values
    var z = typeObject[typeSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      colorSel.options[colorSel.options.length] = new Option(z[i], z[i]);
    }
  }
}
</script>