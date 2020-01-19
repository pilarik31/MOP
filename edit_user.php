<?php
include_once "header.php";
include_once "nav.php";
session_start();
session_start();
if (!($_SESSION["userRole"]=="1")) {
    header("location:index.php");

}

 $idUser = filter_input(INPUT_GET, 'id_user');


$submit = filter_input(INPUT_POST, 'submit');



$id_role = filter_input(INPUT_POST, 'role');
$firstname= filter_input(INPUT_POST, 'firstname');
$surname = filter_input(INPUT_POST, 'surname');
$email= filter_input(INPUT_POST,'email');
$password = filter_input(INPUT_POST,'password');


if (isset($submit)){
  var_dump(Model::editUser($idUser, $id_role, $firstname, $surname, $email, $password));
}

$user = Model::getUserById($idUser);

?>
<form action="" method="post">

<label for="name">Role</label>
  <input type="text" name="role" class="form-control" id="role" aria-describedby="name"
    placeholder="firstname" value="<?= $user['id_role'] ?>">

  <label for="name">Jméno</label>
  <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="name"
    placeholder="firstname" value="<?= $user['firstname'] ?>">

  <label for="surname">Přijmení</label>
  <input type="text" name="surname" class="form-control" id="surname" aria-describedby="surname" placeholder="surname"
    value="<?= $user['surname'] ?>">

  <label for="email">Email</label>
  <input type="email" name="email" class="form-control" id="surname" aria-describedby="surname" placeholder="surname"
    value="<?= $user['email'] ?>">

  <label for="password">Heslo</label>
  <input type="password" name="password" class="form-control" id="surname" aria-describedby="surname"
    placeholder="password" value="">



  <br>
  <input type="submit" value="submit" name = "submit">
</form>