<?php
include_once "nav.php";
include_once "header.php";
session_start();

if (!($_SESSION["userRole"]=="1" || $_SESSION["userRole"] == "3")) {
    header("location:index.php");

}
$submit = filter_input(INPUT_POST, "submit");
$drivers = Model::getAllDrivers();



if (isset($submit)) {
    $type = filter_input(INPUT_POST, "type");
    $SPZ = filter_input(INPUT_POST, "SPZ");
    foreach ($_POST['userSelect'] as $user) {
      $usersSelected[] = $user;
    }

    var_dump($usersSelected);
    
    $isAdded = Model::addCar($type, $SPZ);


    if ($isAdded) {
        echo "zápis proběhl v pořádku";
    } else {
        echo "něco se pos*alo";
    }
}


?>

<form action="" method="post">

  

  <label for="type">Type</label>
  <input type="text" name="type" class="form-control" id="type" aria-describedby="name" placeholder=""
    value="">

  <label for="SPZ">SPZ</label>
  <input type="text" name="SPZ" class="form-control" id="SPZ" aria-describedby="" placeholder="" value="">

  
  <?php
  if (!($_SESSION['userRole'] == '2' || $_SESSION['userRole'] == '4')) {
    ?>
    <label for="userSelect">Users</label>
    <select multiple id="userSelect" name="userSelect[]">
    <?php
    foreach ($drivers as $user) {
      ?>
      <option value="<?= $user['id_user'] ?>"><?= $user['firstname'] . " " . $user['surname'] ?></option>
      <?php
    }
    ?>
      
  </select><br>
    <?php
  }

  ?>


  <br>
  <input type="submit" value="odeslat" name="submit">
</form>