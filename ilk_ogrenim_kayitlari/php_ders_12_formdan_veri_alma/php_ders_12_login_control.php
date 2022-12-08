<?php

	echo "kullanici adı : ".$_POST['username']."<br>";
	echo "şifre : ".$_POST['password']."<br>";

	$username = $_POST['username'];
	$password = $_POST['password'];

	echo $username."-".$password;

?>