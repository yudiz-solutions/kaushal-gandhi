<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>

<body>
    <form class="container col-4 bg-dark text-light p-5" action="regscript.php" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label>FirstName</label>
            <input type="text" class="form-control" name="FirstName" required>
        </div>
        <div class="mb-3">
            <label>LastName</label>
            <input type="text" class="form-control" name="LastName" required>
        </div>
        <div class="mb-3">
            <label>UserName</label>
            <input type="text" class="form-control" name="UserName" required>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="text" class="form-control" name="Email" required>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="Password" class="form-control" name="Password" required>
        </div>
        <div class="mb-3">
            <label>ConfirmPassword</label>
            <input type="Password" class="form-control" name="ConfirmPassword" required>
        </div>

        <div class="mb-3">
            <label>DOB</label>
            <input type="date" class="form-control" name="DOB">
        </div>
        <div class="mb-3">
            <label>Select your Hobby :-</label><br>

            chess <input type="checkbox" class="form-check-input" name="Hobby[]" value="chess"><br>
            Football <input type="checkbox" class="form-check-input" name="Hobby[]" value="Football"><br>
            Cricket <input type="checkbox" class="form-check-input" name="Hobby[]" value="Cricket">
        </div>
        <div class="mb-3 form-radio">
            Gender :-
            Male <input type="radio" class="form-radio-input" name="Gender" value="Male">
            Female <input type="radio" class="form-radio-input" name="Gender" value="Female">

        </div>
        <div class="mb-3">
            <select name="Country" id="" class="form-control" required>
                <option value="">Select Country</option>
                <option value="Australia">Australia</option>
                <option value="China">China</option>
                <option value="France">France</option>
                <option value="India">India</option>
                <option value="Ireland">Ireland</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="">Message</label>
            <textarea name="Message" id="" cols="30" rows="10" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="">ProfileImage</label>
            <input type="file" name="ProfileImage" class="form-control" required>
        </div>
        <div class="button text-center mb-3">
            <button type="submit" class=" btn btn-primary" class="form-control" name="submit">Submit</button>
        </div>
    </form>

</body>

</html>