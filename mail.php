<?php
	$mysql = new mysqli('localhost', 'root', '', 'restoran');

	$name = $_POST["name"];
	$mail = $_POST["mail"];

	$mysql -> query("INSERT INTO `users_info` (`name`, `mail`) VALUES ('$name', '$mail')");

	header('Location: index.html');

	$mysql -> close();
?>