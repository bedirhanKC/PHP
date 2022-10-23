<?php

	$sayi1 = 10;
	$sayi2 = 30;

	$kontrol = $sayi1 != $sayi2 ? $sayi1." ve ".$sayi2." birbirine esit degildir." : $sayi1." ve ".$sayi2." birbirine esit degildir."; 
	//eger kosul saglaniyorsa ? ile : isaretleri arasi calisir. eger kosul saglanmiyorsa :'dan sonraki kisim calisir.

	echo $kontrol;

	echo "<br><br>";

	if ($sayi1 > $sayi2) {
		
		echo "$sayi1 , $sayi2'den buyuktur";

	}else if ($sayi2 > $sayi1 ) {
		
		echo "$sayi2, $sayi1'den buyuktur";

	}else{

		echo "$sayi1, $sayi2'ye esittir";

	}



?>
