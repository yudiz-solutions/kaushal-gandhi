<!-- employ_details
info
id
name
department
gender
hobbies  -->

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "employ_details";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}
