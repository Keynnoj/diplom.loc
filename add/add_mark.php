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
$name = $_POST['name'];
mysqli_query($connection, "INSERT INTO `mark` ( `name`) VALUES ('$name')");
header('Location: /admin.php');
?>