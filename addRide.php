<?php
include_once "header.php";
if (!($_SESSION["userRole"] == "1" || $_SESSION["userRole"] == "4")) {
    header("location:index.php");
}

$submit = filter_input(INPUT_POST, "submit");



if (isset($submit)) {
    $idUser = filter_input(INPUT_POST, "user");
    $car = filter_input(INPUT_POST, "car");
    $timeLeft = filter_input(INPUT_POST, "timeL");
    $timeArrived = filter_input(INPUT_POST, "timeA");
    $placeLeft = filter_input(INPUT_POST, "placeL");
    $placeArrived = filter_input(INPUT_POST, "placeA");
    $kmBefore = filter_input(INPUT_POST, "kmBefore");
    $kmAfter = filter_input(INPUT_POST, "kmAfter");
    $note = filter_input(INPUT_POST, "note");

    $isAdded = Model::addRide(
      $idUser, $car, $timeLeft, $timeArrived, $placeLeft, $placeArrived, $kmBefore, $kmAfter, $note

     
    );
    var_dump($isAdded);

    
    if ($isAdded) {
        echo "zápis proběhl v pořádku";
    } else {
        echo "něco se pos*alo";
    }
}
?>


  <form action="addRide.php" method="post">

    <label for="user">Řidič</label> <br>
    <input type="radio" name="user" value="4" >1<br>
    <input type="radio" name="user" value="4" >2<br>
    <input type="radio" name="user" value="4" >3<br> 

  <label for="car">Vozidlo</label><br>
  <select id="car" name="car">
  <option value="1">1</option>
  <option value="2">1</option>
  <option value="3">1</option>
  <option value="4">1</option> 
  </select><br> 
    <label for="placeL">Místo odjezdu</label>
    <input type="text" name="placeL" class="form-control" id=""  placeholder="" >
    <label for="placeA">Místo příjezdu</label>
    <input type="text" name="placeA" class="form-control" id=""  placeholder="" >
    <label for="timeL">Datum a čas odjezdu</label>
    <input type="datetime-local" name="timeL" class="form-control" id=""  placeholder="" >
    <label for="timeA">Datum a čas příjezdu</label>
    <input type="datetime-local" name="timeA" class="form-control" id=""  placeholder="" >
    <label for="kmBefore">Kilometry před</label>
    <input type="text" name="kmBefore" class="form-control" id=""  placeholder="" >
    <label for="kmAfter">Kilometry po</label>
    <input type="text" name="kmAfter" class="form-control" id=""  placeholder="" >
    <label for="note">Poznámka</label>
    <input type="text" name="note" class="form-control" id=""  placeholder="" >
    <br>
    <input type="submit" value="přidat" name="submit">
  </form>
