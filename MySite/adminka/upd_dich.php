<?php session_start(); ?>
<?php
	include("blocks/connect.php");
	
	$id=$_REQUEST['id'];
	$dich=$_REQUEST['dich'];
	?>
	

<html>
	<head>
		<title>Редактирование</title>
		<link rel="stylesheet" href="css/adminstyle.css">
	</head>
	<body>
		<header>
			<?php include("blocks/header.php");  ?>
		</header>
			<div class="content">
				<h2>Зона администрирования</h2>
				<div class="main-content">
				 	<?php
					  
					if($dich!='') {
						$pr=mysql_query("UPDATE dich SET dich='$dich' WHERE id='$id'");
						if($pr==1)
						{
							echo "Данные обновлены";
						}
						else
						{
							echo "Ошибка обновления";
						}

			            echo "<br><button class=button><a href='index.php'> Вернуться к администрированию </button>";

					}
					?>
				</div>	
			</div>			
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>				
	</body>
</html>