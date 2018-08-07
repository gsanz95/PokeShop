<?php
require "./config.php";
include "./functions.php";
include "./sidebar.php";

echo "<!-- Page Content -->
        <div class='col-lg-10 h-100 col-sm-9 col-12'>
            <div id='page-header' class='alert-heading'>
                <h2 class='font-weight-bold pl-5 pt-5' aria-label='Your Cart'>Search Results</h2>
            </div>
            <div class='h-auto list-group' id='itemList'>";

if(!empty($_GET['searchItem'])){

    $search_query = "SELECT * FROM products WHERE INSTR(p_name, '" . $_GET['searchItem'] . "') > 0";
    $search_obj = mysqli_query($conn,$search_query);
    $search_arr = $search_obj->fetch_all(MYSQLI_NUM);

    //Create a card deck for each row of 5
    $x = 0;
    foreach ($search_arr as $item){
        if(($x % 5) == 0){
            echo "<div class='card-deck container-fluid pb-2'>";
        }

        $item[1] = ucwords($item[1]);
        $item[2] = tokenTruncate($item[2],50) . "...";
    	$item[2] = utf8_encode($item[2]);

        echo "<!-- Item Row must always have 5+ cards-->
            <div class='card'>
                <img class='card-img-top img-fluid' src='./images/$item[1]Thumb.png' width='400'>
                <div class='card-body'>
                    <a href='viewproduct.php?p_id=$item[0]'><h5 class='text-center card-title'>$item[1]</h5></a>
                    <p class='card-text'>$item[2]</p>
                </div>
                <div class='card-footer text-center'>
                    <a type='button' class='btn btn-info' aria-label='View product' href='viewproduct.php?p_id=$item[0]'>View</a>
                </div>
          </div>";

        if(($x % 5) == 4)
        {
            echo "</div>";
        }
        $x++;
    }
}
for($i = ($x%5);$i <= 4; $i++){
    echo "<div class='card invisible'></div>";
}

echo "      </div>
        </div>";

include "./footer.php";
/**
 * Created by PhpStorm.
 * User: Giancarlo
 * Date: 8/3/2018
 * Time: 5:14 PM
 */
