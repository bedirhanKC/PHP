<?php

	$comment = $_POST['comment'];

	echo substr($comment, 0,10); //0'dan başla, 10 karakter kadarını kırp

	echo "<br><br>";

	$maxLength = 100;
	$commentLength = mb_strlen($comment);

	if ($commentLength > $maxLength) {
		
		echo "metin 100 karakterden fazla olduğu için ilk 100 karakter görüntelenecektir [".$commentLength." - ".$maxLength."] : ".mb_substr($comment,0, $maxLength)."...	<a href='a'>yorumun tamami için tıkla</a>";

	}else

		echo $comment;

?>	