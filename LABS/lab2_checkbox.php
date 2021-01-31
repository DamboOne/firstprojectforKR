<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Ответ на данные формы, использующей флажки</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Ответ:</h1>
		<p style="text-align:center;">Вы выбрали:<br/>
		<? if (!empty($_POST['sposob_oplati1'])) echo ($_POST['sposob_oplati1'] . "<br/>");?>
		<? if (!empty($_POST['sposob_oplati2'])) echo ($_POST['sposob_oplati2'] . "<br/>");?>
		<? if (!empty($_POST['sposob_oplati3'])) echo ($_POST['sposob_oplati3'] . "<br/>");?>
		<? if (!empty($_POST['sposob_oplati4'])) echo ($_POST['sposob_oplati4'] . "<br/>");?>
		<br/>Ваш выбор был учтен. Спасибо за ответ!</p>
	</body>
</html>
