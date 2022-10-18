<?php

	$sayi1 = 10;
	$sayi2 = 20;

	$sayi1 += 10;
	$sayi2 = $sayi2 + 20;

	$sayi1 -=5;
	$sayi2 -=10;

	$toplam = $sayi2 + $sayi1;
	$bolum = $sayi2 / $sayi1;

	echo " $toplam $bolum <br> sayi1:$sayi1 sayi2:$sayi2";
	echo "<br>";

	$yenisayi1 = 4;
	echo "sayinin karekökü : ".sqrt($yenisayi1); //karekökü
	echo "<br>";
	echo "sayinin üssü : ".pow($yenisayi1,2); //üs alma
	echo "<br>";
	echo "sayinin mutlak degeri : ".abs(-3); //mutlak deger
	echo "<br>";
	echo "en kucuk sayi : ".min(2,4,6,1,10); //min deger
	echo "<br>";
	echo "en buyuk sayi : ".max(2,4,6,1,10); //max deger
	echo "<br>";

	$kelime = "bedirhan";

	echo "<br>";
	echo "kelimenin veri tipi : ".gettype($kelime); //max deger






?>