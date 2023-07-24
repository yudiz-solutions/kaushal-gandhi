<!------------------ update script ---------------->

<?php

// include "config.php";
include 'config.php';
$response = array();
session_start();
// error_reporting(0);

if (!isset($_SESSION['UserName'])) {
    header("Location: index.php");
}


if (isset($_POST["update"])) {
    $id = $_POST['id'];
    $FirstName = isset($_POST['FirstName']) ? $_POST['FirstName'] : '';
    $LastName = isset($_POST['LastName']) ? $_POST['LastName'] : '';
    $UserName = isset($_POST['UserName']) ? $_POST['UserName'] : '';
    $Email = isset($_POST['Email']) ? $_POST['Email'] : '';
    $Password = isset($_POST['Password']) ? $_POST['Password'] : '';
    $ConfirmPassword = isset($_POST['ConfirmPassword']) ? $_POST['ConfirmPassword'] : '';
    $DOB = isset($_POST['DOB']) ? $_POST['DOB'] : '';
    // $Hobby = $_POST['Hobby'];
    $Hobby = isset($_POST['Hobby']) ? $_POST['Hobby']  : array();
    $hobby = implode(',', $Hobby);
    $Gender = isset($_POST['Gender']) ? $_POST['Gender'] : '';
    $Country = isset($_POST['Country']) ? $_POST['Country'] : '';
    $Message = isset($_POST['Message']) ? $_POST['Message'] : '';
    $ProfileImage = isset($_FILES["ProfileImage"]["name"]) ? $_FILES["ProfileImage"]["name"] : '';
    $tempimg = isset($_FILES["ProfileImage"]["tmp_name"]) ? $_FILES["ProfileImage"]["tmp_name"] : '';
    $folder = "./image/" . $ProfileImage;

    if (!empty($_FILES["ProfileImage"]["tmp_name"])) {
        move_uploaded_file($tempimg, $folder);
    } else {
        $folder = isset($_POST['hidden_file']) ? $_POST['hidden_file'] : '';
    }
    $has_error = false;
    if (empty($FirstName)) {
        $response['FirstName'] = 'Pleaase enter first name';
        $has_error = true;
    }
    if (empty($LastName)) {
        $response['LastName'] = 'Pleaase enter last  name';
        $has_error = true;
    }

    if (empty($UserName)) {
        $response['UserName'] = 'Pleaase enter username';
        $has_error = true;
    }

    if (empty($Password)) {
        $response['Password'] = 'Ple ENTER PAsass';
        $has_error = true;
    }

    if (empty($ConfirmPassword)) {
        $response['ConfirmPassword'] = 'Ple confirm ENTER PAsass';
        $has_error = true;
    }

    if ($Password != $ConfirmPassword) {
        $response['confirm_pass'] = 'Password and confirm password doent matech';
        $has_error = true;
    }
    if (!$has_error) {

        $sql = "UPDATE `wpdemo` SET `FirstName`='$FirstName',`LastName`='$LastName',`UserName`='$UserName',`Email`='$Email',`Password`='$Password',`ConfirmPassword`='$ConfirmPassword',`DOB`='$DOB',`Hobby`='$hobby',`Gender`='$Gender',`Country`='$Country',`Message`='$Message',`ProfileImage`='$folder' WHERE `id`='$id'";
        $result = $conn->query($sql);
        $response['status'] = true;
        $response['msg'][] = 'Data inserted successfully';


        if ($result == TRUE) {
            echo "<script>alert('Record updated successfully.')</script>";
            header("Location: view.php");
        } else {
            echo "Error-" . $sql . "<br>" . $conn->error;
        }
    }
    // echo $response;
    // die;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UPDATE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <?php
    // include "config.php";
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM `wpdemo` WHERE `id` = '$id'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $id = $row['id'];
                $FirstName = $row['FirstName'];
                $LastName = $row['LastName'];
                $UserName = $row['UserName'];
                $Email = $row['Email'];
                $Password = $row['Password'];
                $ConfirmPassword = $row['ConfirmPassword'];
                $DOB = $row['DOB'];
                // $Hobby = $_POST['Hobby'];
                $Hobby = explode(",", $row['Hobby']);
                // $hobby = implode(',', $Hobby);   
                $Gender = $row['Gender'];
                $Country = $row['Country'];
                $Message = $row['Message'];
                $ProfileImage = $row['ProfileImage'];

                // print_r($row);
                // die;
                // $name = $_POST["username"];
                // $email = $_POST["email"];
                // $city = $_POST["city"];
            }
        }
    }
    ?>
    <div>
        <h2>UPDATE YOUR DETAILS</h2>
        <form class="container col-4 bg-dark text-light p-5" action="" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <label>FirstName</label>
                <input type="text" class="form-control" name="FirstName" value="<?php echo isset($FirstName) ? $FirstName : ''; ?>">
            </div>
            <div class="mb-3">
                <label>LastName</label>
                <input type="text" class="form-control" name="LastName" value="<?php echo isset($LastName) ? $LastName : ''; ?>">
                <?php echo isset($response['LastName']) ? $response['LastName'] : '' ?>
            </div>
            <div class=" mb-3">
                <label>UserName</label>
                <input type="text" class="form-control" name="UserName" value="<?php echo isset($UserName) ? $UserName : ''; ?>">
                <?php echo isset($response['UserName']) ? $response['UserName'] : '' ?>
            </div>
            <div class="mb-3">
                <label>Email</label>
                <input type="text" class="form-control" name="Email" value="<?php echo isset($Email) ? $Email : ''; ?>">
            </div>
            <div class="mb-3">
                <label>Password</label>
                <input type="Password" class="form-control" name="Password" value="<?php echo isset($Password) ? $Password : ''; ?>">
            </div>
            <div class="mb-3">
                <label>ConfirmPassword</label>
                <input type="Password" class="form-control" name="ConfirmPassword" value="<?php echo isset($ConfirmPassword) ? $ConfirmPassword : ''; ?>">
            </div>

            <div class="mb-3">
                <label>DOB</label>
                <input type="date" class="form-control" name="DOB" value="<?php echo isset($DOB) ? $DOB : ''; ?>">
            </div>
            <div class="mb-3">

                <label>Select your Hobby :-</label><br>

                chess <input type="checkbox" class="form-check-input" name="Hobby[]" value="chess" <?php if (in_array('chess', $Hobby)) {
                                                                                                        echo 'checked';
                                                                                                    } ?>><br>
                Football <input type="checkbox" class="form-check-input" name="Hobby[]" value="Football" <?php if (in_array('Football', $Hobby)) {
                                                                                                                echo 'checked';
                                                                                                            } ?>><br>
                Cricket <input type="checkbox" class="form-check-input" name="Hobby[]" value="Cricket" <?php if (in_array('Cricket', $Hobby)) {
                                                                                                            echo 'checked';
                                                                                                        } ?>>
            </div>
            <div class="mb-3 form-radio">
                Gender :-
                Male <input type="radio" class="form-radio-input" name="Gender" value="Male" <?php if ($Gender == 'Male') {
                                                                                                    echo "checked";
                                                                                                } ?>>
                Female <input type="radio" class="form-radio-input" name="Gender" value="Female" <?php if ($Gender == 'Female') {
                                                                                                        echo "checked";
                                                                                                    } ?>>

            </div>
            <div class="mb-3">
                <select name="Country" id="" class="form-control">
                    <option value="">Select Country</option>
                    <option value="Australia" <?php if ($Country == "Australia") {
                                                    echo "selected";
                                                } ?>>Australia</option>
                    <option value="China" <?php if ($Country == "China") {
                                                echo "selected";
                                            } ?>>China</option>
                    <option value="France" <?php if ($Country == "France") {
                                                echo "selected";
                                            } ?>>France</option>
                    <option value="India" <?php if ($Country == "India") {
                                                echo "selected";
                                            } ?>>India</option>
                    <option value="Ireland" <?php if ($Country == "Ireland") {
                                                echo "selected";
                                            } ?>>Ireland</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="">Message</label>
                <textarea name="Message" id="" cols="30" rows="10" class="form-control" required><?php echo isset($Message) ? $Message : ''; ?></textarea>
            </div>
            <div class="mb-3">
                <label for="">ProfileImage</label>
                <input type="file" name="ProfileImage" class="form-control">
                <input type="hidden" name="hidden_file" value="<?php echo $ProfileImage; ?>">
            </div>
            <div class="button text-center mb-3">
                <button type="submit" class=" btn btn-primary" class="form-control" name="update">Submit</button>
            </div>
        </form>


    </div>


</body>

</html>
<?php

?>