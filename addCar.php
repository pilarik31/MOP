<?php
include_once "nav.php";
include_once "header.php";
session_start();

if (!($_SESSION["userRole"]=="1" || $_SESSION["userRole"] == "3")) {
    header("location:index.php");

}
$submit = filter_input(INPUT_POST, "submit");



if (isset($submit)) {
    $type = filter_input(INPUT_POST, "type");
    $SPZ = filter_input(INPUT_POST, "SPZ");
    
    $isAdded = Model::addUser($type, $SPZ);


    if ($isAdded) {
        echo "zápis proběhl v pořádku";
    } else {
        echo "něco se pos*alo";
    }
}


?>

<form action="addUser.php" method="post">

  

  <label for="name">Type</label>
  <input type="text" name="type" class="form-control" id="type" aria-describedby="name" placeholder=""
    value="">

  <label for="surname">SPZ</label>
  <input type="text" name="SPZ" class="form-control" id="SPZ" aria-describedby="" placeholder="" value="">

  



  <br>
  <input type="submit" value="odeslat" name="submit">
</form>