<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <form id="form" class="container col-4 bg-dark text-light p-5" method="post" enctype="multipart/form-data">
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
            <input type="text" class="form-control" name="UserName" id="usernames" required>
            <h5 id="usercheck" style="color: red;">
                **Username is missing
            </h5>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="text" class="form-control" name="Email" id="email" required>
            <small id="emailvalid" class="form-text
                text-muted invalid-feedback">
                Your email must be a valid email
            </small>
        </div>
        <div class="mb-3">
            <label>Password</label>
            <input type="Password" class="form-control" id="password" name="Password" required>
            <h5 id="passcheck" style="color: red;">
                **Please Fill the password
            </h5>
        </div>
        <div class="mb-3">
            <label>ConfirmPassword</label>
            <input type="Password" class="form-control" id="conpassword" name="ConfirmPassword" required>
            <h5 id="conpasscheck" style="color: red;">
                **Password didn't match
            </h5>
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
            <select name="Country" class="form-control" required>
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
            <textarea name="Message" cols="30" rows="10" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="">ProfileImage</label>
            <input type="file" name="ProfileImage" class="form-control" required>
        </div>
        <div class="button text-center mb-3">
            <button type="submit" class=" btn btn-primary" class="form-control" name="submit">Submit</button>
        </div>
        <p>have an account? <a href="login.php">Login Here</a>.</p></br>
    </form>

</body>

<script>
    $(document).ready(function() {

        // Validate Username
        $("#usercheck").show();
        let usernameError = true;
        $("#usernames").keyup(function() {
            validateUsername();
        });

        function validateUsername() {
            let usernameValue = $("#usernames").val();
            if (usernameValue.length == "") {
                $("#usercheck").show();
                usernameError = false;
                return false;
            } else if (usernameValue.length < 3 || usernameValue.length > 10) {
                $("#usercheck").show();
                $("#usercheck").html("**length of username must be between 3 and 10");
                usernameError = false;
                return false;
            } else {
                $("#usercheck").hide();
            }
        }

        // Validate Email
        const email = document.getElementById("email");
        email.addEventListener("blur", () => {
            let regex = /^([_\-\.0-9a-zA-Z]+)@([_\-\.0-9a-zA-Z]+)\.([a-zA-Z]){2,7}$/;
            let s = email.value;
            if (regex.test(s)) {
                email.classList.remove("is-invalid");
                emailError = true;
            } else {
                email.classList.add("is-invalid");
                emailError = false;
            }
        });
        // password validation
        $("#passcheck").show();
        let passwordError = true;
        $("#password").keyup(function() {
            validatePassword();
        });

        function validatePassword() {
            let passwordValue = $("#password").val();
            if (passwordValue.length == "") {
                $("#passcheck").show();
                passwordError = false;
                return false;
            }
            if (passwordValue.length < 3 || passwordValue.length > 10) {
                $("#passcheck").show();
                $("#passcheck").html(
                    "**length of your password must be between 3 and 10"
                );
                $("#passcheck").css("color", "red");
                passwordError = false;
                return false;
            } else {
                $("#passcheck").hide();
            }
        }

        // Validate Confirm Password
        $("#conpasscheck").show();
        let confirmPasswordError = true;
        $("#conpassword").keyup(function() {
            validateConfirmPassword();
        });

        function validateConfirmPassword() {
            let confirmPasswordValue = $("#conpassword").val();
            let passwordValue = $("#password").val();
            if (passwordValue != confirmPasswordValue) {
                $("#conpasscheck").show();
                $("#conpasscheck").html("**Password didn't Match");
                $("#conpasscheck").css("color", "red");
                confirmPasswordError = false;
                return false;
            } else {
                $("#conpasscheck").hide();
            }
        }
        $(document).on('submit', '#form', function(e) {
            e.preventDefault();
            if (passwordError == false && confirmPasswordError == false && usernameError == false) {
                $.ajax({
                    url: "regscript.php",
                    type: "POST",
                    // contentType: 'multipart/form-data',
                    data: $(this).serialize(),
                    success: function(response) {
                        alert('data inserted successfully');
                    },
                });
                $("#form").trigger("reset");
            } else {
                alert('something went  wrong');
            }

            // $("#form").trigger("reset");
        });


    });
</script>

</html>