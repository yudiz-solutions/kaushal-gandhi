data base name :- wpdemo


field name


id
FirstName
LastName
UserName
Email
Password
ConfirmPassword
DOB
Hobby
Gender
Country
Message
ProfileImage

<?php



// else {
//     // User or email doesn't exist, process the form submission
//     // ... (code to insert the form data into the database)
//     echo "Form submitted successfully!";
// }

?>

<!-- HTML form -->
<form method="POST" action="">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required>

    <input type="submit" value="Submit">
</form>


<?php
include "connection.php";

$sql = "SELECT * FROM `post_table` INNER JOIN `meta_post` ON post_table.id = meta_post.post_id";
$result = mysqli_query($con, $sql);

$data = array(); // Array to store fetched data

while ($row = mysqli_fetch_array($result)) {
    $post_id = $row['post_id'];
    if (!isset($data[$post_id])) {
        $data[$post_id] = array(
            'fname' => $row['fname'],
            'lname' => $row['lname'],
            'email' => $row['email'],
            'massage' => $row['massage'],
            'file' => $row['file'],
            'caption' => '',
            'password' => ''
        );
    }

    // Check if the current row has the "caption" or "password" key
    if ($row['key'] === 'caption') {
        $data[$post_id]['caption'] = $row['value'];
    } elseif ($row['key'] === 'password') {
        $data[$post_id]['password'] = $row['value'];
    }
}

?>

<?php include "header.php" ?>

<div class="container my-5">
    <div style="padding-bottom: 10px;">
        <a href="postAdd.php"><button class="btn btn-primary">Add Post</button></a>
    </div>

    <table class="table" id="TableForm">
        <thead>
            <tr class="alert alert-info">
                <th scope="col">Sl no</th>
                <th scope="col">First Name</th>
                <th scope="col">Last Name</th>
                <th scope="col">Email</th>
                <th scope="col">Profile</th>
                <th scope="col">Massage</th>
                <th scope="col">Caption</th>
                <th scope="col">Password</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $num = 0;
            foreach ($data as $post_id => $row) {
                $num++;
                $fname = $row['fname'];
                $lname = $row['lname'];
                $email = $row['email'];
                $massage = $row['massage'];
                $file = $row['file'];
                $caption = $row['caption'];
                $password = $row['password'];

            ?>
                <tr>
                    <th scope="row"><?php echo $num; ?></th>
                    <td scope="row"><?php echo $fname; ?></td>
                    <td scope="row"><?php echo $lname; ?></td>
                    <td scope="row"><?php echo $email; ?></td>
                    <th scope="row"><img src="<?php echo $file; ?>" width="100" height="120"></th>
                    <td scope="row"><?php echo $massage; ?></td>
                    <td scope="row"><?php echo $caption; ?></td>
                    <td scope="row"><?php echo $password; ?></td>
                    <td>
                        <a href="postEdit.php?editid=<?php echo $post_id; ?>"><button class="btn btn-success">Edit</button></a>
                        <a href="postDelete.php?deleteid=<?php echo $post_id; ?>"><button class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</div>

<?php include "footer.php" ?>





/////////////////////////////////////////// EDIT
<?php
include "connection.php";

$id = $_GET['editid'];
if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $massage = $_POST['massage'];
    $password = $_POST['password'];
    $profile = $_FILES['profile']['name'];
    $temp_Profile = $_FILES['profile']['tmp_name'];
    $file = "./image/" . $profile;

    if (!empty($temp_Profile)) {
        move_uploaded_file($profile, $file);
    } else {
        //    $file="./image/".$profile;
        $file = isset($_POST['hidden_file']) ? $_POST['hidden_file'] : '';
    }

    $caption = $_POST['caption'];

    $sql = "UPDATE `post_table` SET `fname` = '$fname', `lname` = '$lname', `email` = '$email', `file` = '$file', `massage` = '$massage' WHERE `post_table`.`id` = $id";
    $result = mysqli_query($con, $sql);

    if ($result) {

        $sqlMeta = "UPDATE `meta_post` SET `value` = '$caption' WHERE `meta_post`.`post_id` = $id AND `key`='caption'";
        $resultMeta = mysqli_query($con, $sqlMeta);
        if ($resultMeta) {
            $sqlMeta2 = "UPDATE `meta_post` SET `value` = '$password' WHERE `meta_post`.`post_id` = '$id' AND `key`='password'";
            $resultMeta2 = mysqli_query($con, $sqlMeta2);
            if ($resultMeta2) {
                header("location: postView.php");
            }
        }
    }
}

$sql2 = "SELECT * FROM `post_table` INNER JOIN `meta_post` ON post_table.id = meta_post.Post_id WHERE post_table.id = $id";

$result2 = mysqli_query($con, $sql2);

$data = array();

while ($row = mysqli_fetch_array($result2)) {
    if (!isset($data[$id])) {
        $data[$id] = array(
            'fname' => $row['fname'],
            'lname' => $row['lname'],
            'email' => $row['email'],
            'massage' => $row['massage'],
            'file' => $row['file'],
            'caption' => '',
            'password' => ''
        );
    }

    if ($row['key'] === 'caption') {
        $data[$id]['caption'] = $row['value'];
    } elseif ($row['key'] === 'password') {
        $data[$id]['password'] = $row['value'];
    }
}
foreach ($data as $id => $row) {
    $fName = isset($row['fname']) ? $row['fname'] : '';

    $lName = $row['lname'];
    $Email = $row['email'];
    $File = $row['file'];
    $Massage = $row['massage'];
    $Password = isset($row['password']) ? $row['password'] : '';
    $Profile = $row['file'];
    $Caption = isset($row['caption']) ? $row['caption'] : '';
    $Password = isset($row['password']) ? $row['password'] : '';
}


?>
<?php include "header.php" ?>


<div class="container my-5">
    <h2 style="text-align:center;">Post Register Form</h2>
    <form method="post" style="border: solid;
    margin: 5px; padding-top: 10px;" enctype="multipart/form-data">

        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right">First Name</label>
            <div class="col-md-3">
                <span class="error">*
                    <?php echo $error['fname'] ?? ''; ?>
                </span>
                <input type="text" id="fname" class="form-control fname" name="fname" value="<?php echo $fName; ?>">
            </div>
        </div><br>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right">Last Name</label>
            <div class="col-md-3">
                <span class="error">*
                    <?php echo $error['lname'] ?? ''; ?>
                </span>
                <input type="text" id="lname" class="form-control lname" name="lname" value="<?php echo $lName; ?>">
            </div>
        </div><br>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right">Email</label>
            <div class="col-md-3">
                <span class="error">*
                    <?php echo $error['email'] ?? ''; ?>
                </span>
                <input type="text" id="email" class="form-control email" name="email" value="<?php echo $Email; ?>">
            </div>
        </div><br>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right">Massage</label>
            <div class="col-md-3">
                <span class="error">*
                    <?php echo $error['massage'] ?? ''; ?>
                </span>
                <input type="text" id="massage" class="form-control massage" name="massage" value="<?php echo $Massage; ?>">
            </div>
        </div><br>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right">Profile</label>
            <div class="col-md-3">
                <input type="file" class="form-control" id="profile" name="profile" value="">
                <input type="hidden" name="hidden_file" value="<?php echo $Profile ?>">
            </div>
        </div><br>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right">Password</label>
            <div class="col-md-3">
                <span class="error">*
                    <?php echo $error['password'] ?? ''; ?>
                </span>
                <input type="password" id="password" class="form-control" name="password" value="<?php echo $Password ?>">
            </div>
        </div><br>
        <div class="form-group row">
            <label class="col-md-2 col-form-label text-md-right">Caption</label>
            <div class="col-md-3">
                <span class="error">*
                    <?php echo $error['caption'] ?? ''; ?>
                </span>
                <input type="text" id="caption" class="form-control" name="caption" value="<?php echo $Caption ?>">
            </div>
        </div><br>
        <div class="text-center" style="padding-bottom: 10px;">
            <button type="submit" id="submit" class="btn btn-outline-success" name="submit" value="submit">Update</button>
        </div>
    </form>

</div>


<?php include "footer.php" ?>