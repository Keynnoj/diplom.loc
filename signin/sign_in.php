<?php
include('/MAMP/htdocs/includes/db.php');

?>
<?php
session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <!-- Required meta tags -->
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1">

     <!-- Bootstrap CSS -->
     <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
     -->
     <link rel="stylesheet" href="/signin/style.css">
     <title>Hello, world!</title>
 </head>

<!-- <div class="logpas">
<form method="POST">
    
    <input type="text" class="login" placeholder="Введите логин" name="login"><br>
    <input type="text" class="pass" placeholder="Введите пароль"name="password"><br>
    <input type="text" class="namez" placeholder="Введите имя"name="name"><br> 
    <hr>
    <input formaction="register.php" type="submit" class="reg" value="Регистрация">
    <input formaction="login.php" type="submit"  class="log_in" value="Вход">
   
</form> 
</div> -->

<body>
<div class="container">
	<section id="content">
		<form method="POST">
			<h1>Login Form</h1>
			<div>
                <input type="text" class="login" placeholder="Введите логин" name="login">
			</div>
			<div>
            <input type="password" class="pass" placeholder="Введите пароль"name="password">
			</div>
            <div>
            <!-- <input type="text" class="namez" placeholder="Введите имя"name="name"> -->
            </div>
			<div>
				<input type="submit" value="Log in" />
                <input formaction="register.php" type="submit" class="reg" value="Регистрация">
				<a href="#">Lost your password?</a>
				
                <?php
            if ($_SESSION['message']) {
                echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
            }
            unset($_SESSION['message']);
        ?>

			</div>

		</form><!-- form -->
		
	</section><!-- content -->
</div><!-- container -->
</body>

