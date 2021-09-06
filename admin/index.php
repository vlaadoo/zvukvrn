<?php 
require_once '../inc/db.php'; 
session_start();
if ($_SESSION['user']) {
  header('Location: /admin/admin.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <link href="/css/admin.css" rel="stylesheet" />
    <title>Admin panel</title>
</head>

<body>
    <div class="signin">
        <div class="login">
            <h1>Admin panel</h1>
            <form action="/inc/signin.php" method="post">
                <input type="text" name="login" placeholder="Username" required="required" />
                <input type="password" name="pass" placeholder="Password" required="required" />
                <button type="submit" class="btn btn-primary btn-block btn-large">Войти</button>
                <?php
                if ($_SESSION['message']) {
                    echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
                }
                unset($_SESSION['message']);
                ?>
            </form>
        </div>
    </div>
</body>

</html>