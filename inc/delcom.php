<?php
session_start();
require_once 'db.php';

$id = $_GET['id'];

$sql = mysqli_query($db, "DELETE FROM `comment` WHERE `id`=$id ");

header('Location: ../admin/admin.php');