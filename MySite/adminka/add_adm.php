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
				<?php
					include("blocks/connect.php");
					$id=$_REQUEST['id'];
					if(empty($id)) {
						   echo("Вы не выбрали ни одного админа.");
					} 
					else
					{
						$N = count($id);

						echo("Вы добавили $N админа(ов): ");
						for($i=0; $i < $N; $i++) {
						    $ids = ($id[$i] . " ");
						    $z=mysql_query("INSERT INTO admin(id) VALUES ($ids)");
							}
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