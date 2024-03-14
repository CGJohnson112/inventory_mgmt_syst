<?php
    session_start();
    if(!isset($_SESSION['user'])) header('Location:login.php');
    $user = ($_SESSION['user']);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Bootstrap and jQuery CDN Document</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    
</div>
<!-- jQuery library -->
<h1>Dashboard</h1>
<span>Welcome to your database page, <?php echo $user['first_name'] . ' ' . $user['last_name']; ?></span>

<a href="database/logout.php">Logout</a>
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>