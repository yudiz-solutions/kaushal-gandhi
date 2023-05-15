<?php
include 'config.php';
session_start();
// error_reporting(0);

if (!isset($_SESSION['UserName'])) {
    header("Location: login.php");
}
// include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `wpdemo` WHERE `id` = '$id'";
    $result = $conn->query($sql);
    if ($result == TRUE) {
        echo "<script>alert('Record deleted successfully')</script>";
    } else {
        echo "<script>alert('Something Went Wrong')</script>";
    }
    header('location: view.php ');
}
