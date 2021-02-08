<?php session_start(); ?>
<?php
	include("blocks/connect.php");
	$rez=mysql_query("SELECT * FROM articles JOIN category ON articles.id_category=category.id JOIN users ON articles.id_user=users.id");
	$mas=mysql_fetch_array($rez);
	
	$title=$_REQUEST['title'];
	$data=$_REQUEST['data'];
	$photo=$_REQUEST['photo'];
	$description=$_REQUEST['description'];
	$text=$_REQUEST['text'];
	$id_category=$_REQUEST['categoryname'];
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
			<h1>Зона администрирования</h1>
				<div class="main-content">
					<?php   
						if($title!='' && $data!='' && $photo!='' && $description!='' && $text!='' && $id_category!='')
						{
							$firstname=$_SESSION['firstname'];
							$firstname=trim($firstname);
							$id_user=mysql_query("SELECT id FROM users WHERE firstname LIKE '$firstname'");
							$id_user=mysql_fetch_array($id_user);
							$id_user=$id_user['id'];
							$pr=mysql_query("INSERT INTO articles(title,data,photo,description,text,id_user,id_category) VALUES ('$title','$data','$photo','$description','$text','$id_user','$id_category')");

							if($pr==1)
							{
								echo "Данные добавлены";
							}
							else
							{
								echo "Ошибка добавления";
							}
							echo "<br><button class=button><a href='index.php'> Вернуться к администрированию </button>";
						}
						else
						{
							echo "Заполнены не все поля";
						}
					?>
				</div>
		</div>			
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>				
	</body>
</html>