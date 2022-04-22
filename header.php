<?php  include 'check_admin_login.php';   ?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="Rao Hamza" />
    <title>Dashboard</title>
    
    <link rel="icon" href="./assets/img/fuse.svg"  sizes="16x16">
    <link href="css/styles.css" rel="stylesheet" />
    <link href="css/panel.css" rel="stylesheet" />

    <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet"
        crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js"
        crossorigin="anonymous"></script>

    <script src="https://kit.fontawesome.com/f54a5994e8.js" SameSite=None crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <img src="./assets/img/fuse.svg" style="display: inline !important;padding:5px 10px" alt="logo" width="60"
            height="60">

        <a class="gym_name" href="index.html">Fitness Fuel</a>
        <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i
                class="fas fa-bars"></i></button>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="index.php">
                         
                            Dashboard
                        </a>
                        <a class="nav-link" href="users.php">
                            Users
                        </a>
                        <a class="nav-link" href="classes.php">View Classes</a>
                      
                        <a class="nav-link" href="trainer.php">View Trainers</a>

                        <a class="nav-link" href="schedule.php">View Schedule</a>
                        <a class="nav-link" href="branches.php">  View Branches</a>


                        <a class="nav-link" href="change-password.php">
                            Change password
                        </a>
                        <a class="nav-link" href="logout.php">
                            Log out
                        </a>
                    </div>
                </div>

            </nav>
        </div>
