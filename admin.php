<?php
require_once 'includes/func_global.php';
require_once 'includes/db.php';
require_once 'includes/auth_admin_check.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/product.css">
</head>

<body>
<a href="">hi</a>

<div class="container">
    <form action="add/add_product.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите заголовок: </a>
            </div>
            <div class="col">
                <input required type="text" name="title" placeholder="Введите заголовок"></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите текст: </a>
            </div>
            <div class="col">
                <input required type="text" name="content" placeholder="Введите текст"></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите цену: </a>
            </div>
            <div class="col">
                <input required type="text" name="price" placeholder="Введите цену"></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите введите старую цену: </a>
            </div>
            <div class="col">
                <input required type="text" name="oldprice" placeholder="Введите введите старую цену"></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите номер каddтегории: </a>
            </div>
            <div class="col">
                <input required type="text" name="category_id" placeholder="Введите номер категории"></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Ввыбирите фото: </a>
            </div>
            <div class="col">
                <input required type="text" name="img" placeholder="Ввыбирите фото"></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите хит (1,0): </a>
            </div>
            <div class="col">
                <input required type="text" name="hit" placeholder="Введите хит (1,0)"></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите скидку (1,0): </a>
            </div>
            <div class="col">
                <input required type="text" name="sale" placeholder="Введите скидку (1,0)"></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите номер модели: </a>
            </div>
            <div class="col">
                <input required type="text" name="model_id" placeholder="Введите номер модели"></p>
            </div>
        </div>
        <button type="submit">Добавить</button>
    </form>

   <!-- <form action="add/add_product.php" method="post" enctype="multipart/form-data">
        <p style="margin: 10px 0;"><a>Введите заголовок: </a>
            <input required type="text" name="title" placeholder="Введите заголовок"></p>
        <p style="margin: 10px 0;"><a>Введите текст: </a>
            <input required type="text" name="content" placeholder="Введите текст"></p>
        <p style="margin: 10px 0;"><a>Введите цену: </a>
            <input required type="text" name="price" placeholder="Введите цену"></p>
        <p style="margin: 10px 0;"><a>Введите введите старую цену: </a>
            <input required type="text" name="oldprice" placeholder="Введите введите старую цену"></p>
        <p style="margin: 10px 0;"><a>Введите номер категории: </a>
            <input required type="text" name="category_id" placeholder="Введите номер категории"></p>
        <p style="margin: 10px 0;"><a>Ввыбирите фото: </a>
            <input required type="text" name="img" placeholder="Ввыбирите фото"></p>
        <p style="margin: 10px 0;"><a>Введите хит (1,0): </a>
            <input required type="text" name="hit" placeholder="Введите хит (1,0)"></p>
        <p style="margin: 10px 0;"><a>Введите скидку (1,0): </a>
            <input required type="text" name="sale" placeholder="Введите скидку (1,0)"></p>
        <p style="margin: 10px 0;"><a>Введите номер модели: </a>
            <input required type="text" name="model_id" placeholder="Введите номер модели"></p>
        <button type="submit">Добавить</button>
    </form> -->



    <form action="add/add_mark.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите марку: </a>
            </div>
            <div class="col">
                <input required type="text" name="name" placeholder="Введите марку"></p>
            </div>
        </div>
        <button type="submit">Добавить</button>
    </form>

    <form action="add/add_model.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите модель: </a>
            </div>
            <div class="col">
                <input required type="text" name="name" placeholder="Введите модель"></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите номер марки: </a>
            </div>
            <div class="col">
                <input required type="text" name="mark_id" placeholder="Введите номер марки"></p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите Вин: </a>
            </div>
            <div class="col">
                <input required type="text" name="VIN" placeholder="Введите вин"></p>
            </div>
        </div>
        <button type="submit">Добавить</button>
    </form>

    <form action="add/add_category.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col">
                <p style="margin: 10px 0;"><a>Введите категорию: </a>
            </div>
            <div class="col">
                <input required type="text" name="name" placeholder="Название категории"></p>
            </div>
        </div>
        <button type="submit">Добавить</button>
    </form>