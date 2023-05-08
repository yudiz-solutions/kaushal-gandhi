<?php
//update script
include "config.php";
if (isset($_POST['updatebtn'])) {


    $eid = $_POST['eid'];
    // echo $ID;
    $caption = $_POST['caption'];
    $hashtag = $_POST['hashtag'];



    $usql = "UPDATE `post` SET caption='$caption',hashtag='$hashtag' WHERE id='$eid'";

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
    <title>view post</title>
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

    $viewpostsql = "SELECT * FROM `post`";
    $result = mysqli_query($conn, $viewpostsql);
    ?>
    <table>
        <thead>
            <tr>
                <td>yourpost</td>
                <td>caption</td>
                <td>hashtag</td>
                <td>Delete</td>
            </tr>
        </thead>
        <?php

        // view script
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["post_img"] ?></td>
                <td><?= $row["caption"] ?></td>
                <td><?= $row["hashtag"] ?></td>
                <td>
                    <form action="post_delete.php" method="post">
                        <input type="hidden" value="<?php echo $row['id'] ?>" name="deleteid">
                        <input type="submit" name="delete" value="delete">
                    </form>
                </td>
                <td>
                    <form action="post_edit.php?update=<?php echo $row["id"]; ?>" method="post">

                        <input type="hidden" value="<?php echo $row['ID'] ?>" name="update">
                        <input type="submit" name="update" value="update">


                    </form>
                </td>

            </tr>
        <?php } ?>

    </table>


</body>

</html>