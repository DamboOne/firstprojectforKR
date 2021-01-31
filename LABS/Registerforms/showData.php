<!DOCTYPE html>
<html>
	<head>
		<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
		<title>Просмотр данных</title>
		<link rel="stylesheet" href="Register.css" type="text/css">
	</head>
	<body>
		<header>
			<h1>+7(812)312-21-07<br>8(812)710-65-10</h1>
		</header>
		<div class="content">
			<main>
				<form method="POST" action=''>
					<?php
						$servername = "localhost";
						$username = "root";
						$password = "";
						$dbname = "register_forms";
						$conn = new mysqli($servername, $username, $password, $dbname);
						if ($conn->connect_error) {
							die("Connection failed: " . $conn->connect_error);
						}
						$sql = "SELECT fioRus, regId FROM register_data ORDER BY fioRus";
						$result = $conn->query($sql);
					?>
					Выберите пользователя для просмотра информации о нём </br>
					<select name="taskOption">
						<?php
							if ($result->num_rows > 0) {
								while($row = $result->fetch_assoc()) {
									echo "<option value='".$row['regId']."'>".$row['fioRus']."</option>";
								}
							}
							$conn->close();
						?>
					</select>
					<br/>
					<?php
						if (isset($_POST['getData'])) {
							$servername = "localhost";
							$username = "root";
							$password = "";
							$dbname = "register_forms";
							$conn = new mysqli($servername, $username, $password, $dbname);
							if ($conn->connect_error) {
								die("Connection failed: " . $conn->connect_error);
							}
							$sql= "SELECT * FROM register_data WHERE regId=".$_POST['taskOption'];
							$result = $conn->query($sql);
							if($result->num_rows> 0) {
								while($row = $result->fetch_assoc()) {
									$str = "<br/>
									Фамилия, Имя, Отчество на русском языке:".$row['fioRus']."<br/>
									Фамилия, Имя, Отчество на английском языке: ".$row['fioEng']."<br/>
									Выберите секцию для доклада: ".$row['section']."<br/>
									Напишите тему доклада: ".$row['doclad']."<br/>
									Название Вашей организации: ".$row['nameOrganization']."<br/>
									Почтовый адрес Вашей организации: ".$row['addressOrganization']."<br/>
									Телефон  мобильный для связи: ".$row['phoneNotify']."<br/>
									E-mail для уведомлений: ".$row['emailNotify']."<br/>
									Логин для входа на сайт: ".$row['loginNotify']."<br/>
									Пароль для входа на сайт: ".$row['parolNotify']."<br/>
									E-mail для уведомлений: ".$row['emailNotify']."<br/>
									Ваш почтовый адрес: ".$row['factAddress']."<br/>
									Дата рождения: ".$row['dateBirth']."<br/>
									Забронировать номер в гостинице: ".$row['resident']."<br/>
									Ваш любимый цвет: ".$row['bestColor']."<br/>";
									echo $str;
								}
							}
						}
					?>
					<br/>
					<input type="submit" name="getData" value="Получить информацию">
				</form>
			</main>
		</div>
	</body>
</html>