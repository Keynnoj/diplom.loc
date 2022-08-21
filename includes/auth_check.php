<?php
error_reporting(-1);
session_start();
if (!$_SESSION['user_id']) {
    header('Location: /');
}
else {
    $user = get_user($_SESSION['user_id']);

    if (empty($user)) {
        header('Location: /');
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


