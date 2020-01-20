<?php
include_once  "header.php";
include_once  "nav.php";
session_start();
var_dump($_SESSION["userRole"]);
?>
 
  
 <h3>Jsi přihlášen jako <?php echo  ($_SESSION["userRole"]) ?> </h3>
 
