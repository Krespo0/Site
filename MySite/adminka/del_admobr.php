<?php session_start(); ?>
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
			<h2>Удаление Админа</h2>
			<div class="main-content">
				<?php						
					include("blocks/connect.php");
					$id=$_REQUEST['id'];
					if(empty($id)) 
					{
					    echo("Вы не выбрали пользователя.<br><br>");
					} 
					else 
					{
						$N = count($id);
						for($i=0; $i < $N; $i++) 
						{
						    $ids = ($id[$i] . " ");
						   	$z=mysql_query("DELETE FROM admin WHERE id='$ids'");
						}
					}
					if($z==1)
			        {
			            echo " Админ удален<br><br>";			       
			        } 
			        else 
			        {
			            echo " Ошибка удаления<br><br>";
					}
					echo "<br><button class=button><a href='index.php'> Вернуться к администрированию </button>";
				?>
			</div>
		</div>			
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>				
	</body>
</html>