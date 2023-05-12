<?php
include "config.php";
if (isset($_POST['submit'])) {
    $FirstName = $_POST['FirstName'];
    $LastName = $_POST['LastName'];
    $UserName = $_POST['UserName'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $ConfirmPassword = $_POST['ConfirmPassword'];
    $DOB = $_POST['DOB'];
    // $Hobby = $_POST['Hobby'];
    $Hobby = $_POST['Hobby'];
    $hobby = implode(',', $Hobby);
    $Gender = $_POST['Gender'];
    $Country = $_POST['Country'];
    $Message = $_POST['Message'];
    $ProfileImage = $_FILES["ProfileImage"]["name"];
    $tempimg = $_FILES["ProfileImage"]["tmp_name"];
    $folder = "./image/" . $ProfileImage;





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
    header('location: reg.form.php ');
}
