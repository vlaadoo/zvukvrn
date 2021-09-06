<?php
session_start();
require_once 'db.php';
$cat = $_GET["category"] ;
$res = mysqli_query($db, "SELECT * FROM `stuff` WHERE `category` = '$cat' ");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="../css/stuff.css" media="screen" type="text/css" rel="stylesheet"/>
    <title><?php echo $cat?></title>
</head>

<body>
    <h1><?php echo $cat?></h1>
    <table class="container">
    <thead>
    <tr>
    <th><h1>Название</h1></th>
    <th><h1>Характеристики</h1></th>
    <th><h1>Цена</h1></th>
    </tr>
    </thead>
    <tbody>
    <?php
$res = mysqli_query($db, "SELECT * FROM `stuff` WHERE `category` = '$cat' ");
if (mysqli_num_rows($res) > 0){
    while ($list = $res->fetch_assoc()){
        echo "<tr>
        <td>" . $list['item'] . "</td>
        <td class='spec'>" . $list['spec'] . "</td>
        <td>" . $list['price']. "</td></tr>";
    }
}
?>
</tbody>
</table> 
</body>

</html>