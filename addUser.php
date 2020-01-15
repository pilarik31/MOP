<?php
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
  <?php

$submit = filter_input(INPUT_POST, "submit");


$isAdded = Model::addUser('','','','','');
if(!$isAdded) {
    echo "proběhl";
}
else {
    "Something went wrong";
}


if ($submit == 'odeslat') {
    echo "formulář byl odeslán";
}
else {
  "something weng wrong!!";

}


var_dump($submit);
  ?>


<form action="addUser.php" method="post">

<label for="role">Role</label>
<input type="" name="role" class="form-control" id="" aria-describedby="" placeholder=""
  value="">

<label for="name">Firstname</label>
<input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="name" placeholder=""
  value="">

<label for="surname">Surname</label>
<input type="text" name="surname" class="form-control" id="" aria-describedby="" placeholder=""
  value="">

  <label for="email">email</label>
<input type="email" name="email" class="form-control" id="" aria-describedby="" placeholder=""
  value="">

  <label for="password">password</label>
<input type="password" name="password" class="form-control" id="" aria-describedby="" placeholder=""
  value="">

  

<br>
<input type="submit" value="odeslat" name="submit">
</form>

