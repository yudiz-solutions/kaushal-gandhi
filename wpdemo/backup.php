
<?php
include "config.php";

// Function to check if username or email exists in the database
function checkIfExists($UserName, $Email, $conn)
{
    $query = "SELECT * FROM wpdemo WHERE UserName = '$UserName' OR Email = '$Email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) > 0) {
        // User or email already exists in the database
        return true;
    }

    return false;
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the username and email from the form
    $username = $_POST["username"];
    $email = $_POST["email"];

    // Check if the username or email already exists in the database
    if (checkIfExists($username, $email, $conn)) {
        // User or email already exists, show an error message
        echo "Username or email already exists in the database. Please choose a different username or email.";
    }
} else {


    $response = array();
    // if (isset($_REQUEST['Submit'])) {
    // if ($_POST['FirstName'] == "" || $_POST['LastName'] == "" || $_POST['UserName'] == "" || $_POST['Email'] == "" || $_POST['Password'] == "" || $_POST['ConfirmPassword']  == "" || $_POST['DOB'] == "" || $_POST['Hobby'] == "" || $_POST['Gender'] == "" || $_POST['Country'] == "" || $_POST['Message'] == "" || $_POST['ProfileImage'] == "") {
    //     echo "error: all fields are required";
    // }



    // } else {
    // if (isset($_POST['submit'])) {
    $FirstName = isset($_REQUEST['FirstName']) ? $_REQUEST['FirstName'] : '';
    // var_dump($_REQUEST['data']);
    $LastName = isset($_REQUEST['LastName']) ? $_REQUEST['LastName'] : '';
    $UserName = isset($_REQUEST['UserName']) ? $_REQUEST['UserName'] : '';
    $Email = isset($_REQUEST['Email']) ? $_REQUEST['Email'] : '';
    $Password = isset($_REQUEST['Password']) ? $_REQUEST['Password'] : '';
    $ConfirmPassword = isset($_REQUEST['ConfirmPassword']) ? $_REQUEST['ConfirmPassword'] : '';
    $DOB = isset($_REQUEST['DOB']) ? $_REQUEST['DOB'] : '';
    // $Hobby = $_REQUEST['Hobby'];
    $Hobby = isset($_REQUEST['Hobby']) ? $_REQUEST['Hobby'] : array();
    $hobby = implode(',', $Hobby);
    $Gender = isset($_REQUEST['Gender']) ? $_REQUEST['Gender'] : '';
    $Country = isset($_REQUEST['Country']) ? $_REQUEST['Country'] : '';
    $Message = isset($_REQUEST['Message']) ? $_REQUEST['Message'] : '';

    $ProfileImage = isset($_FILES["ProfileImage"]["name"]) ? $_FILES["ProfileImage"]["name"] : '';
    $tempimg = isset($_FILES["ProfileImage"]["tmp_name"]) ? $_FILES["ProfileImage"]["tmp_name"] : '';
    $folder = '';
    if (!empty($tempimg)) {
        $folder = "./image/" . $ProfileImage;
    }

    $has_error = false;
    if (empty($FirstName)) {
        $response['msg'][] = 'Pleaase enter first name';
        $has_error = true;
    }
    if (empty($LastName)) {
        $response['msg'][] = 'Pleaase enter last  name';
        $has_error = true;
    }

    if (empty($UserName)) {
        $response['msg'][] = 'Pleaase enter username';
        $has_error = true;
    }

    if (empty($Password)) {
        $response['msg'][] = 'Ple ENTER PAsass';
        $has_error = true;
    }

    if (empty($ConfirmPassword)) {
        $response['msg'][] = 'Ple confirm ENTER PAsass';
        $has_error = true;
    }

    if ($Password != $ConfirmPassword) {
        $response['msg'][] = 'Password and confirm password doent matech';
        $has_error = true;
    }
    if (empty($DOB)) {
        $response['msg'][] = 'please Enter DOB';
        $has_error = true;
    }
    if (empty($Hobby)) {
        $response['msg'][] = 'please Enter Hobby';
        $has_error = true;
    }
    if (empty($Gender)) {
        $response['msg'][] = 'please Enter Gender';
        $has_error = true;
    }
    if (empty($Country)) {
        $response['msg'][] = 'please Enter Country';
        $has_error = true;
    }
    if (empty($Message)) {
        $response['msg'][] = 'please Enter Message';
        $has_error = true;
    }
    if (empty($ProfileImage)) {
        $response['msg'][] = 'please Enter image';
        $has_error = true;
    }


    if (!$has_error) {
        // Insert sql query
        $ISQL = "INSERT INTO `wpdemo`(`FirstName`, `LastName`, `UserName`, `Email`, `Password`, `ConfirmPassword`, `DOB`, `Hobby`, `Gender`, `Country`, `Message`, `ProfileImage`) VALUES ('$FirstName','$LastName','$UserName','$Email','$Password','$ConfirmPassword','$DOB','$hobby','$Gender','$Country','$Message','$folder')";
        $result = mysqli_query($conn, $ISQL);
        move_uploaded_file($tempimg, $folder);

        $response['status'] = true;
        $response['msg'][] = 'Data inserted successfully';
    }
    echo json_encode($response);
    die;

    // if ($Password == $ConfirmPassword) {


    //     if ($result) {
    //         echo "<script>
    //     alert('data inserted successfully')</script> ";
    //     } else {
    //         // die(mysqli_error($conn));
    //         echo "<script>
    //     alert('Something Wrong Went.')
    //     </script>";
    //     }
    // } else {


    //     echo "<script>
    //     alert('confirm password is wrong')</script> ";
    // }
    // header('location: reg.form.php ');
    // }
    // }
}
