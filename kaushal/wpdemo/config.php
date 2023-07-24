<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "core_php";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);


// if ($conn) {
//     echo "hello";
// }
if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
