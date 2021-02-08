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
		<div class= "content">
			<h2>Добавление админа</h2>
			<div class="main-content">
				<form action=add_adm.php method=POST>
					<?php
						include("blocks/connect.php");
						
	                    $id_user=$_SESSION['id'];
	                    $z=mysql_query("SELECT * FROM users WHERE users.id NOT IN (SELECT id FROM admin)");
	                    while($mas=mysql_fetch_array($z)) 
	                    {
							printf("<input type=checkbox name=id[] value=%s>%s<br><br>",$mas['id'],$mas['login']);				
						}
                	?>
					<input type="submit" name="submit" class="button" value="Сделать админом">
				</form>        
			</div>
		</div>			
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>
	</body>
</html>