<?php
	$login = $_REQUEST['log'];
	include("blocks/connect.php");
	if (!(empty($login))){

		$z= mysql_query("SELECT login from users where login='$login'");
		$count = mysql_num_rows($z);
		
		if ($count != 0)
		{
			echo "Error!";
		} 
		else 
		{
			echo "Success!";
		}		
	} 
?>