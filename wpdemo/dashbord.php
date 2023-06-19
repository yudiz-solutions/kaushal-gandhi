<?php

// include "config.php";
include 'config.php';
// $response = array();
session_start();
// error_reporting(0);

if (!isset($_SESSION['UserName'])) {
    header("Location: index.php");
}
$username = $_SESSION['UserName'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>admin panel</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
        .row.content {
            height: 550px
        }

        /* Set gray background color and 100% height */
        .sidenav {
            background-color: #f1f1f1;
            height: 100%;
        }

        /* On small screens, set height to 'auto' for the grid */
        @media screen and (max-width: 767px) {
            .row.content {
                height: auto;
            }
        }
    </style>
</head>

<body>
    <?php
    // include "config.php";
    // $FirstName = isset($_POST['FirstName']) ? $_POST['FirstName'] : '';
    // $viewsql = "SELECT FirstName FROM `wpdemo` WHERE `FirstName` = $FirstName ";
    // $result = mysqli_query($conn, $viewsql);
    ?>

    <nav class="navbar navbar-inverse visible-xs">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Logo</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Dashboard</a></li>
                    <li><a href="post_reg_form.php">Add Data</a></li>
                    <li><a href="#">User Data</a></li>
                    <li><a href="#">Log Out</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row content">
            <div class="col-sm-3 sidenav hidden-xs">
                <h2>Logo</h2>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a href="#section1">Dashboard</a></li>
                    <li><a href="post_reg_form.php">Add Data</a></li>
                    <li><a href="post_view.php">User Data</a></li>
                    <li><a href="logout.php">Log Out</a></li>
                </ul><br>
            </div>
            <br>

            <div class="col-sm-9">
                <div class="well">
                    <h4></h4>
                    <p>Welcome <?php echo $username ?></p>
                    <p>(Not <?php echo $username ?> ?? )</p>
                </div>

            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>