<?php
include_once "header.php";
include_once "nav.php";

session_start();
if (!($_SESSION["userRole"] == "1" || $_SESSION["userRole"] == "4")) {
    header("location:index.php");
}


$idRide = filter_input(INPUT_GET, 'id_ride');


$submit = filter_input(INPUT_POST, 'submit');



$user = filter_input(INPUT_POST, 'user');
$car= filter_input(INPUT_POST, 'car');
$timeLeft = filter_input(INPUT_POST, 'timeLeft');
$timeArrived= filter_input(INPUT_POST,'timeArrived');
$placeLeft = filter_input(INPUT_POST,'placeLeft');
$placeArrived = filter_input(INPUT_POST,'placeArrived');
$kmBefore = filter_input(INPUT_POST,'kmBefore');
$kmAfter = filter_input(INPUT_POST,'kmAfter');
$note = filter_input(INPUT_POST,'note');



if (isset($submit)){
  Model::editRides($user, $car, $timeLeft, $timeArrived, $placeLeft, $placeArrived, $kmBefore, $kmAfter, $note);
}

$ride = Model::getRideById($idRide);


?>
<form action="" method="post">

<label for="name">User</label>
  <input type="text" name="role" class="form-control" id="role" aria-describedby="name"
    placeholder="firstname" value="<?= $ride['id_user'] ?>">

  <label for="name">Car</label>
  <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="name"
    placeholder="firstname" value="<?= $ride['id_car'] ?>">

 



  <br>
  <input type="submit" value="submit" name = "submit">
</form>