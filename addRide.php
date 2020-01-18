<?php
include_once "header.php";
include_once "nav.php";
session_start();

$submit = filter_input(INPUT_POST, "submit");



if (isset($submit)) {
  $user = filter_input(INPUT_POST,"name");
  $car =  filter_input(INPUT_POST,"car");
  $time =  filter_input(INPUT_POST,"time");
  $placeLeft = filter_input(INPUT_POST, "placeL");
  $placeArrived = filter_input(INPUT_POST, "placeA");
  $timeLeft = filter_input(INPUT_POST, "timeL");
var_dump($timeLeft);
  $timeArrived = filter_input(INPUT_POST, "timeA");
  $note = filter_input(INPUT_POST, "note");
  $kmBefore = filter_input(INPUT_POST, "kmBefore");
  $kmAfter = filter_input(INPUT_POST, "kmAfter");

  $isAdded = Model::addRide($user, $car, $timeLeft, $timeArrived,$placeLeft, $placeArrived, $kmBefore, $kmAfter, $note);


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

    <!-- <label for="role">Role</label> <br>
    <input type="radio" name="role" value="" >Admin<br>
    <input type="radio" name="role" value="" >Manažer vozového parku<br>
    <input type="radio" name="role" value="" >Řidič<br> --> 
   
    <label for="id_user">ID user</label>
    <input type="text" name="name" class="form-control" id=""  placeholder="" >
    <label for="id_car">ID car</label>
    <input type="text" name="car" class="form-control" id=""  placeholder="" >
    <label for="placeL">Place Left</label>
    <input type="text" name="placeL" class="form-control" id=""  placeholder="" >
    <label for="placeA">Place Arrive</label>
    <input type="text" name="placeA" class="form-control" id=""  placeholder="" >
    <label for="timeL">Time L</label>
    <input type="datetime-local" name="timeL" class="form-control" id=""  placeholder="" >
    <label for="timeA">Time A</label>
    <input type="text" name="timeA" class="form-control" id=""  placeholder="" >
    <label for="kmBefore">km</label>
    <input type="text" name="kmBefore" class="form-control" id=""  placeholder="" >
    <label for="kmAfter">km</label>
    <input type="text" name="kmAfter" class="form-control" id=""  placeholder="" >
    <label for="note">Note</label>
    <input type="text" name="note" class="form-control" id=""  placeholder="" >
    <br>
    <input type="submit" value="odeslat" name="submit">
  </form>