<?php

	if (isset($_POST['username']))
		echo "POST var -";
	else
		echo "POST yok -";

	if(empty($_POST['username']) || empty($_POST['password']))
		echo " kullanici adi veya şifre boş";
	else
		echo " kullanici adi :".$_POST['username']."<br>şifre : ".$_POST['password'];

?>