<?php
	if (!isset($_COOKIE['id_count'])) {
		$conter = 0;
	} else {
		$conter = $_COOKIE['id_count'];
	}
	$conter++;
	setcookie('id_count', $conter);
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="utf-8">
		<title>Секции конференции</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class="content">
			<h1>Секции конференции</h1>
			<div class="check">
				<p><input type="radio" value="1" name="but" onclick="Picture(this.value)"/>
				<span>Веб-программирование</span></p>
				<p><input type="radio" value="2" name="but" onclick="Picture(this.value)"/>
				<span>Информатизация общества</span></p>
				<p><input type="radio" value="3" name="but" onclick="Picture(this.value)"/>
				<span>Вычислительные системы</span></p>
				<p><input type="radio" value="4" name="but" onclick="Picture(this.value)"/>
				<span>Компьютерные сети</span></p>
				<p><input type="radio" value="5" name="but" onclick="Picture(this.value)"/>
				<span>Прикладная информатика</span></p>
				<p><input type="radio" value="6" name="but" onclick="Picture(this.value)"/>
				<span>Облачные вычисления</span></p>
				<p><input type="radio" value="7" name="but" onclick="Picture(this.value)"/>
				<span>Операционные системы</span></p>
			</div>
			<div class="picture">
				<img src="" id = "scr"/>
			</div>
			</br></br></br>
			<div class="center">
				<p><?php echo ("Количество посещений – " . $conter); ?></p>
			</div>
		</div>
		<script type="text/javascript" src="lab5_counter.js" ></script>
	</body>
</html>
