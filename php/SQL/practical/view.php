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
                </td><br>
            </tr>

        <?php
        }
        ?>
    </table>


</body>

</html>