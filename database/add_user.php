<?php
require('connection.php');
$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$image = $_POST['image'];

$sql = "INSERT into users (first_name, last_name, password, email, image) VALUES ('$first_name', '$last_name', '$password', '$email', '$image')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


$conn->close();







  

?>