<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>

<body>

    <form action="insertdata.php" method="post">
        name :
        <input type="text" placeholder="enter your name" name="name" required>
        <br><br>
        department :
        <input type="text" placeholder="enter your department" name="department" required>
        <br><br>
        gender :
        male:<input type="radio" name="gender" value="male">
        female :<input type="radio" name="gender" value="female">
        <br><br>
        hobbies :
        cricket:<input type="checkbox" name="hobbies" value="cricket">
        chess:<input type="checkbox" name="hobbies" value="chess">
        football:<input type="checkbox" name="hobbies" value="football">
        <br><br>
        <button name="submit">Submit</button>

    </form>

</body>

</html>