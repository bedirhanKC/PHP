<?php

	$ad = "bedirhan";
	$soyad = "kömürcü";

	echo "ad : $ad <br>soyad : $soyad";
	echo "<br><br>";

	echo "ad : ".$ad."<br>soyad : ".$soyad;
	echo "<br><br>";

	$sayi1=10;
	$sayi2=30;
	$toplam=$sayi1+$sayi2;
	$toplamYazdirma = "sayilarin toplami : ";

	echo $toplamYazdirma . $toplam ;
	echo "<br><br>";

	echo "mesaj veri türü : ".gettype($toplamYazdirma)."<br>";
	echo "toplam veri türü : ".gettype($toplam)."<br>";
	echo "toplam veri türü : gettype($toplam)"; //fonksiyon böyle çalışmıyor




?>