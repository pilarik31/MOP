    <?php
include_once 'header.php';
include_once 'nav.php';
session_start();
if (!($_SESSION["userRole"]=="1" || $_SESSION["userRole"] == "3")) {
    header("location:index.php");
}

?>
    <!DOCTYPE html>
    <html lang="en">


    <body>
        <?php
$cars = Model::getAllCars();



?>
 <br>
    <h2>CARS</h2>
    <a class="btn btn-secondary background-btn" href="addCar.php">Add car</a>
        <div class="table-responsive">
            <table class=" table table-striped table-sm">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>type</th>
                        <th>SPZ</th>
                        <th>edit</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
            foreach ($cars as $car) {
                ?> <tr>
                        <td><?php echo $car['id_car'] ?></td>
                        <td><?php echo $car['type'] ?></td>
                        <td><?php echo $car['SPZ'] ?></td>
                        <td>
                        <a href="edit_car.php?id_car=<?= $car['id_car'] ?>">edit </a>
                    </td>

                    </tr>
                    <?php
            }

               ?>

                </tbody>
            </table>
        </div>