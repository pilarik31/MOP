<?php
include_once "header.php";
session_start();

  

$inserted = Model::editUser('','','','','');
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