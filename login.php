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
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/sheet.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Home page for PokeShop">
    <meta name="author" content="Giancarlo Sanz">
    <title>Login Page</title>
</head>
<body>
    <div id="wrapper">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Sidebar -->
                <div class="col-lg-2 h-100 col-sm-3 col-12">
                    <nav id="myScrollspy" class="sidebar sidebar-nav">
                        <img class="img-fluid" src="./media/pokeshop.png" alt="Pokémart Logo" width="325" height="auto">
						<form action="#doSearch" method='get' class='form-inline'>
							<input type='search' class='form-control ml-1' placeholder='Search...' id='searchItem' name='searchItem'>
							<button class="btn btn-primary mx-1" type="submit">Search</button>
						</form>
                        <a class="active" href="./home.php">Home</a>
                        <a href="products.php">Products</a>
                        <a href="login.php"><!--href="account.php"-->Account</a>
                        <a href="about.php">About Us</a>

                        <!-- Footer -->
                        <div class="text-white text-center">
                            <p><i class="far fa-copyright"></i> 2017 Wonder Rangers</p>
                        </div>
                    </nav>
                </div>

		<!-- Modal -->
            	<div class="modal fade" tabindex="-1" id="loginModal" role="dialog" aria-labelledby="loginModalCenter" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalTitle">Sign In</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true" class="text-white">&times;</span></button>
                            </div>
                            <div class="modal-body">
                                <form action="<?php echo $_SERVER['PHP_SELF']; ?>">
                                    <div class="form-group">
                                        <label for="email" class="col-form-label">Username:</label>
                                         <input type="text" class="form-control" id="email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-form-label">Password:</label>
                                        <input type="text" class="form-control" id="password" name="password">
                                        <a href="#forgotpassword" role="link"><span class="point">Forgot Password?</span></a>
                                    </div>
                                    <a href="./createaccount.php" role="link"><span class="point">Create Account</span></a>
                                    <button name="login" type="submit" class="btn btn-primary float-right">Login</button>
                                </form>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Page Content -->
                <div class="col-lg-10 h-100 col-sm-9 col-12">
		    <div class='position-absolute' style='z-index:1200; @include float-right;'>
                <a class='btn btn-primary' id='cartButton' href='./cart.php'><i class='fas fa-shopping-cart'></i></a>
            </div>
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
			   <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js">
			   </body>
			</html>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
</body>
</html>
