<?php

include "config.php";
$id = $_GET['update'];
$sql = "SELECT * FROM form WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit post</title>
</head>
<form action="view_post.php" method="post">
    <table>
        <tr>
            <td>
                <label for="">caption:-</label>
                <input type="hidden" name="eid" value="<?php echo $row['id']; ?>">
                <textarea name="caption" id="" cols="30" rows="10" required> <?php echo $row['caption']; ?></textarea>

            </td>
        </tr>
        <tr>
            <td>
                <label for="">Hashtag:-</label>
                <textarea name="hashtag" id="" cols="30" rows="10" required><?php echo $row['hashtag']; ?></textarea>
            </td>
        </tr>


    </table>
    <input type="submit" value="update" name="updatebtn">
</form>

<body>

</body>

</html>