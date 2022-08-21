<?php
$connection = mysqli_connect('127.0.0.1:3306', 'root', '', 'diplom');
if ($connection == false) {
    echo 'Не удалось подключиться к БД<br>';
    echo mysqli_connect_error();
    exit;
}
?>
<?php
session_start();

if (!$_SESSION['user']) {
    header('Location: /');

}
?>
<?php

session_start();
require_once 'connect.php';
$id = $_SESSION['user']['id'];


$title = $_POST['title'];
$content= $_POST['content'];
$price = $_POST['price'];
$oldprice = $_POST['oldprice'];
$category_id = $_POST['category_id'];
$path = $_POST['img'];
$hit = $_POST['hit'];
$sale = $_POST['sale'];
$model_id = $_POST['model_id'];


mysqli_query($connection, "INSERT INTO `products` ( `title`, `content`, `price`, `oldprice`, `category_id`,`img`,`hit`,`sale`,`model_id`) VALUES ('$title', '$content', '$price', '$oldprice', '$category_id','$path','$hit','$sale','$model_id')");

header('Location: /admin.php');
?>