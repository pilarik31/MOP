<?php
session_start();
include_once "header.php";


?>

<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="menu navbar-brand col-sm-12 col-md-12 mr-0" href="index.php">Vozový park</a>





</nav>
<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link " href="cars.php">
                            Cars <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rides.php">
                            Rides
                        </a>
                    </li>

                    <?php if ($_SESSION["userRole"]=="1" || $_SESSION["userRole"] == "2") {
                        ?> <li class="nav-item">
                        <a class="nav-link" href="employees.php">
                            Employees </a>
                    </li> 
                    <?php  
                        
                    } ?>

                               

                <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                        LOGOUT </a>
                </li>


               


            </ul>


            </ul>
        </div>
    </nav>
    <?php
    session_abort();
    ?>
    <main role="main" class="main col-md-9 ml-sm-auto col-lg-10 px-4">