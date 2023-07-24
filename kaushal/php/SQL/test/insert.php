

<?php

include  'databaseconn.php';
if (isset($_POST['submit'])) {
  $name = $_POST['name'];
  $enroll = $_POST['enroll'];
  $branch = $_POST['branch'];

  $sql = "INSERT INTO info(`name`,`enroll`,`branch`) VALUES ('$name','$enroll','$branch')";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    echo "<script>
      alert('data inserted successfully')</script> ";
  } else {
    die(mysqli_error($conn));
    echo "<script>
      alert('Something Wrong Went.')
  </script>";
  }
}
?>
