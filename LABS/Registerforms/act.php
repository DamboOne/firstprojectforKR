<?php
	echo "<h2>Вы ввели следующие данные:</h2>";
	echo $_POST['fioRus']; echo "<br>";
	echo $_POST['fioEng']; echo "<br>";
	echo $_POST['section']; echo "<br>";
	echo $_POST['doclad']; echo "<br>";
	echo $_POST['nameOrganization']; echo "<br>";
	echo $_POST['addressOrganization']; echo "<br>";
	echo $_POST['phoneNotify']; echo "<br>";
	echo $_POST['emailNotify']; echo "<br>";
	echo $_POST['loginNotify']; echo "<br>";
	echo$_POST['parolNotify']; echo "<br>";
	echo $_POST['factAddress']; echo "<br>";
	echo $_POST['resident']; echo "<br>";
	echo $_POST['bestColor']; echo "<br>";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "register_forms";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	mysql_select_db('register_forms');
	mysql_query('SET NAMES utf8') or die("не удалось установить кодировку");
	if (!$conn) {
		die("Подключение не выполнено: " . mysqli_connect_error());
	}
	$sql = "INSERT INTO register_data (fioRus, fioEng, section, doclad, nameOrganization, addressOrganization, phoneNotify, emailNotify, loginNotify, parolNotify, factAddress, dateBirth, resident, bestColor) VALUES ('".$_POST['fioRus']."','".$_POST['fioEng']."','".$_POST['section']."','".$_POST['doclad']."','".$_POST['nameOrganization']."','".$_POST['addressOrganization']."','".$_POST['phoneNotify']."','".$_POST['emailNotify']."','".$_POST['loginNotify']."','".$_POST['parolNotify']."','".$_POST['factAddress']."', '".$_POST['dateBirth']."','".$_POST['resident']."','".$_POST['bestColor']."')";
	if (mysqli_query($conn, $sql)) {
		echo"<br><br>Запись успешно добавлена </br>";
		echo "<a href='Register.html'>На главную</a>";
		} else {
		echo"Ошибка добавления записи: " . $sql. "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
?>