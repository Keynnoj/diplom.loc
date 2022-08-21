<?php
error_reporting(-1);
session_start();
if (!$_SESSION['user_id']) {
    header('Location: /');
}
else {
    $user = get_admin($_SESSION['user_id']);

    if (empty($user)) {
        header('Location: /index.php');
    }

    /*if (!$user['admin']) {
        header('Location: /');
    } */

    $_SESSION['user'] = [
        "id" => $user['id'],
        "full_name" => $user['full_name'],
        "avatar" => $user['avatar'],
        "email" => $user['email'],
        "VIN" => $user['VIN']
    ];
}


