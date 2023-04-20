<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>file</title>
</head>

<body>

    <?php






    ///// 1. file open close


    // juat for reading
    echo readfile("test.txt");


    // fopen/fclose

    $file = fopen("test.txt", "r") or die("Unable to open file!");
    echo fread($file, filesize("test.txt")); // print the whole file in one paragraph 
    echo fgets($file); //print only 1st line
    fclose($file);



    // feof function

    // it will give line by line output 

    $file = fopen("test.txt", "r") or die("Unable to open file!");
    while (!feof($file)) {
        echo fgets($file) . "<br>";
    }
    fclose($file);




    // fgetc




    //  it will give output in single character


    $file = fopen("test.txt", "r") or die("Unable to open file!");
    while (!feof($file)) {
        echo fgetc($file) . "<br>";
    }
    fclose($file);






    ?>
</body>

</html>