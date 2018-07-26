<?php
// Ends session and returns user to Login page
session_start();
session_destroy();
header('Location: login.php');
exit;
?>
