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


    require "config.php";

    $viewsql = "SELECT * FROM `info`";
    $result = mysqli_query($conn, $viewsql);
    ?>

    <table class="tabel">
        <thead>
            <tr>
                <th>id</th>
                <th>name</th>
                <th>department</th>
                <th>gender</th>
                <th>hobbies</th>
                <th>delete</th>
                <th>update</th>
            </tr>
        </thead>
        <?php
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td>
                    <?= $row["id"] ?>
                </td>
                <td>
                    <?= $row["name"] ?>
                </td>
                <td>
                    <?= $row["department"] ?>
                </td>
                <td>
                    <?= $row["gender"] ?>
                </td>
                <td>
                    <?= $row["hobbies"] ?>
                </td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" value="<?php echo $row['id'] ?>" name="deleteid">
                        <input type="submit" value="delete" name="delete">

                    </form>

                </td>
                <td>
                    <form action="update.php" method="post">
                        <input type="submit" value="update" name="update">
                    </form>
                </td>


                <br>
            </tr>

        <?php
        }

        ?>

    </table>


</body>

</html>