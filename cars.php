<?php
include_once 'header.php';
if (!($_SESSION["userRole"] == "1" || $_SESSION["userRole"] == "3")) {
    header("Location: index.php");
}

$cars = Model::getAllCars();



?>
<br>
<h2>Vozidla</h2>
<a class="btn btn-secondary background-btn" href="addCar.php">Přidal vozidlo</a>
<div class="table-responsive">
    <table class=" table table-striped table-sm">
        <thead>
            <tr>
                <th>ID</th>
                <th>Typ vozidla</th>
                <th>SPZ</th>
                <th>KM celkem</th>
                <th>Úprava</th>

            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($cars as $car) {
            ?> <tr>
                    <td><?= $car['id_car'] ?></td>
                    <td><a href="carDetail.php?id_car=<?= $car['id_car'] ?>"><?= $car['type'] ?></a></td>
                    <td><?= $car['SPZ'] ?></td>
                    <td><?= $car['total_km'] ?></td>
                    <td>
                        <a href="edit_car.php?id_car=<?= $car['id_car'] ?>">upravit </a>
                    </td>

                </tr>
            <?php
            }

            ?>

        </tbody>
    </table>
</div>