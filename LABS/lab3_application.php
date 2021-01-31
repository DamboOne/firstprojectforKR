<html>
	<head>
		<meta charset="utf-8">
		<title>Обработка ошибки регистрации</title>
	</head>
	<body>
		<h1>Регистрация на форум "Время перемен"</h1><br><br>
		<?php if (isset($_POST['posted'])){
			$organization = $_POST['organization'];
			$first_name = $_POST['firstname'];
			$last_name = $_POST['lastname'];
			$address = $_POST['address'];
			$application = $_POST['application'];//передача данных из формы на сервер
		}
		if ($first_name == "" or $last_name == ""){
			echo "Необходимо ввести имя. Нажмите кнопку 'Изменить данные' и заполните форму еще раз";
			exit;
		}//проверка введенного имени пользователя
		if ($organization == ""){
			echo "Необходимо ввести название организации. Нажмите кнопку назад и заполните форму еще раз";
			exit;
		}//проверка введенного названия организации
		if ($address == ""){
			echo " Необходимо ввести адрес. Нажмите кнопку 'Изменить данные' и заполните форму еще раз";
			exit;
		}//проверка введенного адреса организации
		if ($application != "resident" and $application != "correspondence" and $application != "distant"){
			echo "Необходимо ввести форму участия. Нажмите кнопку 'Изменить данные' и заполните форму еще раз ";
			exit;
			} else {
			echo "Уважаемый(ая), ", $_POST['firstname'], " ", $_POST['lastname'], "!<br><br><b>Вы успешно зарегистрировались на конференцию.</b>";
			exit;
		}//проверка введенной формы участия
		?>
	</body>
</html>
