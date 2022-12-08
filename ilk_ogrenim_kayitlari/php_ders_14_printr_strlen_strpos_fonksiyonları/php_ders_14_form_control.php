<?php

	print_r($_POST); //alınan postun bilgilerinin yazdırır
	echo "<br><br>";
	echo "kullanıcı adı uzunluğu : ".strlen($_POST['username']);
	echo "<br>";//strlen fonksiyonu dizinin uzunluğunu verir
	echo "yorum uzunluğu : ".strlen($_POST['comment']); 
	echo "<br><br>";

	if (strlen($_POST['username']) > 10)
		echo "kullanici adi en fazla 10 karakter olabilir";
	else
		echo "hosgeldin, ".$_POST['username'];


	echo "<br><br>";

	echo mb_strpos($_POST['comment'], "ben"); //aranan stringin hangi indexde olduğunu yazdırır
		//mb_ eklentisi türkçe karakterler için kullanılır. 

?>