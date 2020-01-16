<?php
include_once "header.php";

$submit = filter_input(INPUT_POST, "submit");



if (isset($submit)) {
  $role = filter_input(INPUT_POST, "role");
  $

  $isAdded = Model::addRide($role, $firstname, $surname, $email, $password);


  if($isAdded)
  {  echo "zápis proběhl v pořádku";

  }
  else {
    echo "něco se pos*alo";
  }

}






var_dump($submit);
  ?>


  <form action="addRide.php" method="post">

    <label for="role">Role</label> <br>
    <input type="radio" name="role" value="" >Admin<br>
    <input type="radio" name="role" value="" >Manažer vozového parku<br>
    <input type="radio" name="role" value="" >Řidič<br>
   
   



    <br>
    <input type="submit" value="odeslat" name="submit">
  </form>