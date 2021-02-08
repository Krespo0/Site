<?php
	include("blocks/connect.php");
	$password=md5($_POST['password']);
	$sql="INSERT INTO users (firstname, surname, login, password) VALUES ('$_POST[firstname]','$_POST[surname]','$_POST[login]','$password')";
  
	$result =  mysql_query($sql, $db);

	echo '<script type="text/javascript">
	window.location = "vhod.php"
	</script>';
?>