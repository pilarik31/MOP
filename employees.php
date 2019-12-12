<?php
include_once "header.php";
?>



<body>
    <?php
$employees = Model::getAllEmployees();





?>
    <br>
    <h2>Employees</h2>
    <a class="btn btn-secondary background-btn" href="addUser.php">Add user</a>

    <div class="table-responsive">
        <table class=" tbl table table-striped table-sm">
            <thead>
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>surname</th>
                    <th>edit</th>

                </tr>
            </thead>
            <tbody>

                <?php
            foreach ($employees as $employee) {
                ?><tr>
                    <td> <?php echo $employee['id_user'] ?></td>
                    <td> <?php echo $employee['firstname'] ?></td>
                    <td> <?php echo $employee['surname'] ?></td>
                    <td>
                        <a href="edit_user.php">edit </a>
                    </td>


                </tr> <?php
            }
                ?>

            </tbody>
        </table>
    </div>