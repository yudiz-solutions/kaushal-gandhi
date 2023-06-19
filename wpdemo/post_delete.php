<?php
include 'config.php';
session_start();
// error_reporting(0);

if (!isset($_SESSION['UserName'])) {
    header("Location: index.php");
}
// include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM `post_table` WHERE `post_table`.`id` = '$id'";
    $result = $conn->query($sql);
    if ($result) {
        echo "<script>alert('Record deleted successfully')</script>";
    } else {
        echo "<script>alert('Something Went Wrong')</script>";
    }
    // header('location: view.php');
    header('location: post_view.php');
}
