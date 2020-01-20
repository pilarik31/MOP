<?php
include_once "header.php";
include_once "nav.php";
if (!($_SESSION["userRole"]=="1" || $_SESSION["userRole"]=="4")) {
    header("location:index.php");

}
$submit = filter_input(INPUT_POST, "submit");



if (isset($submit)) {
  $car =  filter_input(INPUT_POST,"car");

  $placeLeft = filter_input(INPUT_POST, "placeL");
  $placeArrived = filter_input(INPUT_POST, "placeA");
  $timeLeft = filter_input(INPUT_POST, "timeL");
var_dump($timeLeft);
  $timeArrived = filter_input(INPUT_POST, "timeA");
  $note = filter_input(INPUT_POST, "note");
  $kmBefore = filter_input(INPUT_POST, "kmBefore");
  $kmAfter = filter_input(INPUT_POST, "kmAfter");

  $isAdded = Model::addRide($car, $timeLeft, $timeArrived,$placeLeft, $placeArrived, $kmBefore, $kmAfter, $note);


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
   
    
    <label for="role">Car</label><br>
  <select id="role" name="car">
  <option value="1">1</option>
  <option value="2">1</option>
  <option value="3">1</option>
  <option value="4">1</option> 
  </select><br>
    <label for="placeL">Place Left</label>
    <input type="text" name="placeL" class="form-control" id=""  placeholder="" >
    <label for="placeA">Place Arrive</label>
    <input type="text" name="placeA" class="form-control" id=""  placeholder="" >
    <label for="timeL">Time L</label>
    <input type="datetime-local" name="timeL" class="form-control" id=""  placeholder="" >
    <label for="timeA">Time A</label>
    <input type="datetime-local" name="timeA" class="form-control" id=""  placeholder="" >
    <label for="kmBefore">km</label>
    <input type="text" name="kmBefore" class="form-control" id=""  placeholder="" >
    <label for="kmAfter">km</label>
    <input type="text" name="kmAfter" class="form-control" id=""  placeholder="" >
    <label for="note">Note</label>
    <input type="text" name="note" class="form-control" id=""  placeholder="" >
    <br>
    <input type="submit" value="odeslat" name="submit">
  </form>