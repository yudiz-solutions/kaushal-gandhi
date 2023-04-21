<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        Enter dividend:
        <input type=" number" name="dividend"><br><br>
        Enter divisor:
        <input type=" number" name="divisor"><br><br>
        <input type="submit" value="Calculate" name="submit">
    </form>

</body>

</html>
<?php

if (isset($_POST["submit"])) {

    $dividend = $_POST["dividend"];
    $divisor = $_POST['divisor'];


    if ($divisor == 0) {
        throw new Exception("you can not divide any number by 0");
    } else $divide = $dividend / $divisor;


    echo $divide;
}
