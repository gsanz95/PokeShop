<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <link rel="stylesheet" type="text/css" href="css/sheet.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="PokeShop">
    <meta name="author" content="Giancarlo Sanz">
    <title>PokéShop - Product Search</title>
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
                    <a href="login.php">Account</a>
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

	    <!--Page Content-->
	    <style>
	    .center {
		display: block;
		margin-left: auto;
		margin-right: auto;
		width: 50%;
	    } 
	    </style>

	    <div class="col-lg-10 h-100 col-sm-9 col-12">
	        <div id="page-header" class="alert-heading">
                    <h1 class="text-center font-weight-bold" aria-label="Welcome to the PokeShop!">The Pokemon are waiting for you below!</h1>
		    <img class="center" width=400px height=400px src="./media/third.png">
    	        </div>
            </div>

	    <style>
	    ul.products li {
    		width: 600px;
		height: 600px;
    		display: inline-block;
		vertical-align: right;
	    }
	    </style>
	    
	    <ul class="products">
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/ArcanineThumb.png">
            		<h4>Arcanine</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/ArticunoThumb.png">
            		<h4>Articuno</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/BeedrillThumb.png">
            		<h4>Beedrill</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/BlastoiseThumb.png">
            		<h4>Blastoise</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/BulbasaurThumb.png">
            		<h4>Bulbasaur</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/ButterfreeThumb.png">
            		<h4>Butterfree</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/CharizardThumb.png">
            		<h4>Charizard</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/CharmanderThumb.png">
            		<h4>Charmander</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/CharmeleonThumb.png">
            		<h4>Charmeleon</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/ClefableThumb.png">
            		<h4>Clefable</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/ClefairyThumb.png">
            		<h4>Clefairy</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/DiglettThumb.png">
            		<h4>Diglett</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/DragonairThumb.png">
            		<h4>Dragonair</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/DragoniteThumb.png">
            		<h4>Dragonite</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/DratiniThumb.png">
            		<h4>Dratini</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/DugtrioThumb.png">
            		<h4>Dugtrio</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/EeveeThumb.png">
            		<h4>Eeevee</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/FlareonThumb.png">
            		<h4>Flareon</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/GengarThumb.png">
            		<h4>Gengar</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/GolduckThumb.png">
            		<h4>Golduck</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/GrowlitheThumb.png">
            		<h4>Growlithe</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/GyaradosThumb.png">
            		<h4>Gyarados</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/HaunterThumb.png">
            		<h4>Haunter</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/HitmonchanThumb.png">
            		<h4>Hitmonchan</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/IvysaurThumb.png">
            		<h4>Ivysaur</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/JigglypuffThumb.png">
            		<h4>Jigglypuff</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/JolteonThumb.png">
            		<h4>Jolteon</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/LaprasThumb.png">
            		<h4>Lapras</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/MeowthThumb.png">
            		<h4>Meowth</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/MewtwoThumb.png">
            		<h4>Mewtwo</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/MoltresThumb.png">
            		<h4>Moltres</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/NinetailsThumb.png">
            		<h4>Ninetails</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/PersianThumb.png">
            		<h4>Persian</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/PidgeotThumb.png">
            		<h4>Pidgeot</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/PidgeottoThumb.png">
            		<h4>Pidgeotto</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/PidgeyThumb.png">
            		<h4>Pidgey</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/PikachuThumb.png">
            		<h4>Pikachu</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/PsyduckThumb.png">
            		<h4>Psyduck</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/RaichuThumb.png">
            		<h4>Raichu</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="#">
            		<img src="./images/RapidashThumb.png">
            		<h4>Rapidash</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/ScytherThumb.png">
            		<h4>Scyther</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/SlowbroThumb.png">
            		<h4>Slowbro</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/SnorlaxThumb.png">
            		<h4>Snorlax</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/SquirtleThumb.png">
            		<h4>Squirtle</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/TentacruelThumb.png">
            		<h4>Tentacruel</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/VaporeonThumb.png">
            		<h4>Vaporeon</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/VenosaurThumb.png">
            		<h4>Venosaur</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/WartortleThumb.png">
            		<h4>Wartortle</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/WigglytuffThumb.png">
            		<h4>Wigglytuff</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
    		<li>
        	    <a href="viewproduct.php">
            		<img src="./images/ZapdosThumb.png">
            		<h4>Zapdos</h4>
            		<p>$20.00</p>
        	    </a>
    		</li>
	    </ul>

        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="js/bootstrap.js"></script>
</body>
</html>
