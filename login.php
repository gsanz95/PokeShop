<?php

// Maintain session variables
session_start();

// User is already signed in, so redirect to account page
if(isset($_SESSION['email'])){
    header("Location:account.php");
}

// User wants to login
if (isset($_POST['login'])) {
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		// MySQL credentials
                $servername = "pokemart.cpnngrjylxoa.us-east-2.rds.amazonaws.com";
                $username = "master";
                $serverpassword = "password123";
                $dbname = "pokemart";

                // Create connection
                $conn = mysqli_connect($servername, $username, $serverpassword, $dbname);

                // Check connection
                if (!$conn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

		// Email and password sent from form 
		$email = $_POST['email'];
		$password = $_POST['password'];

		// Initialize errors
		$login_err = "";  

		$sql = "SELECT * FROM users WHERE email = '$email' and password = '$password'";
		$result = mysqli_query($conn, $sql);
		$count = mysqli_num_rows($result);

		// If result matched $email and $password, table row must be 1 row
		if($count == 1) {
		    // Store the email for use across webpages
		    $_SESSION['email'] = $email;

		    // Redirect to account page
		    header("Location: account.php");
		}else {
		    $login_err = "<font color='red'>Your Email or Password is invalid.</font>";
		}
	}
}

// User wants to register
if (isset($_POST['register'])) {
        header("Location:createaccount.php");
}

?>


<!DOCTYPE html>
<html lang="en">
   <head>
      <title>Login Page</title>
      
      <style type = "text/css">
         body {
            font-family:Arial, Helvetica, sans-serif;
            font-size:14px;
         }
         label {
            font-weight:bold;
            width:100px;
            font-size:14px;
         }
         .box {
            border:#666666 solid 1px;
         }
      </style>
      
   </head>
   
   <body bgcolor = "#FFFFFF">
	
      <div align = "center">
         <div style = "width:300px; border: solid 1px #333333; " align = "left">
            <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>
				
            <div style = "margin:30px">
               
               <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
    		  <?php if($login_err != "") { echo $login_err; } ?>
                  <label>Email  :</label><input type = "text" name = "email" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
		  <button name="login" type="submit">Login</button>
		  <a href="createaccount.php">Register</a>
               </form>
               
					
            </div>
				
         </div>
			
      </div>

   </body>
</html>
