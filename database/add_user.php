<?php

$pdo =require_once('connection.php');

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$password = $_POST['password'];
$email = $_POST['email'];
$image = $_POST['image'];

$sql= ("INSERT INTO users(first_name, last_name, password, email, image) VALUES($first_name, $last_name, $password, $email, $image)");

var_dump($sql);
?>