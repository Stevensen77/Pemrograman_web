<?php
// Include config file
require_once '../config.php';

// Define variables and initialize with empty values
$username = $password = $confirm_password = $email = $handphone = $fullname="";
$username_err = $password_err = $confirm_password_err = "";


// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Validate username
    if(empty(trim($_POST["name"]))){
        $username_err = "Please enter a username.";
    } else{
        // Prepare a select statement
        $sql = "SELECT id FROM user WHERE name = ?";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_username);

            // Set parameters
            $param_username = trim($_POST["name"]);

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                /* store result */
                mysqli_stmt_store_result($stmt);

                if(mysqli_stmt_num_rows($stmt) == 1){
                    $username_err = "This name is already taken.";
                } else{
                    $username = trim($_POST["name"]);

                }
            } else{
                echo "Oops! Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }


  $image=$_FILES['myfile']['name'];
	$email = trim($_POST['email']);
	$role_id=2;
  $is_active=1;



    // Validate password
    if(empty(trim($_POST['password']))){
        $password_err = "Please enter a password.";
    } else{
        $password = trim($_POST['password']);
    }

    // Validate confirm password
    if(empty(trim($_POST["confirm_password"]))){
        $confirm_password_err = 'Please confirm password.';
    } else{
        $confirm_password = trim($_POST['confirm_password']);
        if($password != $confirm_password){
            $confirm_password_err = 'Password did not match.';
        }
    }


    // Check input errors before inserting in database
    if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
        date_default_timezone_set('Asia/Jakarta');
        $date_created=date('Y-m-d H:i:s');
        // Prepare an insert statement
        $sql = "INSERT INTO user (name, password, email,image,role_id,is_active,date_created) VALUES (?, ?, ?, ?, ?,?,?)";

        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $param_username, $param_password,
            $param_email,$param_image,$param_role_id,$param_is_active,$param_date);

            // Set parameters

      $param_username = $username;
      $param_password = password_hash($password, PASSWORD_DEFAULT); // Creates a password hash
			$param_email = $email;
			$param_image = $image;
			$param_role_id=$role_id;
      $param_is_active=$is_active;
      $param_date=$date_created;

            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Redirect to login page
                header("location: login.php");
            } else{
                echo "Something went wrong. Please try again later.";
            }
        }

        // Close statement
        mysqli_stmt_close($stmt);
    }

    // Close connection
    mysqli_close($link);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sign Up Admin</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; }
        .wrapper{ width: 350px; padding: 20px; }
    </style>


	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="../login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="styles/vendor/animate/animate.css">
<!--===============================================================================================-->

	<link rel="stylesheet" type="text/css" href="styles/util.css">
	<link rel="stylesheet" type="text/css" href="styles/login.css">
<!--===============================================================================================-->

<style>
 @media (min-width: 991.98px)
	 {
		.back_button{
				width:110px;
				position:absolute;
				   top:0;
				   left:0;
		}
	 }

</style>

</head>
<body>


<div class="limiter">
		<div class="container-login100" style="background-image: url('../images/pameran.jpg');">
			<a href="../documentation.php" class=""> <img class="back_button" src="images/back.png" /></a>
			<div class="wrap-login100">



				<form class="login100-form validate-form" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data" method="post">
					<span class="login100-form-logo">
						<img src="../images/sertifikasi.jpg" style="border-radius:50%" class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						REGISTER ACCOUNT <br>E-CATALOG
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter your name">
						<input class="input100" type="text" name="name" placeholder="name"
						value="<?php echo $username; ?>">
						<!--<span class="help-block"><?php echo $username_err; ?></span> -->
						<span class="focus-input100 help-block" data-placeholder="&#xf207;" <?php echo $username_err; ?>></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter your password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100 help-block" data-placeholder="&#xf191;" <?php echo $password_err; ?>></span>
					</div>


					<div class="wrap-input100 validate-input <?php echo (!empty($confirm_password_err)) ? 'has-error' : ''; ?>"
					data-validate="Enter confirm-password">
					<input type="password" name="confirm_password" class="input100" value="<?php echo $confirm_password; ?>" placeholder="Confirm Password">
					<span class="focus-input100 help-block" data-placeholder="&#xf191;">  <?php echo $confirm_password_err; ?></span>
					</div>


					 <div class="wrap-input100 validate-input" data-validate="Please Select Picture">
     					<span class="label-input100">Select File *</span>
     					<input class="input100" type="file" name="myfile">

					<span class="focus-input100 help-block" data-placeholder="&#xf207;"> </span>
					</div>

					 <div class="wrap-input100 validate-input" data-validate="Please Enter Your Email Address">
					<input type="text" name="email" class="input100" placeholder="Email">
					<span class="focus-input100 help-block" data-placeholder="&#xf2c2;"> </span>
					</div>



					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							SUBMIT
						</button>
					</div>

					 <br><p style="color:white ">Have an account? <a href="login.php">Login now</a>.</p>
				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>



<!--===============================================================================================-->
	<script src="styles/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="styles/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="styles/vendor/bootstrap/js/popper.js"></script>
	<script src="styles/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="styles/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="styles/vendor/daterangepicker/moment.min.js"></script>
	<script src="styles/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="styles/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/login.js"></script>

</body>
</html>
