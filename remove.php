<?php
session_start();
if(isset($_POST['poke'])){
    $id = intval($_POST['poke']);
}

$_SESSION['cart'][$id]['qty'] = 0;

print_r($_SESSION['cart']);
/**
 * Created by PhpStorm.
 * User: Giancarlo
 * Date: 7/31/2018
 * Time: 8:38 PM
 */
