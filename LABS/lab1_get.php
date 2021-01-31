<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Работа с формой по методу GET</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<? if (isset($_GET['submit_form'])) {?>
			<h1>Ответ:</h1>
			<div style="text-align:center;">
				<p>Здравствуйте <strong><?=$_GET['name_form']?></strong>, <strong><?=$_GET['year_form']?></strong> года рождения.</p>
				<p>Рады вашему присутствию на нашем сайте.</p>
			</div>
		<? } else { ?>
			<h1>Приветствуем!<br/> Для продолжения, пожалуйста, представьтесь:</h1>
			<form method="GET">
				<p><span>Ваше имя:</span><br/><input type="text" size="30" name="name_form"></p>
				<p><span>Ваш год рождения:</span><br/><input type="number" name="year_form"></p>
				<p><input type="submit" name="submit_form" value="Отправить"></p>
			</form>
		<? } ?>
		
	</body>
</html>
