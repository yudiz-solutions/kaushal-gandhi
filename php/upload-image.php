<!DOCTYPE html>
<html>

<body>

    <form action="upload-image.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="Upload" id="Upload">
        <input type="submit" value="Upload " name="submit">
    </form>

    <?php
    $target_dir = "upload/";
    $target_file = $target_dir . basename($_FILES["Upload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if (isset($_POST["submit"])) {
        $check = getimagesize($_FILES["Upload"]["tmp_name"]);
        if ($check !== false) {
            echo "File is an image - " . $check["mime"] . ".";
            $uploadOk = "yes";
        } else {
            echo "File is not an image.";
            $uploadOk = "no";
        }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
        echo "Sorry, file already exists.";
        $uploadOk = "no";
    }

    // Check file size
    if ($_FILES["Upload"]["size"] > 500000) {
        echo "Sorry, your file is too large.";
        $uploadOk = "no";
    }

    // Allow certain file formats
    if (
        $imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif"
    ) {
        echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = "no";
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == "no") {
        echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
    } else {
        if (move_uploaded_file($_FILES["Upload"]["tmp_name"], $target_file)) {
            echo "The file " . htmlspecialchars(basename($_FILES["Upload"]["name"])) . " has been uploaded.";
        } else {
            echo "Sorry, there was an error uploading your file.";
        }
    }
    ?>
</body>

</html>