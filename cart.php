<?php
session_start();
include "sidebar.php";
?>
            <!-- Page Content -->
            <div class="col-lg-10 h-100 col-sm-9 col-12">
                <div id="page-header" class="alert-heading">
                    <h2 class="font-weight-bold pl-5 pt-5" aria-label="Your Cart">Your Cart</h2>
                </div>
                <div class="h-auto list-group" id="itemList">
                    <!-- Item -->
                    <div id="item1" class="card w-100 container-fluid">
                        <div class="row">
                            <div class="card-body col-md-8">
                                <img src="./images/CharmanderThumb.png" class="float-left" height="200">
                                <h5 class="card-title">Charmander</h5>
				<p>Category: Lizard</p> Abilities: Blaze</p>
				<p>Type: Fire</p>
                            </div>
                            <div class="card-body col-md-4">
                                <p>Price: $40.00<br>Qty: 2</p>
                                <button type="button" class="btn btn-danger" id="btnRemove1" onclick="removeItem(this)"><i class="fas fa-trash"></i> Remove</button>
                            </div>
                        </div>
                    </div>
                    <!-- Item 
                    <div id="item2" class="card w-100 container-fluid">
                        <div class="row">
                            <div class="card-body col-md-8">
                                <img src="media/pokeball.png" class="float-left" height="200">
                                <h5 class="card-title">Item 2</h5>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eum, magni.</p>
                            </div>
                            <div class="card-body col-md-4">
                                <p>Price: <br>Qty:</p>
                                <button type="button" class="btn btn-danger" id="btnRemove2" onclick="removeItem(this)"><i class="fas fa-trash"></i> Remove</button>
                            </div>
                        </div>
                    </div>
	            -->
                </div>
                <button type="button" id="btnCheckout" class="btn btn-primary btn-lg float-right" onclick="checkout()"><i class="fas fa-shopping-cart"></i> Checkout</button>
            </div>
        </div>
<?php
    include "footer.php";
?>
