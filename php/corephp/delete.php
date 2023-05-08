<?php
include "config.php";

if (isset($_POST["delete"])) {
    $deleteid = $_POST["deleteid"];
    // echo $deleteid;
    // var_dump($_POST);
    // die;

    $deletesql = "DELETE FROM form WHERE `id` = '$deleteid'";

    $result = mysqli_query($conn, $deletesql);
    if ($result) {
        echo "<script>
      alert('data deleted successfully')</script> ";
    } else {
        die(mysqli_error($conn));
        echo "<script>
      alert('Something Wrong Went.')
    </script>";
    }
}

include "view.php";
