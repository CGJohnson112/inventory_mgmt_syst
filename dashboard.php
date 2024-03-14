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
<title>Dashboard - Inventory Management system</title>
<!-- Latest compiled and minified CSS -->

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="css/login.css">

</head>
<body>


    <div id="dashboardMainContainer">
    <div class="dashboard_sidebar">
        <h3 class="dashboard_logo">IMS</h3>

        <div class="dashboard_sidebar_user">
            <img class="headshot" src="images/user/<?php echo $user["image"]; ?>" alt="User image">
            <span>Well Come to the site, <?php echo $user['first_name'] . ' ' . $user['last_name']; ?></span>
        </div>

        <div class="dashboard_sidebar_menus">
            <ul class="dashboard_menu_lists">
                <li>
                    <a href=""><i class="fa fa-dashboard"></i>Link 1</a>
                </li>
                <li>
                    <a href=""><i class="fa fa-dashboard"></i>Link 2</a>
                </li>
            </ul>
        </div>
    </div>

        <div class="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href=""><i class="fa fa-navicon"></i></a>
                <a href="database/logout.php"><i class="fa fa-power-off"></i>Log-out</a>
            </div>

            <div class="dashboard_content">
                <div class="dashboard_content_main">
                </div>
            </div>
        </div>

    </div>
    
    </div>

<!-- jQuery library -->
<h1>Dashboard</h1>




<!-- Latest compiled JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>