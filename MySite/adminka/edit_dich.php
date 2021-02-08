<?php session_start(); ?>
<html>
	<head>
		<title>Мой Блог</title>
		<link rel="stylesheet" type="text/css" href="css/adminstyle.css">
	</head>
	<body>
		<header>
			<?php include("blocks/header.php");  ?>
		</header>
		<div class="content">
			<h2>Редактирование</h2>
			<div class="main-content">
				<?php
					include("blocks/connect.php");
					$id=$_REQUEST['id'];

					$rez=mysql_query("SELECT * FROM dich WHERE id='$id'");

					$mas=mysql_fetch_array($rez);
				?>
				<form action=upd_dich.php method=POST>
					
					<p>Текст для изменения</br><textarea type=text rows="4" cols="60" name=dich><?php echo $mas['dich']; ?></textarea></p>
					
					<input type=hidden name=id value="<?php echo $mas['id']; ?>">
					<input type=submit value="Изменить">
				</form>
			</div>
		</div>			
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>
	</body>
</html>