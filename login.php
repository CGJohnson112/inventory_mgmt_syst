<?php

//start the session
session_start();
if(isset($_SESSION['user'])) {
    header('location: dashboard.php');
}

$error_message = '';
    if($_POST){
        include('database/connection_PDO.php');
        $username = $_POST['username'];
        $password = $_POST['password'];
        $query = 'SELECT * FROM users WHERE users.email= "' . $username .'" AND users.password="' . $password .'" LIMIT 1';
        $stmt = $conn->prepare($query);
        $stmt->execute();
        
        if($stmt->rowCount() > 0 ){

            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $user = $stmt->fetchAll()[0];
            $_SESSION['user'] = $user;
            //var_dump($_SESSION['user']);
            header('Location: dashboard.php');
            die;

        } 
            else $error_message ='please check credentials to ensure they are correct to log in';
        }
    
        
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>IMS Login - Inventory Management System</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="css/login.css"> 
</head>
<body>
<?php if(!empty($error_message))  { ?>
    
    ?>
        <div id="errorMessage">

            <strong>ERRNO</strong><p > <?php echo $error_message; ?></p>
        </div>

    <?php } ?>
<div class="container">
    <div class="loginHeader">
        <h1>IMS</h1>
        <p>Inventory Management System</p>
    </div>

    <div>
        <form action="login.php" method="POST">
            <div class="loginInputsContainer">
                <label for="">Username</label>
                 <input class="form-control" placeholder="username" name="username" type="text" />
            </div>

            <div class="loginInputsContainer">
                <label for="">Password</label>
                <input class="form-control" placeholder="password" name="password" type="password" />
            </div>

            <div class="loginButtonContainer">
                <button class="btn btn-success">Login</button>
            </div>
        </form>
    </div>
</div>
<!-- jQuery library -->
<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>