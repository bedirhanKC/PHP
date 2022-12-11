<?php

	if (isset($_POST['lessons'])) {

		echo "almak istediğiniz eğitimler : ";

		$lessons = $_POST['lessons'];

		foreach ($lessons as $key => $value) {
			
			echo $value."<br>";

		}

	}else

		echo "POST YOK!<hr>";

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
		
		<h3>Almak İstediğiniz Eğitimi Seçiniz</h3>
		<select multiple name="lessons[]">
			
			<option value="HTML">HTML</option>
			<option value="CSS">CSS</option>
			<option value="PHP">PHP</option>

		</select>

		<input type="submit" name="GÖNDER">

	</form>

</body>
</html>