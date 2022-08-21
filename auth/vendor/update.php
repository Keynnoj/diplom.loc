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

$vin = $_POST['vin'];
$full_name = $_POST['full_name'];
$email = $_POST['email'];

    mysqli_query($connection, "UPDATE `users` SET `VIN` = '$vin' WHERE `id` = '$id';");
    mysqli_query($connection, "UPDATE `users` SET `full_name` = '$full_name' WHERE `id` = '$id';");
    mysqli_query($connection, "UPDATE `users` SET `email` = '$email' WHERE `id` = '$id';");

    header('Location: ../profile.php');
?>
