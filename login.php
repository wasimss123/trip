<?php require_once "include/controllerUserData.php"; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title> TRIPBEEP </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon " type="image/x-icon" href="images/tb2.jpg">
    <link rel="stylesheet" href="css/signinsingup.css">
    <link rel="stylesheet" href="css/social.css">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
    .signup-form {
        padding: 30px;
    }

    .input-group {
        width: 75% !important
    }

    .error {
        color: red
    }

    .alert {
        position: relative;
        padding: 0.75rem 1.25rem;
        margin-bottom: 1rem;
        border: 1px solid transparent;
        border-radius: 0.25rem;
    }

    .alert-danger {
        color: #721c24;
        background-color: #f8d7da;
        border-color: #f5c6cb;
    }

    .mb-3 {
        margin-bottom: 1rem;
    }

    .alert-success {
        color: #155724;
        background-color: #d4edda;
        border-color: #c3e6cb;
    }

    .mt-3 {
        margin-top: 1rem;
    }
    </style>

</head>

<!--<h2> Sign in/up Form</h2>-->
<br>
<div class="container" id="container">
    <div class="form-container sign-up-container">

        <form action="" method="POST" class="login-email signup-form">
            <h3>Create Account</h3>
            <!-- <div class="social-container">
				<a href="#" class="fa fa-facebook"></a>
				<a href="#" class="fa fa-google"></a>
				<a href="#" class="fa fa-linkedin"></a>
			</div> -->
            <?php if (isset($_GET['status']) && ($_GET['status'] === 'success' )) : ?>
            <div class='alert alert-success mb-0 mt-3' role='alert'>Account has been created Successfully. Please login
                to continue.</div>
            <?php elseif (isset($_GET['status']) && ($_GET['status'] === 'error' )) : ?>
            <div class='alert alert-danger mb-0 mt-3' role='alert'>
                <?php echo $_GET['errorMessage'] ?>
            </div>
            <?php endif; ?>


            <div class="input-group">
                <input type="text" placeholder="Username" name="username" value="<?php echo $username; ?>" required>
            </div>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" id="email" value="<?php echo $email; ?>" required
                    oninput="ValidateEmail()">
                <span class="error" id="lblErrorEmail"></span>
                <br />
                <script type="text/javascript">
                function ValidateEmail() {
                    var lblError = document.getElementById("lblErrorEmail");
                    var emailString = document.getElementById("email").value;
                    var emailRegExp = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                    if (emailString) {
                        if (emailRegExp.test(emailString)) {
                            lblError.innerHTML = ''
                        } else {
                            lblError.innerHTML = 'Invalid email Id.'
                        }
                    } else {
                        lblError.innerHTML = ''
                    }

                    return true;
                }
                </script>
            </div>
            <div class="input-group">
                <input type="no" placeholder="Mobile No" name="mno" value='<?php echo $mno; ?>' required>
            </div>
            <div class="input-group">
                <input type="date" id="txtDate" onChange="ValidateDOB()" placeholder="Date Of Birth" name="dob" value=""
                    required>
                <span class="error" id="lblError"></span>
                <br />
                <script type="text/javascript">
                function ValidateDOB() {
                    var lblError = document.getElementById("lblError");
                    //Get the date from the TextBox.
                    var dateString = document.getElementById("txtDate").value;
                    var parts = dateString.split("/");
                    var dtDOB = new Date(dateString);
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
                }
                </script>
            </div>

            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" id="password" required
                    oninput="ValidatePassword()">
                <span class="error" id="lblErrorPassword"></span>
                <br />
                <script type="text/javascript">
                function ValidatePassword() {
                    var lblError = document.getElementById("lblErrorPassword");
                    var passwordString = document.getElementById("password").value;
                    var passwordRegExp = /^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/;
                    if (passwordString) {
                        if (passwordRegExp.test(passwordString)) {
                            lblError.innerHTML = ''
                        } else {
                            lblError.innerHTML =
                                'Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters'
                        }
                    } else {
                        lblError.innerHTML = ''
                    }

                    return true;
                }
                </script>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Confirm Password" name="cpassword" id="cpassword"
                    oninput="ValidateConfirmPassword()" value="" required>
                <span class="error" id="lblErrorConfirmPassword"></span>
                <br />
                <script type="text/javascript">
                function ValidateConfirmPassword() {
                    var lblError = document.getElementById("lblErrorConfirmPassword");
                    var password = document.getElementById("password").value;
                    var confirmPassword = document.getElementById("cpassword").value;
                    if (password) {
                        if (password === confirmPassword) {
                            lblError.innerHTML = "";
                        } else {
                            lblError.innerHTML = "Password must be same";
                        }
                    } else {
                        lblError.innerHTML = "";
                    }

                    return true;
                }
                </script>
            </div>
            <button name="signup" class="btn">Sign Up</button></a>
            <p class="login-register-text">Have an account? <a href="login.php">Login Here</a>.</p>
        </form>
    </div>

    <div class="form-container sign-in-container">
        <form action="include/controllerUserData.php" method="POST" class="login-email">
            <h1 class="mb-3">Sign in</h1>
            <?php if (isset($_GET['status']) && ($_GET['status'] === 'error' )) : ?>
            <div class='alert alert-danger mb-0 mt-3' role='alert'>
                <?php echo $_GET['errorMessage'] ?>
            </div>
            <?php endif; ?>
            <div class="input-group">
                <input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
            </div>
            <div class="input-group">
                <input type="password" placeholder="Password" name="password" value="" value="<?php echo $password; ?>"
                    required>
            </div>
            <a href="include/forgot-password.php">Forgot your password?</a>

            <button name="login" class="btn">Sign In</button></a>


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

<?php require_once "include/footerWithCopyright.php"; ?>

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