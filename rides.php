<?php
include_once  "header.php";
include_once "nav.php";
session_start();
if (!($_SESSION["userRole"] == "1" || $_SESSION["userRole"] == "4")) {
    header("location:index.php");
}
?>
<br><br>
<h3>Rides</h3>
<a class="btn btn-secondary background-btn" href="addRide.php">Add ride</a>
<div class="table-responsive">
    <?php if ($_SESSION["userRole"] == "1") {
            $rides = Model::getAllRides(); ?>

    <table class=" table table-striped ">
        <thead>
            <tr>
                <th>id</th>
                <th>car</th>
                <th>TL</th>
                <th>TA</th>
                <th>PL</th>
                <th>PA</th>
                <th>km</th>
                <th>km</th>
                <th>note</th>
                <th>edit</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($rides as $ride) {
                ?>
                    <tr>

                <td><?= $ride['id_ride'] ?></td>

                <td><?= $ride['id_car'] ?></td>
                <td><?= date("j.n.Y - G:i:s", strtotime($ride['time_left'])) ?></td>
                <td><?= date("j.n.Y - G:i:s", strtotime($ride['time_arrived'])) ?></td>
                <td><?= $ride['place_left'] ?></td>
                <td><?= $ride['time_arrived'] ?></td>
                <td><?= $ride['km_before'] ?></td>
                <td><?= $ride['km_after'] ?></td>
                <td><?= $ride['note'] ?></td>
                <td>
                    <a href="edit_ride.php?id_ride=<?= $ride['id_ride'] ?>">edit </a>
                </td>




            </tr>
                <?php
            } ?></tbody>
    </table> <?php
    } else {
        $driverRides = Model::getAllDriverRides($_SESSION['userId']['id_user']);
        ?>

    <table class=" table table-striped ">
        <thead>
            <tr>
                <th>id</th>
                <th>car</th>
                <th>TL</th>
                <th>TA</th>
                <th>PL</th>
                <th>PA</th>
                <th>km</th>
                <th>km</th>
                <th>note</th>
                <th>edit</th>


            </tr>
        </thead>
        <tbody>
        <?php
        foreach ($driverRides as $driverRide) {
            ?><tr>

                <td><?= $driverRide['id_ride'] ?></td>
                <td><?= $driverRide['id_car'] ?></td>
                <td><?= date("j.n.Y - G:i:s", strtotime($driverRide['time_left'])) ?></td>
                <td><?= date("j.n.Y - G:i:s", strtotime($driverRide['time_arrived'])) ?></td>
                <td><?= $driverRide['place_left'] ?></td>
                <td><?= $driverRide['time_arrived'] ?></td>
                <td><?= $driverRide['km_before'] ?></td>
                <td><?= $driverRide['km_after'] ?></td>
                <td><?= $driverRide['note'] ?></td>

                <td>
                    <a href="edit_ride.php?id_ride=<?= $driverRide['id_ride'] ?>">edit </a>
                </td>
            </tr>

<?php
    } ?> </tbody>
    </table> 
        </tbody>
    </table>
        <?php
    }
    ?>


</div>