<?php
session_start();
require_once 'db.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];


$sql = mysqli_query($db, "INSERT INTO `feedback` (`name`, `email`, `phone`, `message`) VALUES ('$name', '$email', '$phone', '$message')");

header('Location: ../');