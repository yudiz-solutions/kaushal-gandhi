<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>post form</title>
</head>

<body>


    <?php
    require "config.php";


    if (isset($_POST['view_post'])) {
        // $First_name = $_POST['First_name'];
        $caption = $_POST['caption'];
        $hashtag = $_POST['hashtag'];

        $Isql = "INSERT INTO `post`( `caption`, `hashtag`) VALUES ('$caption','$hashtag')";

        $result = mysqli_query($conn, $Isql);

        // if (move_uploaded_file($fileTempName, $file_store)) {
        //     header('location: form.php');
        // }

        if ($result) {
            echo "<script>
      alert('data inserted successfully')</script> ";
        } else {
            // die(mysqli_error($conn));
            echo "<script>
      alert('Something Wrong Went.')
  </script>";
        }
    }

    ?>

    <form action="post_form.php" method="post">

        <div>
            post-image:-
            <input type="file" name="post_image">
        </div>
        <div>
            <label for="">caption:-</label>
            <textarea name="caption" id="" cols="30" rows="10" required></textarea>
        </div>
        <div>
            <label for="">Hashtag:-</label>
            <textarea name="hashtag" id="" cols="30" rows="10" required></textarea>
        </div>
        <br>
        <input type="submit" name="view_post" value=" Add Post">


    </form>
</body>

</html>