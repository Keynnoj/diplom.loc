<?php
$connection = mysqli_connect('127.0.0.1:3306', 'root', '', 'diplom');
if ($connection == false) {
    echo 'Не удалось подключиться к БД<br>';
    echo mysqli_connect_error();
    exit;
}