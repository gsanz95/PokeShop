<?php
session_start();
include "sidebar.php";
include "cartbutton.php";
?>

<!-- Page Content -->
<div class='col-lg-10 h-100 col-sm-9 col-12'>
    <div id='page-header' class='alert-heading'>
        <h1 class='text-center font-weight-bold' aria-label='Welcome to the PokeShop!'>Welcome to the PokeShop!</h1>
    	<p class='text-center font-weight-bold'>The best place to buy your favorite Pokemon!</p>
    </div>
    <div class='h-auto'>

<?php

include "config.php";
include "functions.php";

// Featured Items (Currently Random)
$featured_items = array();
for ($i = 0; $i < 5; $i++){
    $id = rand(1,50);
    if(!in_array($id,$featured_items)) {
        array_push($featured_items, $id);
    }else{
        $i--;
    }
}

//Most Popular (Currently IDs 1-5)
$popular_items = array(1,2,3,4,5);

//Current Deals (Currently 46-50)
$deal_items = array(46,47,48,49,50);

// Start Section
echo "<!-- Featured -->
        <div class='h-auto'>
            <h2>Featured Items</h2>";

// Start Deck
echo "<div class='card-deck p-4'>";

// Print Items
foreach ($featured_items as $item){
    $featured_query = "SELECT * FROM products WHERE p_id = '" . $item ."'";
    $featured_obj = mysqli_query($conn,$featured_query);
    $featured_row = mysqli_fetch_row($featured_obj);

    // Text Manipulation
    $featured_row[1] = ucwords($featured_row[1]);
    $featured_row[2] = tokenTruncate($featured_row[2],50);
    $featured_row[2] = utf8_encode($featured_row[2]);

    echo "<div class='card bg-light text-center'>
            <img src='./images/$featured_row[1]Thumb.png' class='card-img-top img-fluid' alt='Product Img.' width='400'>
            <div class='card-body'>
                <a href='viewproduct.php?p_id=$featured_row[0]'><h5 class='text-center card-title'>$featured_row[1]</h5></a>
                <p>$featured_row[2]</p>
            </div>
            <div class='card-footer text-center'>
                    <a type='button' class='btn btn-info' aria-label='View product' href='viewproduct.php?p_id=$featured_row[0]'>View</a>
            </div>
        </div>";
}

// End Deck
echo "</div>";

// TO-DO Make pagination functional
/*echo "<nav aria-label='Page Navigation'>
                <ul class='pagination justify-content-center'>
                    <li class='page-item active'>
                        <a class='page-link' href='#'>1 <span class='sr-only'>(current)</span></a></li>
                    <li class='page-item'><a class='page-link' href='#'>2</a>
                    </li>
                    <li class='page-item'><a class='page-link' href='#'>3</a></li>
                </ul>
            </nav>";*/

// End Section
echo "</div>";

// Start Section
echo "<!-- Popular -->
        <div class='h-auto'>
            <h2>Most Popular</h2>";

// Start Deck
echo "<div class='card-deck p-4'>";

// Print Items
foreach ($popular_items as $item){
    $featured_query = "SELECT * FROM products WHERE p_id = '" . $item ."'";
    $featured_obj = mysqli_query($conn,$featured_query);
    $featured_row = mysqli_fetch_row($featured_obj);

    // Text Manipulation
    $featured_row[1] = ucwords($featured_row[1]);
    $featured_row[2] = tokenTruncate($featured_row[2],50);
    $featured_row[2] = utf8_encode($featured_row[2]);

    echo "<div class='card bg-light text-center'>
            <img src='./images/$featured_row[1]Thumb.png' class='card-img-top img-fluid' alt='Product Img.' width='400'>
            <div class='card-body'>
                <a href='viewproduct.php?p_id=$featured_row[0]'><h5 class='text-center card-title'>$featured_row[1]</h5></a>
                <p>$featured_row[2]</p>
            </div>
            <div class='card-footer text-center'>
                    <a type='button' class='btn btn-info' aria-label='View product' href='viewproduct.php?p_id=$featured_row[0]'>View</a>
            </div>
        </div>";
}

// End Deck
echo "</div>";

// TO-DO Make pagination functional
/*echo "<nav aria-label='Page Navigation'>
                <ul class='pagination justify-content-center'>
                    <li class='page-item active'>
                        <a class='page-link' href='#'>1 <span class='sr-only'>(current)</span></a></li>
                    <li class='page-item'><a class='page-link' href='#'>2</a>
                    </li>
                    <li class='page-item'><a class='page-link' href='#'>3</a></li>
                </ul>
            </nav>";*/

// End Section
echo "</div>";

// Start Section
echo   "<!-- Deals -->
        <div class='h-auto'>
            <h2>Current Deals</h2>";

// Start Deck
echo "<div class='card-deck p-4'>";

// Print Items
foreach ($deal_items as $item){
    $featured_query = "SELECT * FROM products WHERE p_id = '" . $item ."'";
    $featured_obj = mysqli_query($conn,$featured_query);
    $featured_row = mysqli_fetch_row($featured_obj);

    // Text Manipulation
    $featured_row[1] = ucwords($featured_row[1]);
    $featured_row[2] = tokenTruncate($featured_row[2],50);
    $featured_row[2] = utf8_encode($featured_row[2]);

    echo "<div class='card bg-light text-center'>
            <img src='./images/$featured_row[1]Thumb.png' class='card-img-top img-fluid' alt='Product Img.' width='400'>
            <div class='card-body'>
                <a href='viewproduct.php?p_id=$featured_row[0]'><h5 class='text-center card-title'>$featured_row[1]</h5></a>
                <p>$featured_row[2]</p>
            </div>
            <div class='card-footer text-center'>
                    <a type='button' class='btn btn-info' aria-label='View product' href='viewproduct.php?p_id=$featured_row[0]'>View</a>
            </div>
        </div>";
}

// End Deck
echo "</div>";

// TO-DO Make pagination functional
/*echo "<nav aria-label='Page Navigation'>
                <ul class='pagination justify-content-center'>
                    <li class='page-item active'>
                        <a class='page-link' href='#'>1 <span class='sr-only'>(current)</span></a></li>
                    <li class='page-item'><a class='page-link' href='#'>2</a>
                    </li>
                    <li class='page-item'><a class='page-link' href='#'>3</a></li>
                </ul>
            </nav>";*/

// End Section
echo "</div>";
?>

    </div>
</div>

<?php
    include "footer.php";
?>
