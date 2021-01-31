<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Работа с формой по методу POST</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<? if (isset($_POST['submit_form']) && $_POST['login_form']=="admin" && $_POST['pass_form']=="password") {?>
			<h1>Здравствуйте, администратор!</h1>
			<div style="text-align:center;">
				<p>Авторизация пройдена, вы можете приступить к работе на нашем сайте.</p>
			</div>
		<? } elseif (!isset($_POST['submit_form'])) { ?>
			<h1>Приветствуем!<br/> Для продолжения, пожалуйста, авторизуйтесь:</h1>
			<form method="POST">
				<p><span>Ваш логин:</span><br/><input type="text" name="login_form"></p>
				<p><span>Ваш пароль:</span><br/><input type="text" name="pass_form"></p>
				<p><input type="submit" name="submit_form" value="Авторизоваться"></p>
			</form>
		<? } else { ?>
			<h1>Приветствуем!<br/> Для продолжения, пожалуйста, авторизуйтесь:</h1>
			<p class="error">Ошибка авторизации! Такая комбинация логина/пароля не существует. Попробуйте перепроверить вводимые данные и пройти авторизацию еще раз.</p>
			<form method="POST">
				<p><span>Ваш логин:</span><br/><input type="text" name="login_form"></p>
				<p><span>Ваш пароль:</span><br/><input type="text" name="pass_form"></p>
				<p><input type="submit" name="submit_form" value="Авторизоваться"></p>
			</form>
		<? } ?>
	</body>
</html>
