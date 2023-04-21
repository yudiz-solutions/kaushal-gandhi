<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>practice</title>
</head>

<body>

    <?php
    $name = $email = "";
    $nameError = $emailError = "";

    if (isset($_POST["submit"])) {

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                $nameError = "Name is required";
            } else {
                $name = test_input($_POST["name"]);
            }

            if (empty($_POST["email"])) {
                $emailError = "Email is required";
            } else {
                $email = test_input($_POST["email"]);
            }
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        Name: <input type="text" name="name">
        <span class="error">* <?php echo $nameError; ?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <span class="error">* <?php echo $emailError; ?></span>
        <br><br>
        <input type="submit" name="submit" value="Submit">
        <br><br>
        <br><br>


    </form>


    <?php


    echo "Today is " . date("Y-m-d-l");
    echo "<h2>Your Input:</h2>";
    echo $name;
    echo "<br>";
    echo $email;
    ?>

</body>

</html>