<?php
session_start();
session_destroy();

include "sidebar.php";

echo "<!-- Page Content -->
        <div class='col-lg-10 h-100 col-sm-9 col-12'>
            <div id='page-header' class='alert-heading'>
                <h2 class='font-weight-bold pl-5 pt-5' aria-label='Checked Out!'>You have placed your Order!</h2>
            </div>
        </div>";

include "footer.php";
/**
 * Created by PhpStorm.
 * User: Giancarlo
 * Date: 7/29/2018
 * Time: 7:55 PM
 */