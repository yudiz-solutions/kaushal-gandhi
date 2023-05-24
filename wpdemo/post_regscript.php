<?php
include "config.php";
$response = array();
$firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
$lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$post = isset($_FILES["post"]["name"]) ? $_FILES["post"]["name"] : '';
$tempimg = isset($_FILES["post"]["tmp_name"]) ? $_FILES["post"]["tmp_name"] : '';
$folder = '';
$massage = isset($_POST['massage']) ? $_POST['massage'] : '';
$number = isset($_POST['number']) ? $_POST['number'] : '';
$hashtag = isset($_POST['hashtag']) ? $_POST['hashtag'] : '';
if (!empty($tempimg)) {
    $folder = "./postimage/" . $post;
}
$has_error = false;
if (empty($firstname)) {
    $response['msg'][] = 'Pleaase enter first name';
    $has_error = true;
}
if (empty($lastname)) {
    $response['msg'][] = 'Pleaase enter last  name';
    $has_error = true;
}
if (empty($email)) {
    $response['msg'][] = 'Pleaase enter email';
    $has_error = true;
}
if (empty($post)) {
    $response['msg'][] = 'please Enter image';
    $has_error = true;
}
if (empty($massage)) {
    $response['msg'][] = 'please Enter Message';
    $has_error = true;
}
if (empty($number)) {
    $response['msg'][] = 'please Enter number';
    $has_error = true;
}
if (empty($hashtag)) {
    $response['msg'][] = 'please Enter hashtag';
    $has_error = true;
}
if (!$has_error) {
    // Insert sql query
    $ISQL = "INSERT INTO `post_table`(`firstname`, `lastname`, `email`, `post`, `massage`) 
             VALUES ('$firstname','$lastname','$email','$post','$massage')";

    move_uploaded_file($tempimg, $folder);

    if ($result = mysqli_query($conn, $ISQL)) {
        $last_id = mysqli_insert_id($conn);
        $not_allowed_fields = array('firstname', 'lastname', 'email', 'post', 'massage', 'submit');
        foreach ($_POST as $key => $value) {
            if (in_array($key, $not_allowed_fields)) {
                continue;
            }
            $metasql = "INSERT INTO `Post_meta`(`post_id`,`meta_key`, `meta_value`) VALUE ('$last_id','$key','$value')";
            $result = mysqli_query($conn, $metasql);
        }
    };
    $response['status'] = true;
    $response['msg'][] = 'Data inserted successfully';
}
echo json_encode($response);
die;
