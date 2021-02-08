<?php session_start(); ?>
<?php
	include("blocks/connect.php");
	$title=$_REQUEST['title'];
	$data=$_REQUEST['data'];
	$photo=$_REQUEST['photo'];
	$description=$_REQUEST['description'];
	$text=$_REQUEST['text'];
	$id_category=$_REQUEST['categoryname'];
	$id=$_REQUEST['id'];
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
					  
					if($title!='' && $photo!='' && $description!='' && $text!='' && $id_category!='') {
						$pr=mysql_query("UPDATE articles SET title='$title', photo='$photo', description='$description', text='$text', id_category='$id_category' WHERE id_st='$id'");
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
					else
					{
						echo "Заполнены не все поля";
					} ?>
				</div>	
			</div>			
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>				
	</body>
</html>