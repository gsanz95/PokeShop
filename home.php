<?php
session_start();
include "sidebar.php";
include "cartbutton.php";
?>

        <!-- Page Content -->
<div class='col-lg-10 h-100 col-sm-9 col-12'>
    <div id='page-header' class='alert-heading'>
        <h1 class='text-center font-weight-bold' aria-label='Welcome to the PokeShop!'>Welcome to the PokeShop!</h1>
    </div>
    <div class='h-auto'>
        <!-- Featured -->
        <div class='h-auto'>
            <h2>Featured Items</h2>
            <div class='card-deck p-4'>
                <div class='card bg-light text-center'>
                    <img src='images/ArticunoThumb.png' class='card-img-top' alt='Product Img.'>
                    <a href='viewproduct.php' name='Articuno'>Articuno ($20.00)</a>
                </div>

                <div class='card bg-light text-center'>
                    <img src='images/ZapdosThumb.png' class='card-img-top' alt='Product Img.'>
    <a href='viewproduct.php' name='Zapdos'>Zapdos ($20.00)</a>
                </div>

                <div class='card bg-light text-center'>
                    <img src='images/PidgeottoThumb.png' class='card-img-top' alt='Product Img.'>
    <a href='viewproduct.php' name='Pidgeotto'>Pidgeotto ($20.00)</a>
                </div>

                <div class='card bg-light text-center'>
                    <img src='images/SnorlaxThumb.png' class='card-img-top' alt='Product Img.'>
    <a href='viewproduct.php' name='Snorlax'>Snorlax ($20.00)</a>
                </div>

                <div class='card bg-light text-center'>
                    <img src='images/CharizardThumb.png' class='card-img-top' alt='Product Img.'>
    <a href='viewproduct.php' name='Charizard'>Charizard ($20.00)</a>
                </div>
            </div>
            <nav aria-label='Page Navigation'>
                <ul class='pagination justify-content-center'>
                    <li class='page-item active'>
                        <a class='page-link' href='#'>1 <span class='sr-only'>(current)</span></a></li>
                    <li class='page-item'><a class='page-link' href='#'>2</a>
                    </li>
                    <li class='page-item'><a class='page-link' href='#'>3</a></li>
                </ul>
            </nav>

        </div>
        <!-- Popular -->
        <div class='h-auto'>
            <h2>Most Popular</h2>
            <div class='card-deck p-4'>
                <div class='card bg-light text-center'>
                    <img src='images/CharmanderThumb.png' class='card-img-top' alt='Product Img.'>
    <a href='viewproduct.php' name='Charmander'>Charmander ($20.00)</a>
                </div>
                <div class='card bg-light text-center'>
                    <img src='images/BlastoiseThumb.png' class='card-img-top' alt='Product Img.'>
    <a href='viewproduct.php' name='Blastoise'>Blastoise ($20.00)</a>
                </div>
                <div class='card bg-light text-center'>
                    <img src='images/LaprasThumb.png' class='card-img-top' alt='Product Img.'>
    <a href='viewproduct.php' name='Lapras'>Lapras ($20.00)</a>
                </div>
                <div class='card bg-light text-center'>
                    <img src='images/GyaradosThumb.png' class='card-img-top' alt='Product Img.'>
    <a href='viewproduct.php' name='Gyarados'>Gyarados ($20.00)</a>
                </div>
                <div class='card bg-light text-center'>
                    <img src='images/DratiniThumb.png' class='card-img-top' alt='Product Img.'>
    <a href='viewproduct.php' name='Dratini'>Dratini ($20.00)</a>
                </div>
            </div>

            <nav aria-label='Page Navigation'>
                <ul class='pagination justify-content-center'>
                    <li class='page-item active'>
                        <a class='page-link' href='#'>1 <span class='sr-only'>(current)</span></a></li>
                    <li class='page-item'><a class='page-link' href='#'>2</a>
                    </li>
                    <li class='page-item'><a class='page-link' href='#'>3</a></li>
                </ul>
            </nav>
        <!-- Deals -->
        <div class='h-auto'>
            <h2>Current Deals</h2>
            <div class='card-deck p-4'>
                <div class='card bg-light text-center'>
                    <img src='media/earth.jpg' class='card-img-top' alt='Product Img.'>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                </div>

                <div class='card bg-light text-center'>
                    <img src='media/earth.jpg' class='card-img-top' alt='Product Img.'>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                </div>

                <div class='card bg-light text-center'>
                    <img src='media/earth.jpg' class='card-img-top' alt='Product Img.'>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                </div>

                <div class='card bg-light text-center'>
                    <img src='media/earth.jpg' class='card-img-top' alt='Product Img.'>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                </div>

                <div class='card bg-light text-center'>
                    <img src='media/earth.jpg' class='card-img-top' alt='Product Img.'>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt, quae.</p>
                </div>
            </div>
            <nav aria-label='Page Navigation'>
                <ul class='pagination justify-content-center'>
                    <li class='page-item active'>
                        <a class='page-link' href='#'>1 <span class='sr-only'>(current)</span></a></li>
                    <li class='page-item'><a class='page-link' href='#'>2</a>
                    </li>
                    <li class='page-item'><a class='page-link' href='#'>3</a></li>
                </ul>
            </nav>
        </div>
    </div>
</div>

<?php
    include "footer.php";
?>