<?php

	if ($_POST) {

		$name = $_POST['name'];
		$gender = $_POST['gender'];
		$lessons = $_POST['lessons'];

		echo "name : ".$name."<br>gender : ".$gender."<br>lessons ; <br>";

		foreach ($lessons as $key => $value) {

			echo $value."<br>";

		}

	}

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Başvuru formu</title>
</head>
<body style="text-align: center;">

	<form method="POST" action="">
		
		<h2>Eğitim Başvuru Formu</h2>
		<h3>Ad Soyad</h3>
		<input type="text" name="name">
		<h3>Cinsiyet</h3>
		<input type="radio" name="gender" value="Bay"> Bay
		<input type="radio" name="gender" value="Bayan"> Bayan
		<h3>Eğitim Seçimi</h3>
		<input type="checkbox" name="lessons[]" value="HTML"> HTML
		<input type="checkbox" name="lessons[]" value="CSS"> CSS
		<input type="checkbox" name="lessons[]" value="PHP"> PHP
		<hr>
		<input type="submit" value="gönder">


	</form>

</body>
</html>