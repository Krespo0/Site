<?php session_start(); ?>
<html>
	<head>
		<title>Мой Блог</title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>
	<body>
		<header>
			<?php include("blocks/header.php");  ?>
		</header>
		<div class="content">
			<h2>Главная</h2>
		</div>
		<div class="main-content">
			<?php
				include("blocks/connect.php");
				$res = mysql_query("SELECT * FROM dich WHERE id='2'"); 
				$mas=mysql_fetch_array($res); 
					echo "<div class='about'>".$mas['dich']."</div>";
				
				
			?>
			
		</div>
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>
	</body>
</html>