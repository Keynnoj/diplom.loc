<?php
require_once '/OpenServer/domains/diplom.loc/includes/init.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/style.css">
    <title>Hello, world!</title>
</head>
<?php
include('/OpenServer/domains/diplom.loc/includes/nav.php');

?>

<body>
<!-- Профиль -->
<form action="vendor/update.php" method="post" enctype="multipart/form-data">



<div class="container">
    <div class="row">
        <div class="col">
            <p>Ваш Аватар</p> <img src="<?= $_SESSION['user']['avatar'] ?>" width="200" alt="">
        </div>
        <div class="col">



            <p style="margin: 10px 0;"><a>Ваше Имя: </a><input required type="text" name="full_name" placeholder="Полное имя" value="<?=$_SESSION['user']['full_name']?>"></p>
            <p style="margin: 10px 0;"><a>Ваша почта: </a><input required type="text" name="email" placeholder="email" value="<?=$_SESSION['user']['email'] ?>"></p>
            <p style="margin: 10px 0;"><a>Ваш ВИН: </a> <input type="text" name="vin" placeholder="VIN" value="<?= $_SESSION['user']['VIN']?>"></p>


            <button type="submit">Изменить</button>




            <a href="vendor/logout.php" class="logout">Выход</a>
        </div>
    </div>
    <div class="row">
        <div class="col">
        </div>

    </div>
</div>
</form>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>

