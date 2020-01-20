<?php
include_once  "header.php";
include_once "nav.php";
session_start();
if (!($_SESSION["userRole"]=="1" || $_SESSION["userRole"]=="4")) {
    header("location:index.php");
}
?>

<body>
    <br><br>
    <h3>Rides</h3>
    <a class="btn btn-secondary background-btn" href="addRide.php">Add ride</a>
    <div class="table-responsive">
        <?php if ($_SESSION["userRole"]=="1") {
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
        ?><tr>

                    <td><?php echo $ride['id_ride'] ?></td>

                    <td><?php echo $ride['id_car'] ?></td>
                    <td><?php echo $ride['time_left'] ?></td>
                    <td><?php echo $ride['time_arrived'] ?></td>
                    <td><?php echo $ride['place_left'] ?></td>
                    <td><?php echo $ride['time_arrived'] ?></td>
                    <td><?php echo $ride['km_before'] ?></td>
                    <td><?php echo $ride['km_after'] ?></td>
                    <td><?php echo $ride['note'] ?></td>
                    <td>
                        <a href="edit_ride.php?id_ride=<?= $ride['id_ride'] ?>">edit </a>
                    </td>




        </tr>
        <?php
    } ?></tbody>
    </table> <?php
    
} else {
    var_dump($_SESSION);
    $driverRides = Model::getAllDriverRides( $_SESSION["userId"]); 
    var_dump($driverRides);
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
    
                        <td><?php echo $driverRide['id_ride'] ?></td>
                        <td><?php echo $driverRide['id_car'] ?></td>
                        <td><?php echo $driverRide['time_left'] ?></td>
                        <td><?php echo $driverRide['time_arrived'] ?></td>
                        <td><?php echo $driverRide['place_left'] ?></td>
                        <td><?php echo $driverRide['time_arrived'] ?></td>
                        <td><?php echo $driverRide['km_before'] ?></td>
                        <td><?php echo $driverRide['km_after'] ?></td>
                        <td><?php echo $driverRide['note'] ?></td>
                        
                        <td>
                            <a href="edit_ride.php?id_ride=<?= $ride['id_ride'] ?>">edit </a>
                        </td>
    
    
    
    
                    </tr>
                
            <?php
    } ?>
    </tbody>
    </table>
    <?php   
}
            ?>
            

    </div>