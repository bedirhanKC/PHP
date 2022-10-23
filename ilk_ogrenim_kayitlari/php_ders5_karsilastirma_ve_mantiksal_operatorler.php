<?php

	/* KARŞILAŞTIRMA OPERATÖRLERİ

	<  --> küçüktür
	<= --> küçük veya esittir
	>  --> büyüktür
	>= --> büyük veya esittir
	== --> esittir
	!= --> esit degildir

	*/

	/* MANTIKSAL OPERATÖRLER

	&& --> ve 
	|| --> veya  

	*/

	$kullaniciAdi = "admin";
	$sifre = 1234;

	if ($kullaniciAdi == "admin" && $sifre == 1234) {
		
		printf("%s %d <br>giris basarili",$kullaniciAdi,$sifre);

	}else{


		printf("giris basarisiz");

	}



?>