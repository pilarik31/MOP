<?php
include_once  "header.php";
include_once "nav.php";
session_start();

$rides = Model::getAllRides();

?>
<body>
    <br><br>
    <h3>Rides</h3>
    <a class="btn btn-secondary background-btn" href="addRide.php">Add ride</a>
    <div class="table-responsive">
        <table class=" table table-striped table-sm">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>car</th>
                    <th>TL</th>
                    <th>TA</th>
                    <th>PL</th>
                    <th>PA</th>
                    <th>leght</th>
                    <th>note</th>
                    <th>status</th>
                    

                </tr>
            </thead>
            <tbody>
            <?php
            foreach ($rides as $ride) {
                ?><tr>

                    <td><?php echo $ride['id_ride'] ?></td>
                    <td><?php echo $ride['id_user'] ?></td>
                    <td><?php echo $ride['id_car'] ?></td>
                    <td><?php echo $ride['time_left'] ?></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    
                   

                </tr>
                <?php
            }
            ?>

            </tbody>
        </table>
    </div>