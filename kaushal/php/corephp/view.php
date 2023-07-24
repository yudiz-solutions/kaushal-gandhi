<?php
//update script
include "config.php";
if (isset($_POST['updatebtn'])) {


    $eID = $_POST['eid'];
    // echo $ID;
    $First_name = $_POST['First_name'];
    $Last_name = $_POST['Last_name'];
    $User_name = $_POST['User_name'];
    $Email = $_POST['Email'];
    $Password = $_POST['Password'];
    $Gender = $_POST['Gender'];
    $Country = $_POST['Country'];
    $State = $_POST['State'];
    $City = $_POST['City'];
    $Bio = $_POST['Bio'];
    // $Profile = $_POST['Profile '];
    // $Profile = $_FILES['file']['Profile'];
    // $fileTempName = $_FILES['file']['tmp_name'];
    // $file_store = "userprofile/" . $Profile;

    $ASM = $_POST['Active_social_media'];
    $soc = implode(',', $ASM);

    // $usql = "UPDATE `form` SET First_name='$First_name',Last_name='$Last_name',User_name='$User_name',Email='$Email',Password='$Password',Gender='$Gender',Country='$Country',State='$State',City='$City',Bio='$Bio',Profile='$Profile',Active_social_media='$soc' WHERE ID='$eID'";
    $usql = "UPDATE `form` SET First_name='$First_name',Last_name='$Last_name',User_name='$User_name',Email='$Email',Password='$Password',Gender='$Gender',Country='$Country',State='$State',City='$City',Bio='$Bio',Active_social_media='$soc' WHERE ID='$eID'";

    $result = mysqli_query($conn, $usql);

    // if (move_uploaded_file($_FILES['file']['tmp_name'], $file_store)) {
    // }
    if ($result) {
        echo "<script>
      alert('data updated successfully')</script> ";
    } else {
        // die(mysqli_error($conn));
        echo "<script>
      alert('Something Wrong Went.')
  </script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view</title>
</head>
<style>
    table,
    th,
    td,
    tr {
        border: 1px solid black;
        border-collapse: collapse;
    }
</style>

<body>
    <?php

    $viewsql = "SELECT * FROM `form`";
    $result = mysqli_query($conn, $viewsql);
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>First-Name</th>
                <th>Last-name</th>
                <th>User-name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Gender</th>
                <th>Country</th>
                <th>State</th>
                <th>City</th>
                <th>Bio</th>
                <th>Profile</th>
                <th>Active social media account</th>
                <th>DELETE</th>
                <th>UPDATE</th>
            </tr>
        </thead>
        <?php

        // view script
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $row["ID"] ?></td>
                <td><?= $row["First_name"] ?></td>
                <td><?= $row["Last_name"] ?></td>
                <td><?= $row["User_name"] ?></td>
                <td><?= $row["Email"] ?></td>
                <td><?= $row["Password"] ?></td>
                <td><?= $row["Gender"] ?></td>
                <td><?= $row["Country"] ?></td>
                <td><?= $row["State"] ?></td>
                <td><?= $row["City"] ?></td>
                <td><?= $row["Bio"] ?></td>
                <td><img src="userprofile/<?php echo $row['Profile']; ?>" width="150px"></td>
                <td><?= $row["Active_social_media"] ?></td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" value="<?php echo $row['ID'] ?>" name="deleteid">
                        <input type="submit" name="delete" value="delete">
                    </form>
                </td>
                <td>
                    <form action="edit.php?update=<?php echo $row["ID"]; ?>" method="post">

                        <input type="hidden" value="<?php echo $row['ID'] ?>" name="update">
                        <input type="submit" name="update" value="update">


                    </form>
                </td>



            </tr>
        <?php
        }

        ?>
    </table>

</body>

</html>