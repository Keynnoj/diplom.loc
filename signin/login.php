<?php

include('/MAMP/htdocs/includes/db.php');
$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];

$count = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' 
        AND `password` = '$password ' AND `name` = '$name'");


if (mysqli_num_rows($count) ==0)
{
    echo 'Вы не зарегистрированы!';
}else{
    echo 'Привет, '. $login . '!';
}
