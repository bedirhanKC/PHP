<?php

error_reporting(0);

	if ($_POST) {

		$username = $_POST['username'];
		$comment = $_POST['comment'];

		echo $username. " : ".$comment;

		if ($username == $_POST['username']) {
			$username = $_POST['username'];
		}else

			$username = "anonim";

	}else

		echo "POST YOK";
	



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
		
		<br>
		<input type="text" name="username" placeholder="Kullanıcı Adı" value="<?php echo $username; ?> ">
		<br><br>
		<textarea name="comment" rows="10" cols="50" placeholder="Yorum Giriniz."><?php echo $comment; ?></textarea>
		<br><br>
		<input type="submit" value="YORUM GÖNDER">

	</form>

</body>
</html>

