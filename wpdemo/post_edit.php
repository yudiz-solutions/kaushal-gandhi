<?php
include "config.php";

$id = $_GET['editid'];
if (isset($_POST['submit'])) {
    $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
    $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $massage = isset($_POST['massage']) ? $_POST['massage'] : '';
    $number = isset($_POST['number']) ? $_POST['number'] : '';
    $hashtag = isset($_POST['hashtag']) ? $_POST['hashtag'] : '';
    $old_post = $_POST['post'];
    $new_Profile = $_FILES['new_post']['tmp_name'];
    $folder = "./postimage/" . $post;
    if (!empty($temp_Profile)) {
        move_uploaded_file($post, $folder);
    } else {
        //    $file="./image/".$profile;
        $post = isset($_POST['hidden_file']) ? $_POST['hidden_file'] : '';
    }

    $sql = "UPDATE `post_table` SET `firstname` = '$firstname', `lastname` = '$lastname', `email` = '$email', `post` = '$new_Profile', `massage` = '$massage' WHERE `post_table`.`id` = $id";
    $result = mysqli_query($conn, $sql);


    if ($result) {

        $sqlMeta = "UPDATE `post_meta` SET `meta_value` = '$number' WHERE `post_meta`.`post_id` = $id AND `meta_key`='number'";
        $resultMeta = mysqli_query($conn, $sqlMeta);
        if ($resultMeta) {
            $sqlMeta2 = "UPDATE `post_meta` SET `meta_value` = '$hashtag' WHERE `post_meta`.`post_id` = '$id' AND `meta_key`='hashtag'";
            $resultMeta2 = mysqli_query($conn, $sqlMeta2);
            if ($resultMeta2) {
                header("location: post_View.php");
            }
        }
    }
}
$sql2 = "SELECT * FROM `post_table` INNER JOIN `post_meta` ON post_table.id = post_meta.Post_id WHERE post_table.id = $id";

$result2 = mysqli_query($conn, $sql2);

$data = array();

while ($row = mysqli_fetch_assoc($result2)) {
    if (!isset($data[$id])) {
        $data[$id] = array(
            'firstname' => $row['firstname'],
            'lastname' => $row['lastname'],
            'email' => $row['email'],
            'massage' => $row['massage'],
            'post' => $row['post'],
            'number' => '',
            'hashtag' => ''
        );
    }

    if ($row['meta_key'] === 'number') {
        $data[$id]['number'] = $row['meta_value'];
    } elseif ($row['meta_key'] === 'password') {
        $data[$id]['hashtag'] = $row['meta_value'];
    }
}
foreach ($data as $id => $row) {
    $firstname = $row['firstname'];
    $lastname = $row['lastname'];
    $email = $row['email'];
    $post = $row['post'];
    $massage = $row['massage'];

    // $Profile = $row['file'];
    $number = isset($row['number']) ? $row['number'] : '';
    $hashtag = isset($row['hashtag']) ? $row['hashtag'] : '';
}
?>
<?php include "header.php" ?>
<form id="form" class="container col-4 bg-dark text-light p-5" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <div id="error_messages"></div>
    </div>
    <div class="mb-3">
        <label>FirstName</label>
        <input type="text" class="form-control" name="firstname" id="firstname" value="<?= $firstname ?>">
        <h5 id="firstcheck" style="color: red; display:none">
            **Firstname is missing
        </h5>
    </div>
    <div class="mb-3">
        <label>LastName</label>
        <input type="text" class="form-control" name="lastname" id="lastname" value="<?= $lastname ?>">
        <h5 id="lastcheck" style="color: red; display:none">
            **Lastname is missing
        </h5>
    </div>
    <div class="mb-3">
        <label>Email</label>
        <input type="text" class="form-control" name="email" id="email" value="<?= $email ?>">
        <small id="emailvalid" class="form-text 
                text-muted invalid-feedback">
            Your email must be a valid email
        </small>
    </div>
    <div class="mb-3">
        <label for="">ProfileImage</label>
        <input type="file" name="new_post" class="form-control">
        <input type="hidden" name="hidden_file" value="<?php echo $old_post ?>">
    </div>
    <div class="mb-3">
        <label for="">Message</label>
        <textarea name="massage" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="mb-3">
        <label for="">Phone no.</label>
        <input type="text" name="number" class="form-control">
    </div>
    <div class="mb-3">
        <label for="">hashtag</label>
        <input type="text" name="hashtag" class="form-control">
    </div>
    <div class="button text-center mb-3">
        <button type="submit" class=" btn btn-primary" class="form-control" name="submit">update</button>
    </div>
</form>