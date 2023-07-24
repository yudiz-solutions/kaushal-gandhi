<?php

include "config.php";
$id = $_GET['updatepost'];
$sql = "SELECT * FROM form WHERE id = '$id'";
$result = mysqli_query($conn, $sql);
// print_r($result);
// die;
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $r_id = $row['id'];
        $r_caption = $row['caption'];
        $r_hashtag = $row['hashtag'];
    }
}
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
                <input type="hidden" name="eid" value="<?php echo $r_id; ?>">
                <textarea name="caption" id="" cols="30" rows="10" required> <?php echo $r_caption; ?></textarea>

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