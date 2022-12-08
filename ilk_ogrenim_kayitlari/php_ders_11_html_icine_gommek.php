<?php
	
	$baslik = "PHP DEĞİŞKEN BAŞLIK";
	$metin = "Bu paragraf değişken içerisinde tutulmaktadır.";

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DERS11</title>
	<style type="text/css">
		
		h1{

			color: hotpink;

		}

		p{

			color: darkblue;

		}

	</style>
</head>
<body>

	<h1>HTML BAŞLIK</h1>
	<p>Bu paragraf HTML kodu olarak yazılmıştır.</p>

	<?php

		echo "<h1> PHP BAŞLIK </h1>";

	?>

	<p>
		<?php

			echo "bu paragraf PHP kodu olarak yazılmıştır.";

		?>

	</p>

	<h1>
		
		<?php

			echo "$baslik";

		?>

	</h1>

	<p>
		
		<?php

			echo "$metin <br>";

			for ($i=0; $i < 5; $i++) { 
				echo "$i <br>";

			}

		?>

	</p>

	<p style="color: green;"> <?= "bir başka yazdırma yöntemi" ?></p>

</body>
</html>