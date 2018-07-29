<?php
session_start();
include "sidebar.php";
include "cartbutton.php";
?>
            <!-- Page Content -->
            <div class="col-lg-10 h-100 col-sm-9 col-12">
                <div id="page-header" class="alert-heading">
                    <h1 class="text-center font-weight-bold" aria-label="Welcome to the PokeShop!">Your Account</h1>
		    <p align="center">Email: <?php echo $_SESSION['email']; ?></p>
		    <a href="logout.php" style="margin:auto; text-align:center; display:block;" class="button large hpbottom">Logout</a>
		</div>
                <div class="h-auto">

                </div>
            </div>
        </div>
<?php
include "footer.php";
?>
