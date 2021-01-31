<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ответ на данные формы, использующей раскрывающиеся списки</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Ответ:</h1>
		<p style="text-align:center;">Вы выбрали преподавателя: <? if (!empty($_POST['teacher_select'])) echo ($_POST['teacher_select']);?><br/><br/>
			Вы выбрали его сильными сторонами:<br/>
			<? if (!empty($_POST['strong_sides'])) {
				foreach ($_POST['strong_sides'] as $value) {
					if (!empty($value)) echo($value . "<br/>");
				}
			} ?>
		<br/>Ваш выбор был учтен. Спасибо за ответ!</p>
	</body>
</html>
