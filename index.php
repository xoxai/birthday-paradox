<?php

// открыть файл или создать, если не существует
$file = fopen("./birthdays_list.txt", "a");

// проверка флага голосования в опросе
if (isset($_POST["birthday"]) && !isset($_COOKIE["vote_flag"])) {
	fwrite($file, $_POST["birthday"] . ",");
	fclose($file);
	setcookie('vote_flag', 1, time() + 86400); // 86400 = 1 день в секундах
}

?>

<html>
<head>
	<style>
		#container {
			width: 70%;
			margin: 0 auto;
			margin-top: 100px;
			border: 5px solid orange;
			padding: 35px;
			font-size: 200%;
			font-family: 'Helvetica';
			border-radius: 25px;
			text-align: center;
		}

		input[type="text"] {
			width: 40%;
			height: 50px;
			font-size: 100%;
			line-height: 100%;
			border-radius: 15px;
			border: 2px solid black;
			padding-left: 15px;
		}

		input[type="submit"] {
			width: 30%;
			height: 50px;
			font-size: 85%;
			line-height: 100%;
			background: orange;
			border: none;
			border-radius: 15px;
			cursor: pointer;
		}
	</style>
</head>
<body>
	<div id="container">
		<form action="" method="POST">
			<h1>Дата рождения:</h1>
			<input type="text" name="birthday">
			<input type="submit" value="Отправить"/>
		</form>
	</div>
</body>
</html>