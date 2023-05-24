<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PosT registation</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>
    <form id="form" class="container col-4 bg-dark text-light p-5" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <div id="error_messages"></div>
        </div>
        <div class="mb-3">
            <label>FirstName</label>
            <input type="text" class="form-control" name="firstname" id="firstname">
            <h5 id="firstcheck" style="color: red; display:none">
                **Firstname is missing
            </h5>
        </div>
        <div class="mb-3">
            <label>LastName</label>
            <input type="text" class="form-control" name="lastname" id="lastname">
            <h5 id="lastcheck" style="color: red; display:none">
                **Lastname is missing
            </h5>
        </div>
        <div class="mb-3">
            <label>Email</label>
            <input type="text" class="form-control" name="email" id="email">
            <small id="emailvalid" class="form-text 
                text-muted invalid-feedback">
                Your email must be a valid email
            </small>
        </div>
        <div class="mb-3">
            <label for="">ProfileImage</label>
            <input type="file" name="post" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">Message</label>
            <textarea name="massage" cols="30" rows="10" class="form-control"></textarea>
        </div>
        <div class="mb-3">
            <label for="">Phone no.</label>
            <input type="text" name="number" class="form-control">
        </div>
        <div class="mb-3">
            <label for="">hashtag</label>
            <input type="text" name="hashtag" class="form-control">
        </div>
        <div class="button text-center mb-3">
            <button type="submit" class=" btn btn-primary" class="form-control" name="submit">Submit</button>
        </div>
    </form>
</body>
<script>
    $(document).ready(function() {

        // Validate firstname
        $("#firstcheck").hide();
        let firstnameError = true;
        $("#firstname").keyup(function() {
            validateFirstname();
        });

        function validateFirstname() {
            let firstnameValue = $("#firstname").val();
            if (firstnameValue.length == "") {
                $("#firstname").addClass('has-error');
                $("#firstcheck").show();
                // usernameError = false;
                //return false;
            } else {
                $("#firstcheck").hide();
            }
        }
        // Validate Lastname
        $("#lastcheck").hide();
        let lastnameError = true;
        $("#lastname").keyup(function() {
            validatelastname();
        });

        function validatelastname() {
            let lastnameValue = $("#lastname").val();
            if (lastnameValue.length == "") {
                $("#lastname").addClass('has-error');
                $("#lastcheck").show();
                // usernameError = false;
                //return false;
            } else {
                $("#lastcheck").hide();
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
        $(document).on('submit', '#form', function(e) {
            $("#lastname").removeClass('has-error');
            $("#firstname").removeClass('has-error');
            validatelastname();
            validateFirstname();
            e.preventDefault();
            var data = new FormData(this);
            if ($('.has-error').length == 0) {
                //if (passwordError == false && confirmPasswordError == false && usernameError == false) {
                $.ajax({
                    url: "post_regscript.php",
                    type: "POST",
                    processData: false,
                    contentType: false,
                    data: data,
                    success: function(response) {
                        const obj = JSON.parse(response);
                        var error = '';
                        console.log(obj.msg)
                        $.each(obj.msg, function(index, value) {
                            error += '<p>' + value + '</p>'
                        });
                        $("#error_messages").html(error)
                    },
                });
                $("#form").trigger("reset");
            }
            // $("#form").trigger("reset");
        });
    });
</script>

</html>