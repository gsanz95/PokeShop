<?php
session_start();
include "sidebar.php";
require "config.php";

echo "<!-- Page Content -->
        <div class='col-lg-10 h-100 col-sm-9 col-12'>";

if(!empty($_SESSION['msg'])){

    $msg = $_SESSION['msg'];
    echo "<div id='page-header' class='alert-heading'>
                <h2 class='font-weight-bold pl-5 pt-5' aria-label='Your Cart'>$msg</h2>
            </div>";
}

//Debug
//print_r($_SESSION['cart']);

// CHECK CART
if(isset($_SESSION['cart'])){
    echo "<div id='page-header' class='alert-heading'>
                <h2 class='font-weight-bold pl-5 pt-5' aria-label='Your Cart'>Your Cart</h2>
            </div>
            <div class='h-auto list-group' id='itemList'>";

    // Build query to get cart
    $cart_query = "SELECT * FROM products WHERE p_id IN (";

    foreach ($_SESSION['cart'] as $id => $value){
        if(!empty($id)) {
            $cart_query = $cart_query ."$id,";
        }
    }
    $cart_query = substr($cart_query,0, -1) . ") ORDER BY p_name ASC";

    $cart_obj = mysqli_query($conn,$cart_query);
    $cart_arr = $cart_obj->fetch_all(MYSQLI_NUM);

    /*/Debug
    echo $cart_query;*/
    //print_r($cart_arr);

    //Print all items
    foreach ($cart_arr as $item) {
        //print_r($item);
        $qty = $_SESSION['cart'][$item[0]]['qty'];
	$item[1] = ucwords($item[1]);
	$item[12] = $item[12] * $qty;
    	$item[2] = utf8_encode($item[2]);
	$total = $total + $item[12];

        if($qty === 0)
        {
            continue;
        }else {
            echo "<!-- Item -->
                <div id='item' class='card w-100 container-fluid'>
                    <div class='row'>
                        <div class='card-body col-md-8'>
                            <img src='./images/$item[1]Thumb.png' class='float-left' height='200'>
                            <h5 class='card-title'>$item[1]</h5>
                            <p>$item[2]</p>
                        </div>
                        <div class='card-body col-md-4'>
                            <p>Price: $item[12]<br>Qty: $qty</p>
                            <button type='button' class='btn btn-danger' id='btnRemove' onclick='removeItem(this)' value='$item[0]'><i class='fas fa-trash'></i> Remove</button>
                        </div>
                    </div>
                </div>";
	    
        }
    }
    
    echo "<p align='right' class='h3'>Total Price: $total</p>";

    //Check if logged in
    if(isset($_SESSION['email'])){
        echo "<a type='button' id='btnCheckout' class='btn btn-primary btn-lg float-right' href='./checkout.php'><i class='fas fa-shopping-cart'></i> Checkout</a>
                </div>
            </div>";
    }else {
        echo "<a type='button' id='btnCheckout' class='btn btn-primary btn-lg float-right' href='./login.php'><i class='fas fa-shopping-cart'></i> Checkout</a>
                </div>
            </div>";
    }
}else{
    echo        "<div id='page-header' class='alert-heading'>
                    <h2 class='font-weight-bold pl-5 pt-5 text-center' aria-label='Your Cart'>Your Cart is Empty</h2>
                </div>
            </div>";
}

    include "footer.php";
?>
