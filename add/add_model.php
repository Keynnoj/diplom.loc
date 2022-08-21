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
$mark_id= $_POST['mark_id'];
$VIN = $_POST['VIN'];


mysqli_query($connection, "INSERT INTO `model` ( `name`, `mark_id`, `VIN`) VALUES ('$name', '$mark_id', '$VIN')");

header('Location: /admin.php');
?>