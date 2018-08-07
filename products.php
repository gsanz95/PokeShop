<?php
include "sidebar.php";
include "cartbutton.php";
if (isset($_POST['checkout'])) {
    // do something for checkout
}
?>

<!-- Page Content -->
<div class='col-lg-10 h-100 col-sm-9 col-12'>
    <div id='page-header' class='pt-5 pl-3 pb-3 pr-2'>
        <h1 class='font-weight-bold' aria-label='Products'>Products</h1>
    </div>
    <div class='h-auto'>

<?php
//Include Database Config
include "config.php";
include "functions.php";
//Query all pokemon
$products_query = "SELECT * FROM products";
$products_arr = mysqli_query($conn, $products_query);
$products_arr = $products_arr->fetch_all(MYSQLI_NUM);


//Debug
//print_r($products_arr);

//Create a card deck for each row of 5
$x = 0;
foreach ($products_arr as $pokemon){
    if(($x % 5) == 0){
        echo "<div class='card-deck container-fluid pb-2'>";
    }

    $pokemon[1] = ucwords($pokemon[1]);
    $pokemon[2] = tokenTruncate($pokemon[2],50) . "...";
    $pokemon[2] = utf8_encode($pokemon[2]);

    echo "<!-- Item Row must always have 5+ cards-->
            <div class='card'>
                <img class='card-img-top img-fluid' src='./images/$pokemon[1]Thumb.png' width='400'>
                <div class='card-body'>
                    <a href='viewproduct.php?p_id=$pokemon[0]'><h5 class='text-center card-title'>$pokemon[1]</h5></a>
                    <p class='card-text'>$pokemon[2]</p>
                </div>
                <div class='card-footer text-center'>
                    <a type='button' class='btn btn-info' aria-label='View product' href='viewproduct.php?p_id=$pokemon[0]'>View</a>
                </div>
          </div>";

    if(($x % 5) == 4)
    {
        echo "</div>";
    }
    $x++;
}


?>

    </div>
</div>

<?php
include "footer.php";
?>
