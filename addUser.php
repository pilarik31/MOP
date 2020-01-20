<?php
include_once "header.php";
include_once "nav.php";

session_start();
if (!($_SESSION["userRole"]=="1")) {
    header("location:index.php");

}

$cars = Model::getAllCars();

$submit = filter_input(INPUT_POST, "submit");



if (isset($submit)) {
    $role = filter_input(INPUT_POST, "role");
    $firstname = filter_input(INPUT_POST, "firstname");
    $surname = filter_input(INPUT_POST, "surname");
    $email = filter_input(INPUT_POST, "email");
    $password = filter_input(INPUT_POST, "password");

    $isAdded = Model::addUser($role, $firstname, $surname, $email, $password);


    if ($isAdded) {
        echo "zápis proběhl v pořádku";
    } else {
        echo "něco se pos*alo";
    }
}






var_dump($submit);
  ?>


<form action="addUser.php" method="post">
  <label for="role">Role</label><br>
  <select id="role" name="role">
  <option value="1">Admin</option>
  <option value="2">Manager</option>
  <option value="3">Dispatcher</option>
  <option value="4">Rider</option> 
  </select><br>

  <label for="name">Firstname</label>
  <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="name" placeholder=""
    value="">

  <label for="surname">Surname</label>
  <input type="text" name="surname" class="form-control" id="" aria-describedby="" placeholder="" value="">

  <label for="email">email</label>
  <input type="email" name="email" class="form-control" id="" aria-describedby="" placeholder="" value="">

  <label for="password">password</label>
  <input type="password" name="password" class="form-control" id="" aria-describedby="" placeholder="" value="">

  <?php
  if ($_SESSION['userRole'] == '1') {
    ?>
    <label for="carSelect">Cars</label>
    <select multiple id="carSelect" name="carSelect">
    <?php
    foreach ($cars as $car) {
      ?>
      <option value="<?= $car['id_car'] ?>"><?= $car['type'] ?></option>
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