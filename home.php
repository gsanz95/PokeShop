<?php
session_start();

// Login user
if (isset($_POST['login'])) {
   // 
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
    <title>PokéShop - Home</title>
</head>
<body>
    <div id="wrapper">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <!-- Sidebar -->
                <div class="col-lg-2 h-100 col-sm-3 col-12">
                    <nav id="myScrollspy" class="sidebar sidebar-nav">
                        <img class="img-fluid" src="./media/pokeshop.png" alt="Pokémart Logo" width="325" height="auto">
                        <a class="active" href="./home.php">Home</a>
                        <a href="products.php">Products</a>
                        <a href="login.php"><!--href="account.php"-->Account</a>
                        <a href="about.php">About Us</a>
                        <div class="search-container">
                            <form action="#doSearch"></form>
                        </div>

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
                    <div id="page-header" class="alert-heading">
                        <h1 class="text-center font-weight-bold" aria-label="Welcome to the PokeShop!">Welcome to the PokeShop!</h1>
                    </div>
                    <div class="h-auto">
                        <!-- Featured -->
                        <div class="h-auto">
                            <h2>Featured Items</h2>
                            <div class="card-deck p-4">
                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>
                            </div>
                            <nav aria-label="Page Navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Popular -->
                        <div class="h-auto">
                            <h2>Most Popular</h2>
                            <div class="card-deck p-4">
                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>
                            </div>
                            <nav aria-label="Page Navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                            </nav>
                        </div>
                        <!-- Deals -->
                        <div class="h-auto">
                            <h2>Current Deals</h2>
                            <div class="card-deck p-4">
                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>

                                <div class="card bg-light text-center">
                                    <img src="media/earth.jpg" class="card-img-top" alt="Product Img.">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                                </div>
                            </div>
                            <nav aria-label="Page Navigation">
                                <ul class="pagination justify-content-center">
                                    <li class="page-item active">
                                        <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                </ul>
                            </nav>
                        </div>
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