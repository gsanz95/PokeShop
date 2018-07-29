<?php

// Maintain session variables
session_start();
include "sidebar.php";
$page_name = "Login";

// User is already signed in, so redirect to account page
if(isset($_SESSION['email'])){
    header("Location:account.php");
}

// Initialize errors
$login_err = "";

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
<!-- Page Content -->
<div class="col-lg-10 h-100 col-sm-9 col-12">
    <div id="page-header" class="alert-heading">
        <h1 class="text-center font-weight-bold" aria-label="Welcome to the PokeShop!">Welcome to the PokeShop!</h1>
    </div>
    <div class="h-auto">
            <!-- Featured -->

   <div class="container-fluid">
      <body bgcolor = "#FFFFFF">

      <div align = "center">
     <div style = "width:300px; border: solid 1px #333333; " align = "left">
        <div style = "background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

        <div style = "margin:30px">

           <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" class="form-group">
          <?php if($login_err != "") { echo $login_err; } ?>
          <label>Email  :</label><input type = "text" name = "email" class = "form-control"/><br /><br />
          <label>Password  :</label><input type = "password" name = "password" class="form-control" /><br/><br />
          <button name="login" class="btn btn-primary" type="submit">Login</button>
          <a href="createaccount.php">Register</a>
           </form>


        </div>

     </div>

      </div>
   </div>
        </div>
    </div>
</div>

<?php
include "footer.php";
?>