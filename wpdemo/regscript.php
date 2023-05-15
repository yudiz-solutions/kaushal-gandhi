<?php
include "config.php";

// if (isset($_REQUEST['Submit'])) {
if ($_POST['FirstName'] == "" || $_POST['LastName'] == "" || $_POST['UserName'] == "" || $_POST['Email'] == "" || $_POST['Password'] == "" || $_POST['ConfirmPassword']  == "" || $_POST['DOB'] == "" || $_POST['Hobby'] == "" || $_POST['Gender'] == "" || $_POST['Country'] == "" || $_POST['Message'] == "" || $_POST['ProfileImage'] == "") {
    echo "error: all fields are required";
}
// } else {
// if (isset($_POST['submit'])) {
$FirstName = $_REQUEST['FirstName'];
// var_dump($_REQUEST['data']);
$LastName = $_REQUEST['LastName'];
$UserName = $_REQUEST['UserName'];
$Email = $_REQUEST['Email'];
$Password = $_REQUEST['Password'];
$ConfirmPassword = $_REQUEST['ConfirmPassword'];
$DOB = $_REQUEST['DOB'];
// $Hobby = $_REQUEST['Hobby'];
$Hobby = $_REQUEST['Hobby'];
$hobby = implode(',', $Hobby);
$Gender = $_REQUEST['Gender'];
$Country = $_REQUEST['Country'];
$Message = $_REQUEST['Message'];
$ProfileImage = $_FILES["ProfileImage"]["name"];
$tempimg = $_FILES["ProfileImage"]["tmp_name"];
$folder = "./image/" . $ProfileImage;

if ($Password == $ConfirmPassword) {
    $ISQL = "INSERT INTO `wpdemo`(`FirstName`, `LastName`, `UserName`, `Email`, `Password`, `ConfirmPassword`, `DOB`, `Hobby`, `Gender`, `Country`, `Message`, `ProfileImage`) VALUES ('$FirstName','$LastName','$UserName','$Email','$Password','$ConfirmPassword','$DOB','$hobby','$Gender','$Country','$Message','$folder')";
    $result = mysqli_query($conn, $ISQL);
    move_uploaded_file($tempimg, $folder);

    if ($result) {
        echo "<script>
    alert('data inserted successfully')</script> ";
    } else {
        // die(mysqli_error($conn));
        echo "<script>
    alert('Something Wrong Went.')
    </script>";
    }
} else {


    echo "<script>
    alert('confirm password is wrong')</script> ";
}
    // header('location: reg.form.php ');
// }
// }
