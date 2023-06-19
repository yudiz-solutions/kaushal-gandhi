<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KEKA</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" class="container col-4 bg-dark text-light p-5">
        <div class="mb-3">Enter your Effective hours:
            <input type="number" class="form-control" name="hrs">
        </div>
        <div class="mb-3"> Enter your Effective minutes:
            <input type="number" class="form-control" name="min">
        </div>
        <div class="mb-3"> Enter your Last Clock-in hours:
            <input type="number" class="form-control" name="c_hrs">
        </div>
        <div class="mb-3"> Enter your Last Clock-in minutes:
            <input type="number" class="form-control" name="c_min">
        </div>

        <input type="submit" name="submit" value="Calculate">

        <?php
        date_default_timezone_set("Asia/Calcutta");   //India time (GMT+5:30)

        if (isset($_POST["submit"])) {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $hours = $_POST["hrs"];
                $minutes = $_POST["min"];
                $c_hours = $_POST["c_hrs"];
                $c_minutes = $_POST["c_min"];
                //Total hr 8
                $remainHrs = 7 - $hours;
                $remainMin = 60 - $minutes;
                $xHr = $remainHrs + $c_hours;
                $xMin = $remainMin + $c_minutes;
                if ($xMin >= 60) {
                    $leavingHr = $xHr + 1;
                    $leavingMin = $xMin - 60;
                } else {
                    $leavingHr = $xHr;
                    $leavingMin = $xMin;
                }


                // echo "<script>alert('You can go after: $leavingHr : $leavingMin')</script>";
                echo "<h3><br><br><b> You can go after: </b><br><h3>";
                echo "<b>" . $leavingHr . ": </b> ";
                echo "<b>" . $leavingMin  . "</b>";
                echo "<h1><br> The min might be differ, please go after 2-3 min </h1>";
            }
        }

        ?>
    </form>

</body>

</html>