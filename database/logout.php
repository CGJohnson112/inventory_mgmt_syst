<?php
session_start();

session_unset();

session_destroy();

echo "Goodbye";

echo '<br><a href="../login.php">Go back to log in page</a>';