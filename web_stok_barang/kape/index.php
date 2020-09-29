 <?php  
 $connect = mysqli_connect("localhost", "root", "", "kape");  
 session_start();  
  
 if(isset($_POST["register"]))  	  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);
		   $fullname = mysqli_real_escape_string($connect, $_POST["fullname"]);
		   $position = mysqli_real_escape_string($connect, $_POST["position"]);
		   $hp = mysqli_real_escape_string($connect, $_POST["hp"]); 		   
           $query = "INSERT INTO users (username, password, fullname, position, hp) VALUES('$username', '$password', '$fullname', '$position', '$hp')";  
           if(mysqli_query($connect, $query))  
           {  
                echo '<script>alert("Registration Done")</script>';  
           }
		  else{
			  echo '<script>alert("Gagal mendaftar")</script>';
		  }
      }  
   
 if(isset($_POST["login"]))  
 {  
      if(empty($_POST["username"]) && empty($_POST["password"]))  
      {  
           echo '<script>alert("Both Fields are required")</script>';  
      }  
      else  
      {  
           $username = mysqli_real_escape_string($connect, $_POST["username"]);  
           $password = mysqli_real_escape_string($connect, $_POST["password"]);  
           $password = md5($password);  
           $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";  
           $result = mysqli_query($connect, $query);  
		  $row = mysqli_fetch_array($result);
		
           if(mysqli_num_rows($result) > 0)  
           {  
		
				$_SESSION['position']=$row['position'];
				
                $_SESSION['username'] = $username; 
				
                header("location:home.php");  
           }  
           else  
           {  
                echo '<script>alert("Wrong User Details")</script>';  
           }  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Login</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
	  <div style="background: #000080; color:#000080; padding: 10px 10px 10px 10px ">
<tr>
     <img src= "menu/rno.jpg" width="250" height="68" alt="" class="img-circle gambar"/>
     </tr>
</div>

           <br /><br />  
           <div class="container" style="width:500px;">  
                <br />  
                <?php  
                if(isset($_GET["action"]) == "login")  
                {  
                ?>  
                <h3 align="center">Login</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" class="form-control" />  
                     <br />  
                     <label>Enter Password</label>  
                     <input type="password" name="password" class="form-control" />
					 <br />  
                     <input type="submit" name="login" value="Login" class="btn btn-info" />  
                     <br />  
                     <p align="center"><a href="index.php">Register</a></p>  
                </form>  
                <?php       
                }  
                else  
                {  
                ?>  
                <h3 align="center">User Register Form</h3>  
                <br />  
                <form method="post">  
                     <label>Enter Username</label>  
                     <input type="text" name="username" pattern="(?=.*[a-z]).{1,}" class="form-control" required >  
                     <br />
                     <label>Enter Password</label>  
                     <input type="password" id="password" name="password" pattern="(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{1,}" class="form-control" required > 
                     <h7>*Password with uppercase, lowercase and number</h7>
					 <br />
					 <label>Enter Your Name</label>  
                     <input type="text" name="fullname" class="form-control" required />  	
                     <br />
					 <label>Enter Your Position</label>  
                     <input type="text" name="position" class="form-control" required />  
					 <br />
					 <label>Enter Your Phone Number</label>  
                     <input type="text" name="hp" pattern="(?=.*[0-9]).{10,12}" class="form-control" required >  
					 <br />
                     <input type="submit" name="register" value="Register" class="btn btn-info" />  
                     <br />  
					 <p align="center"><a href="index.php?action=login">Login</a></p>  
                </form>  
                <?php  
                }  
                ?>  
           </div>  
      </body>  
 </html>  