<?php
	session_start();
	include("blocks/connect.php");
	
	$login = $_POST['log'];
	$password = md5($_POST['pass']);

	$quary = mysql_query("SELECT * FROM users WHERE (login = '$login')&&(password = '$password')");
	$result = mysql_fetch_array($quary);
	if ($result !=0) 
	{
		$_SESSION['id'] = $result['id'];
		$_SESSION['firstname'] =  $result['firstname'];
		$_SESSION['surmane'] =  $result['surname'];
		$_SESSION['login'] =  $result['login'];
		$_SESSION['status'] = "login";
		echo "Success!";
	} 
	else 
	{
		echo "Failed!";
		session_destroy();
	}
?>