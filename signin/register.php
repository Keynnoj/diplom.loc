<?php

include('includes/init.php');

$login = $_POST['login'];
$password = $_POST['password'];
$name = $_POST['name'];

//$login = filter_var(trim ($_POST['login']),htmlspecialchars(false));
//$password = filter_var(trim ($_POST['password']),htmlspecialchars(false));
//$name = filter_var(trim ($_POST['name']),htmlspecialchars(false));

$count = mysqli_query($connection, 
//"INSERT INTO `users` (`login`,`password`) VALUES ('$login','$password')");
"INSERT INTO `users` (`login`,`password`,`name`) VALUES ('$login','$password','$name')");





////if (mysqli_num_rows($count) == 0)
//mysqli_num_rows()
//{
    //echo 'Вы не зарегистрированы!';
//}else{
    //echo 'Привет, '. $login . '!';
    echo 'Вы успешно зарегистрировались';
//}
