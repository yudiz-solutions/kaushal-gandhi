<?php

include 'config.php';
session_start();
// error_reporting(0);

if (!isset($_SESSION['UserName'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    include "config.php";
    $viewsql = "SELECT * FROM `wpdemo`";
    $result = mysqli_query($conn, $viewsql);
    ?>

    <table>

        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>User Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Hobby</th>
                <th>Gender</th>
                <th>Country </th>
                <th>Message</th>
                <th>ProfileImage</th>
                <th>DELETE</th>
                <th>UPDATE</th>
            </tr>
        </thead>
        <!----------------- view script  -------------->
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>

            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["FirstName"] ?></td>
                <td><?= $row["LastName"] ?></td>
                <td><?= $row["UserName"] ?></td>
                <td><?= $row["Email"] ?></td>
                <td><?= $row["DOB"] ?></td>
                <td><?= $row["Hobby"] ?></td>
                <td><?= $row["Gender"] ?></td>
                <td><?= $row["Country"] ?></td>
                <td><?= $row["Message"] ?></td>
                <td><img src="<?= $row["ProfileImage"] ?>" width="100px" height="100px"></td>
                <td><button name="Delete" onclick="window.location.href='delete.php?id=<?php echo $row['id']; ?>'">Delete</button></td>
                <td><button name="update" onclick="window.location.href='update.php?id=<?php echo $row['id']; ?>'">Update</button></td>
            </tr>

        <?php
        }
        ?>
    </table>
    <button name="search" onclick="window.location.href='search.php'">search</button>
    <button onclick="window.location.href='logout.php'">Logout</button>

</body>

</html>