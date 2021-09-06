<?php
session_start();
require_once 'db.php';

$login = $_POST['login'];
$pass = $_POST['pass'];

$check_user = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$pass'");
if (mysqli_num_rows($check_user) > 0){
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "id" => $user['id'],
        "login" => $user['login'],
    ];
    header('Location: ../admin/admin.php');

} else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../admin/index.php');
};