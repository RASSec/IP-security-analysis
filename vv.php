<?php
	define('APP_NAME', 'sec.com');
	require dirname(__FILE__).'/config.php';
	require dirname(__FILE__).'/includes/functions.php';
	addrule($_POST['addrule']); //add rule
	unset($_POST);
	header('Location:index.php');