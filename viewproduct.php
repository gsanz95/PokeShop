<?php
include "sidebar.php";
include "cartbutton.php";
?>

<!-- Page Content -->
<div class='col-lg-10 h-100 col-sm-9 col-12'>
    <div class='container-fluid'>
        <div class='row'>

<?php
// Database Config
include "config.php";
include "functions.php";

//Query specific pokemon
$pokemon_query = "SELECT * FROM products WHERE p_id='" . $_GET['p_id'] . "'";
$pokemon_arr = mysqli_query($conn, $pokemon_query);
$pokemon = mysqli_fetch_array($pokemon_arr,MYSQLI_NUM);

//Query Related Products
$related_query = "SELECT * FROM products WHERE INSTR(p_type, '" . strtok($pokemon[10],"\n\t,") . "') > 0";
$related_obj = mysqli_query($conn,$related_query);
$related_arr = $related_obj->fetch_all(MYSQLI_NUM);


// Text manipulation
$pokemon[1] = ucwords($pokemon[1]);
$pokemon[10] = ucwords($pokemon[10]);
$pokemon[7] = ucwords($pokemon[7]);
$pokemon[8] = ucwords($pokemon[8]);
$pokemon[9] = ucwords($pokemon[9]);
$pokemon[11] = ucwords($pokemon[11]);

// Print page content
echo "  <div class='img-fluid p-5 col'>                    
            <img src='./images/$pokemon[1]Full.png' height='600' width='600' class='img-fluid'>
        </div>
        <div class='col px-4 pt-5'>
            <h2 class='font-weight-bold' aria-label='Product Name'>$pokemon[1]</h2>
            <h5>Types: </h5><a>$pokemon[10]</a><br><br>
            <h6>Pokemon Description:</h6>
            <p class='my-3'>$pokemon[2]</p>
    
            <p><span class='h6'>Height: </span>$pokemon[3]'&nbsp;$pokemon[4]\"</p>
    
            <p><span class='h6'>Weight: </span> $pokemon[5]lbs</p>";

// TO-DO If there are both genders make the customer choose
if($pokemon[6] == 'b'){
    echo "<p><span class='h6'>Gender: </span>Male & Female";
}elseif($pokemon[6] == 'm'){
    echo "<p><span class='h6'>Gender: </span>Male</p>";
}elseif($pokemon[6] == 'f'){
    echo "<p><span class='h6'>Gender: </span>Female</p>";
}

    
echo     "<p><span class='h6'>Category: </span>$pokemon[7]</p>";

if($pokemon[8] === null) {
    echo "<p><span class='h6'>Abilities: </span>$pokemon[8]</p>";
}

if($pokemon[9] != 'NULL') {
    echo "<p><span class='h6'>Intimidate: </span>$pokemon[9]</p>";
}
    
echo "<p><span class='h6'>Weakness: </span>$pokemon[11]</p>
            <form method='get' action='carthandler.php'>
                <div class='form-inline justify-content-end my-2'>
                    <label for='itemQuantity'><h5>Qty: </h5></label>
                    <select class='custom-select' name='qty' id='qty'>
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                        <option value='3'>3</option>
                        <option value='4'>4</option>
                        <option value='5'>5</option>
                        <option value='6'>6</option>
                        <option value='7'>7</option>
                        <option value='8'>8</option>
                        <option value='9'>9</option>
                        <option value='10'>10</option>
                        <option value='11'>11</option>
                    </select>
                </div>
                <input type='hidden' id='p_id' name='id' value='$pokemon[0]'>
                <button type='submit' id='btnAddToCart' class='btn btn-info btn-block'><i class='fas fa-plus'></i> Add To Cart</button>
            </form>
            <h4 class='text-right'>Price: <span class='text-danger'>\$$pokemon[12]</span></h4>
            <h5 class='text-right'>Estimated Delivery Date: <span class='text-danger'>Coming Soon!</span></h5>
            </div>
        </div>
        
        <div class='container-fluid m-0 p-0'>
            <h4>Related Pokemon</h4>
        </div>";

//Debug
//echo $related_query;
//print_r($related_arr);
$x = 0;
foreach ($related_arr as $related){
    if(($x % 5) == 0){
        echo "<div class='card-deck container-fluid pb-2'>";
    }
    if($pokemon[0] === $related[0]) {
        continue;
    }

    $related[1] = ucwords($related[1]);
    $related[2] = tokenTruncate($related[2],50) . "...";

    echo "<!-- Item Row must always have 5+ cards-->
            <div class='card'>
                <img class='card-img-top img-fluid' src='./images/$related[1]Thumb.png' width='400'>
                <div class='card-body'>
                    <a href='viewproduct.php?p_id=$related[0]'><h5 class='text-center card-title'>$related[1]</h5></a>
                    <p class='card-text'>$related[2]</p>
                </div>
                <div class='card-footer text-center'>
                    <a type='button' class='btn btn-info' aria-label='View product' href='viewproduct.php?p_id=$related[0]'>View</a>
                </div>
          </div>";

    if(($x % 5) == 4)
    {
        break;
    }
    $x++;
}


for($i = $x;$i < 4; $i++){
    echo "<div class='card'></div>";
}

echo "    </div>
        </div>
    </div>";
?>
<?php
include "footer.php";
?>
