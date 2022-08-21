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
require_once 'connect.php';

$login = $_POST['login'];
$password = md5($_POST['password']);
//$admin = $_POST['admin'];

$check_user = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
//$check_admin = mysqli_query($connection, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password' and `admin` = '1'");
if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        /*$_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
            "VIN" => $user['VIN']
        ];*/

        $_SESSION['user_id'] = $user['id'];

        header('Location: ../profile.php');
    }

else {
    $_SESSION['message'] = 'Не верный логин или пароль';
    header('Location: ../index.php');
}

?>

<pre>
    <?php
    print_r($check_user);
    print_r($user);
    ?>
</pre>
