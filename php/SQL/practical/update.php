<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update</title>
</head>

<body>
    <?php
    include "config.php";
    if (isset($_POST['update'])) {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $department = $_POST['department'];
        $gender = $_POST['gender'];
        $hobbies = $_POST['hobbies'];

        $updatesql = "UPDATE info SET name = '$name',department = '$department',gender = '$gender',hobbies = '$hobbies' WHERE id = '$id'";

        $result = mysqli_query($conn, $updatesql);
        if ($result) {
            echo "<script>
      alert('data updated successfully')</script> ";
        } else {
            die(mysqli_error($conn));
            echo "<script>
      alert('Something Wrong Went.')
  </script>";
        }
    }

    //GETTING ID FROM URL
    if (isset($_GET['id'])) {
        $id = $_GET["id"];

        $selectsql = "SELECT * FROM info WHERE id = '$id'";
        $result2 = mysqli_query($conn, $selectsql);

        if ($result2->num_rows > 0) {
            while ($row = $result2->fetch_assoc()) {
                $update_id = $row['id'];
                $update_name = $row['name'];
                $update_department = $row['department '];
                $update_gender = $row['gender'];
                $update_hobbies = $row['hobbies'];
            }
        }
    }
    ?>
    <form action="update.php" method="post">
        <input type="hidden" value="<?php echo $update_id['id'] ?>" name="id" />
        full-name :
        <input type="text" placeholder="enter your name" name="name" required value="<?php echo $update_name['name'] ?>">
        <br><br>
        department :
        <input type="text" placeholder="enter your department" name="department" required>
        <br><br>
        gender :
        male:<input type="radio" name="gender" value="male">
        female :<input type="radio" name="gender" value="female">
        <br><br>
        hobbies :
        cricket:<input type="checkbox" name="hobbies" value="cricket">
        chess:<input type="checkbox" name="hobbies" value="chess">
        football:<input type="checkbox" name="hobbies" value="football">
        <br><br>
        <input type="submit" name="update" value="update">
        <?php
        include "view.php";
        ?>

    </form>


</body>

</html>