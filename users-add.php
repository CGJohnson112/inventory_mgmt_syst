<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Inventory Management System -- Add user</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>

<?php
include('partials/header.php');



?>



<div class="container">
<form action="database/add_user.php" method="post">

<div class="form-group">
    <label>First Name</label>
    <input type="text" class="form-control" name="first_name" placeholder="Enter first name">
  </div>

  <div class="form-group">
    <label>Last Name</label>
    <input type="text" class="form-control" name="last_name" placeholder="Enter last name">
  </div>

  <div class="form-group">
    <label>Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>

  <div class="form-group">
    <label>Email address</label>
    <input type="email" class="form-control" name="email" placeholder="Enter signon name">
  </div>

  <div class="form-group">
    <label>Image</label>
    <input type="text" class="form-control" name="image" placeholder="image">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>


</div>

<?php
include('partials/footer.php')
?>
