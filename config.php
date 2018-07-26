<?php

// MySQL credentials
$servername = "pokemart.cpnngrjylxoa.us-east-2.rds.amazonaws.com";
$username = "master";
$serverpassword = "password123";
$dbname = "pokemart";

// Create connection
$conn = mysqli_connect($servername, $username, $serverpassword, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
