<?php

require "config.php";



if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $hobbies = $_POST['hobbies'];

    $sql = "INSERT INTO `info`(`name`, `department`, `gender`, `hobbies`) VALUES ('[$name]','[$department]','[$gender]','[$hobbies]')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        echo "<script>
      alert('data inserted successfully')</script> ";
    } else {
        die(mysqli_error($conn));
        echo "<script>
      alert('Something Wrong Went.')
  </script>";
    }
}
