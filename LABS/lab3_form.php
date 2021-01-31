<!DOCTYPE html>
<html lang="ru">
		<meta charset="utf-8">
		<title>Обработка заявки на участие в хакатоне</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<h1>Что-же у нас получилось?..</h1>
		<div style="text-align:center;">
			<? if (isset($_POST['posted'])){
				$name_first = $_POST['name_first'];
				$name_last = $_POST['name_last'];
				$team_name = $_POST['team_name'];
				$team_mail = $_POST['team_mail'];
				$from_who = $_POST['from_who'];
			}
			if ($name_first == "" or $name_last == ""){
				echo "<p>Необходимо ввести имя или фамилию.<br/> Вернитесь назад и заполните форму еще раз.</p>";
				exit;
			}
			if ($team_name == ""){
				echo "<p>Необходимо ввести название команды.<br/> Вернитесь назад и заполните форму еще раз.</p>";
				exit;
			}
			if ($team_mail == ""){
				echo "<p>Необходимо ввести e-mail для связи.<br/> Вернитесь назад и заполните форму еще раз.</p>";
				exit;
			}
			if ($from_who != "vuz"){
				echo "<p>Извените, на данный момент принимаем заявки только от команд, выступающих от своих ВУЗов.<br/> Попробуйте в следующий раз.</p>";
				exit;
			} else {
				echo ("<p>Уважаемый(ая), ". $name_first. " ". $name_last. "!</p><br/>
				<h2>Вы успешно зарегистрировались на ХАКАТОН 2021!</h2>");
				exit;
			} ?>
		</div>
	</body>
</html>
