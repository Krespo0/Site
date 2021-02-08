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
			<h2>Вход</h2>
		</div>
		<?php include ("blocks/logform.php");?>
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>
	</body>
</html>