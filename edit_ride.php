<?php
include_once "header.php";

if (!($_SESSION["userRole"] == "1" || $_SESSION["userRole"] == "4")) {
    header("location:index.php");
}


$idRide = filter_input(INPUT_GET, 'id_ride');


$submit = filter_input(INPUT_POST, 'submit');


$idUser = filter_input(INPUT_POST, 'user');
$car= filter_input(INPUT_POST, 'car');
$timeLeft = filter_input(INPUT_POST, 'timeLeft');
$timeArrived= filter_input(INPUT_POST,'timeArrived');
$placeLeft = filter_input(INPUT_POST,'placeLeft');
$placeArrived = filter_input(INPUT_POST,'placeArrived');
$kmBefore = filter_input(INPUT_POST,'kmBefore');
$kmAfter = filter_input(INPUT_POST,'kmAfter');
$note = filter_input(INPUT_POST,'note');




if (isset($submit)){
  Model::editRides($idRide, $idUser, $car, $timeLeft, $timeArrived, $placeLeft, $placeArrived, $kmBefore, $kmAfter, $note);
}

$ride = Model::getRideById($idRide);


?>
<form action="" method="post">

<label for="name">User</label>
  <input type="text" name="user" class="form-control" id="firstname" aria-describedby="name"
    value="<?= $ride['id_user'] ?>">

  <label for="name">ID Car</label>
  <input type="text" name="car" class="form-control" id="firstname" aria-describedby="name"
    value="<?= $ride['id_car'] ?>">

  <label for="name">Time Left</label>
  <input type="text" name="timeLeft" class="form-control" id="firstname" aria-describedby="name"
    value="<?= $ride['time_left'] ?>">

  <label for="name">Time Arrived</label>
  <input type="text" name="timeArrived" class="form-control" id="firstname" aria-describedby="name"
    value="<?= $ride['time_arrived'] ?>">

  <label for="name">Place Left</label>
  <input type="text" name="placeLeft" class="form-control" id="firstname" aria-describedby="name"
    value="<?= $ride['place_left'] ?>">

  <label for="name">Place Arrived</label>
  <input type="text" name="placeArrived" class="form-control" id="firstname" aria-describedby="name"
    value="<?= $ride['place_arrived'] ?>">

  <label for="name">KM Before</label>
  <input type="text" name="kmBefore" class="form-control" id="firstname" aria-describedby="name"
    value="<?= $ride['km_before'] ?>">

  <label for="name">KM After</label>
  <input type="text" name="kmAfter" class="form-control" id="firstname" aria-describedby="name"
    value="<?= $ride['km_after'] ?>">

  <label for="name">Note</label>
  <input type="text" name="note" class="form-control" id="firstname" aria-describedby="name"
    value="<?= $ride['note'] ?>">





  <br>
  <input type="submit" value="submit" name="submit">
</form>