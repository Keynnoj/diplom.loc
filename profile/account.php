
<?php
	$id = $_SESSION['id'];
	$query = "SELECT * FROM users WHERE login='$id'";
	
	$result = mysqli_query($link, $query);
	$user = mysqli_fetch_assoc($result);
?>
<?php
if (password_verify($_POST['password'], $hash)) {
    $_SESSION['auth'] = true;
    $_SESSION['id'] = $user['id'];
}
?>
<form action="" method="POST">
	<input name="name" value="<?= $user['name'] ?>">
	<input name="surname" value="<?= $user['surname'] ?>">
	<input type="submit" name="submit">
</form>
<?php
	if (!empty($_POST['submit'])) {
		$name = $_POST['name'];
		$surname = $_POST['surname'];

		//$query = "UPDATE users SET name='$name', surname='$surname' WHERE id=$id";
		mysqli_query($link, $query);
	}
?>