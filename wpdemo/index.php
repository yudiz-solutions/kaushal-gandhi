<?php

include 'config.php';
session_start();
error_reporting(0);

if (isset($_SESSION['UserName'])) {
    header("Location: view.php");
}
if (isset($_POST['submit'])) {
    $Email = $_POST['Email'];
    $Password = ($_POST['Password']);
    // $ConfirmPassword = ($_POST['ConfirmPassword']);

    $sql = "SELECT * FROM wpdemo WHERE Email='$Email'   AND Password='$Password' ";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['UserName'] = $row['UserName'];
        header("Location: dashbord.php");
    } else {
        echo "<script>alert('Email or Password is Wrong.')</script>";
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title> Login Form </title>
    <style>
        * {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 24px;
            font-style: normal;
            font-variant: normal;
            font-weight: 400;
            line-height: 26.4px;
        }


        button {
            cursor: pointer;
            height: 50px;
            transition: all 0.3s ease-in-out;
            border-radius: 30px;
            border: 3px solid black;
        }

        button:hover {
            transform: scale(1.1);
        }

        form {
            width: 40%;
            height: 70%;
            margin: 25px;
            border-radius: 30px;
            background: skyblue;
            box-shadow: 25px 25px 50px #848484,
                -25px -25px 50px #ffffff;
            ;
        }

        input {
            border-radius: 10px;
            border: 2px solid black;
            width: 70%;
        }
    </style>
</head>

<body>
    <center>
        <div class="form">
            <form action="" method="post">
                <br>
                <h2>Login</h2>
                <div class="input-group">
                    <input type="text" class="input" placeholder="Email or username" name="Email" required>
                </div>
                <br>
                <div>
                    <input type="password" class="input" placeholder="Password" name="Password" value="<?php echo $_POST['Password']; ?>" required>
                </div>
                <br>
                <div>
                    <button name="submit" class="btn">Login</button>
                </div>
                <br>
                <p>Don't have an account? <a href="reg.form.php">Register Here</a>.</p></br>
            </form>
        </div>
    </center>
</body>

</html>