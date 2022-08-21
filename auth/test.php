<?php
session_start();
if ($_SESSION['user']) {

}
?>
<?php
if (password_verify($_POST['password'], $hash)) {
    $_SESSION['auth'] = true;
    $_SESSION['id'] = $user['id'];
}
?>
