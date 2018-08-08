<?php
session_start();
include "sidebar.php";
include "cartbutton.php";
?>
            <!-- Page Content -->
            <div class="col-lg-10 h-100 col-sm-9 col-12">
                <div id="page-header" class="alert-heading">
		    	<h1 class="text-center font-weight-bold" aria-label="About Us!">About Us</h1>
		</div>
                <div class="h-auto">
			<h2>Overview:</h2>
			<p style="font-size:85%"><?php include('aboutDesc.txt'); ?></p>
			<h2>Frequently Asked Questions:</h2>
			<p style="font-size:100%"><?php include('FAQ.txt'); ?></p>
                </div>
            </div>
        </div>
<?php
include "footer.php";
?>
