<?php
unset($_SESSION['cart']);
session_start();
require "config.php";

$id=intval($_GET['id']);

if(isset($_SESSION['cart'][$id])){
    $_SESSION['cart'][$id]['qty'] += $_GET['qty'];
}else{

    $add_query = "SELECT * FROM products WHERE p_id='$id'";
    $add_obj = mysqli_query($conn,$add_query);

    if($add_obj !== false){
        $add_row = mysqli_fetch_row($add_obj);

        $_SESSION['cart'][$add_row[0]] = array("qty" => $_GET['qty'],"price" => $add_row[12]);

        // No msg needed
        $_SESSION['msg'] = "";

        ob_start();
        header("Location:./cart.php");
        ob_end_flush();
    }else{
        $_SESSION['msg'] = "<h1>Unable to add product ID = $id to the Cart</h1>";
    }
}
/**
 * Created by PhpStorm.
 * User: Giancarlo
 * Date: 7/29/2018
 * Time: 6:13 PM
 */