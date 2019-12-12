<?php
include_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

<body>
  <?php

$inserted = Model::editUsers('','','','','');
var_dump($inserted);
if($inserted == false) {
    echo "neproběhl insert";
}
else {
    "úspěšně";
}


?>
  <form action="edit_user.php">

    <label for="name">Jméno</label>
    <input type="text" name="firstname" class="form-control" id="firstname" aria-describedby="name" placeholder="firstname"
      value="<?php echo $inserted['firstname'] ?>">

    <label for="surname">Přijmení</label>
    <input type="text" name="surname" class="form-control" id="surname" aria-describedby="surname" placeholder="surname"
      value="">

      <label for="email">Email</label>
    <input type="email" name="email" class="form-control" id="surname" aria-describedby="surname" placeholder="surname"
      value="">

      <label for="password">Heslo</label>
    <input type="password" name="password" class="form-control" id="surname" aria-describedby="surname" placeholder="surname"
      value="">

      <label for="role">Role</label>
    <input type="" name="role" class="form-control" id="" aria-describedby="" placeholder=""
      value="">

    <br>
    <input type="submit" value="submit">
  </form>