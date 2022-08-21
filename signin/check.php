<?php

$login = filter_var(trim ($_POST['login']),htmlspecialchars(false));
$password = filter_var(trim ($_POST['password']),htmlspecialchars(false));
$name = filter_var(trim ($_POST['name']),htmlspecialchars(false));

if(mb_strlen($login) < 5 || mb_strlen($login) > 50) {
    echo "Недопустимая длина логина";
    exit();
}else if(mb_strlen($password) < 1 || mb_strlen($password) > 50) {
    echo "Недопустимая длина имени";
    exit();
}else if(mb_strlen($name) < 2 || mb_strlen($name) > 50) {
    echo "Недопустимая длина пароля (от 2 до 50 символов)";
    exit();
}

//$mysql = new mysqli('localhost:8889', 'root', 'root', 'diplom');
$mysql->set_charset('utf8');
//
$mysql->query("INSERT INTO `users` (`login`,`password`,`name`) VALUES ('$login','$password','$name')");
//$mysql->query("SELECT * FROM `users` WHERE `login` = $login and `password` = $password and `name` = $name");
$mysql -> close();
?>