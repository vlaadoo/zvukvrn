<?php require_once '../inc/db.php';
session_start();
if (!$_SESSION['user']) {
  header('Location: /admin/');
}
$category = $_POST['category'];
$item = $_POST['item'];
$price = $_POST['price'];
$spec = $_POST['spec'];
$check = mysqli_query($db, "SELECT * FROM `stuff` ");
$sql = mysqli_query($db, "INSERT INTO `stuff` (`category`, `item`, `spec`, `price`) VALUES ('$category', '$item', '$spec', '$price')");

if (mysqli_num_rows($check) < mysqli_num_rows(mysqli_query($db, "SELECT * FROM `stuff` "))) {
  echo '<script>alert("Успешно добавлено в базу данных")</script>';
  unset($_POST['category']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin panel</title>
  <link href="/css/admin.css" rel="stylesheet" />
</head>

<body>

  <div class="container">
    <input type="radio" id="tab-link-1" name="tabset" checked>
    <label for="tab-link-1">Оборудование</label>
    <input type="radio" id="tab-link-2" name="tabset">
    <label for="tab-link-2">Обратная связь</label>
    <input type="radio" id="tab-link-3" name="tabset">
    <label for="tab-link-3">Отзывы</label>
    <button class="custom-btn btn-10" onclick="window.location.href='../inc/logout.php'">Выход</button>

    <!-- <div class="timedisplay" style=" height: 10px; width: 10px"></div> -->
    <div class="tab-content">
      <!-- Tab 1 -->
      <section class="tab-panel" id="tab-1">
        <h2>Добавление оборудования в список</h2>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">
              <form id="contactForm" method="post">
                <div class="form-floating mb-3">
                  <label for="category">Категория</label>
                  <input class="form-control" name="category" id="category" type="text" placeholder="Введите категорию">
                </div>
                <div class="form-floating mb-3">
                  <label for="item">Единица оборудования</label>
                  <input class="form-control" name="item" id="item" type="text"
                    placeholder="Введите наименование единицы">
                </div>
                <div class="form-floating mb-3">
                  <label for="spec">Характеристики</label>
                  <textarea class="form-control" name="spec" id="spec" type="text"
                    placeholder="Спецификации оборудования" style="height: 10rem"></textarea>
                </div>
                <div class="form-floating mb-3">
                  <label for="phone">Цена</label>
                  <input class="form-control" name="price" id="price" type="price" placeholder="Введите цену">
                </div>
                <input type='submit' id='submit' value='Добавить в БД' class="btn btn-primary btn-xl">
              </form>
            </div>
          </div>
        </div>
      </section>

      <!-- Tab 2 -->
      <section class="tab-panel" id="tab-2">
        <h2>Заявки клиентов</h2>
        <?php
        $sql = "SELECT * FROM `feedback`";
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
          echo "<div class='feedback'><p><user>Имя пользователя: " . $row['name'] . "</user><email>E-mail: " . $row['email'] . "</email><phone>Телефон: " . $row['phone'] . "</phone></p><p>" . "<mess>Заявка: " . $row['message'] . "</mess></p></div>";
        }
        ?>
      </section>

      <!-- Tab 3 -->
      <section class="tab-panel" id="tab-3">
        <h2>Отзывы </h2>

        <?php
        $sql = "SELECT * FROM `comment`";
        $result = $db->query($sql);
        while ($row = $result->fetch_assoc()) {
          echo '<div class="comment"><p><name>' .$row["name"] . '</name><town>' .$row["town"] .'</town><date>'. $row["date"] .'</date></p>
          <p><a name="delete" id= "'. $row["id"].'"  class="link" href="../inc\delcom.php?id='. $row["id"].'">Удалить</a><message>' .$row["message"] . '</message></p></div>';
        }
        ?>
      </section>
    </div>
  </div>
</body>

</html>