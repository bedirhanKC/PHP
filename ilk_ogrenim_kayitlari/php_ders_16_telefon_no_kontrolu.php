<?php

	
	if($_POST){

		echo "POST VAR <hr>";

		$phone = $_POST['phone'];

		if(!is_numeric($phone)){

			echo "girilen telefon numarası hatalı! Yönlendiriliyorsunuz...";
			header("refresh:2"); //2 saniye bekledikten sonra sayfayı yeniler

		}else{


			echo "telefon numarası girişi doğru";


		}

	}else{


		echo "POST YOK! <hr>";


		?>


		<<!DOCTYPE html>
		<html>
		<head>
			<meta charset="utf-8">
			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>Telefon Numarasi</title>
		</head>
		<body>
		
			<form method="POST" action="">

				<input type="text" name="phone" placeholder="Telefon Numarasi" required maxlength="10" minlength="10">
				<input type="submit" value="Gönder">

		</body>
		</html>


		<?php

	}


?>