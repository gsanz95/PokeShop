<?php
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <link rel='stylesheet' type='text/css' href='css/bootstrap.css'>
    <link rel='stylesheet' type='text/css' href='css/all.css'>
    <link rel='stylesheet' type='text/css' href='css/sheet.css'>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <meta name='description' content='Home page for PokeShop'>
    <meta name='author' content='Giancarlo Sanz'>
    <title>PokéShop</title>
</head>
<body>
    <div id='wrapper'>
        <div class='container-fluid h-100'>
            <div class='row h-100'>
                <!-- Sidebar -->
                <div class='col-lg-2 h-100 col-sm-3 col-12'>
                    <nav id='myScrollspy' class='sidebar sidebar-nav'>
                        <img class='img-fluid' src='./media/pokeshop.png' alt='Pokémart Logo' width='325' height='auto'>
						<form action='./searchpage.php' method='get' class='form-row m-0 p-0 '>
                            <div class="col-9">
							    <input type='search' class='form-control' placeholder='Search...' id='searchItem' name='searchItem'>
                            </div>
                            <div class="col">
							    <button class='btn btn-primary' type='submit'><i class="fas fa-search"></i></button>
                            </div>
						</form>
                        <a class='active' href='./home.php'>Home</a>
                        <a href='products.php'>Products</a>
                        <a href='login.php'><!--href='account.php'-->Account</a>
                        <a href='about.php'>About Us</a>

                        <!-- Footer -->
                        <div class='text-white text-center'>
                            <p><i class='far fa-copyright'></i> 2017 Wonder Rangers</p>
                        </div>
                    </nav>
                </div>

		<!-- Modal -->
            	<div class='modal fade' tabindex='-1' id='loginModal' role='dialog' aria-labelledby='loginModalCenter' aria-hidden='true'>
                    <div class='modal-dialog modal-dialog-centered' role='document'>
                        <div class='modal-content'>
                            <div class='modal-header'>
                                <h5 class='modal-title' id='modalTitle'>Sign In</h5>
                                <button type='button' class='close' data-dismiss='modal' aria-label='Close'><span aria-hidden='true' class='text-white'>&times;</span></button>
                            </div>
                            <div class='modal-body'>
                                <form action='<?php echo $_SERVER['PHP_SELF']; ?>'>
                                    <div class='form-group'>
                                        <label for='email' class='col-form-label'>Username:</label>
                                         <input type='text' class='form-control' id='email' name='email'>
                                    </div>
                                    <div class='form-group'>
                                        <label for='password' class='col-form-label'>Password:</label>
                                        <input type='text' class='form-control' id='password' name='password'>
                                        <a href='#forgotpassword' role='link'><span class='point'>Forgot Password?</span></a>
                                    </div>
                                    <a href='./createaccount.php' role='link'><span class='point'>Create Account</span></a>
                                    <button name='login' type='submit' class='btn btn-primary float-right'>Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>