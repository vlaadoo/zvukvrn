<?php
session_start();
require_once 'db.php';

$name = $_POST['nameCom'];
$town = $_POST['townCom'];
$message = $_POST['messageCom'];

$sql = mysqli_query($db, "INSERT INTO `comment` (`name`, `town`,  `message`, `date`) VALUES ('$name', '$town', '$message', CURDATE())");

header('Location: ../');