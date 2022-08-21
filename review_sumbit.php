
<?php
require_once 'includes/func_global.php';
session_start();
$connection = mysqli_connect('127.0.0.1:3306', 'root', '', 'diplom');
if ($connection == false) {
    echo 'Не удалось подключиться к БД<br>';
    echo mysqli_connect_error();
    exit;
}

require_once 'auth/vendor/connect.php';



?>
<?php

$productId = $_GET['id'];

$user_id = $_SESSION['user']['id'];

var_dump($productId);
$text = $_POST['text'];
$rank = $_POST['rank'];

$created_at = date("Y-m-d h:i:s ");

$sql = mysqli_query($connection, $query = "INSERT INTO `review` ( `product_id`, `user_id`, `text`, `created_at`, `rank`) VALUES ('$productId','$user_id', '$text', '$created_at'  , '$rank');");
var_dump($query);
?>

