<?php
include_once "header.php";


$submit = filter_input(INPUT_POST, "submit");



if (isset($submit)) {
  $role = filter_input(INPUT_POST, "role");
  $firstname = filter_input(INPUT_POST, "firstname");
  $surname = filter_input(INPUT_POST, "surname");
  $email = filter_input(INPUT_POST, "email");
  $password = filter_input(INPUT_POST, "password");

  $isAdded = Model::addUser($role, $firstname, $surname, $email, $password);


  if($isAdded)
  {  echo "zápis proběhl v pořádku";

  }
  else {
    echo "něco se pos*alo";
  }

}






var_dump($submit);
  ?>


  <form action="addUser.php" method="post">

    <label for="role">Role</label>
    <input type="" name="role" class="form-control" id="" aria-describedby="" placeholder="" value="">

    <label for="name">Firstname</label>
    <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="name" placeholder=""
      value="">

    <label for="surname">Surname</label>
    <input type="text" name="surname" class="form-control" id="" aria-describedby="" placeholder="" value="">

    <label for="email">email</label>
    <input type="email" name="email" class="form-control" id="" aria-describedby="" placeholder="" value="">

    <label for="password">password</label>
    <input type="password" name="password" class="form-control" id="" aria-describedby="" placeholder="" value="">



    <br>
    <input type="submit" value="odeslat" name="submit">
  </form>