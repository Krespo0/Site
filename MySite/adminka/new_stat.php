<?php session_start(); ?>
<?php
	include("blocks/connect.php");
	$rez=mysql_query("SELECT * FROM articles JOIN category ON articles.id_category=category.id JOIN users ON articles.id_user=users.id");
	$mas=mysql_fetch_array($rez);
?>

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
			<h2>Новая статья</h2>
			<div class="main-content">
				<form method=POST action=add_stat.php>
					<h2>Добавление новой статьи</h2>
					<p>
						Название статьи<br />
						<input type=text name=title placeholder='Название' required  size=60> 
					</p>
					<p>
						Дата <br />
						<input type=date name="data" placeholder='08-08-1996'  required> 
					</p>
					<p>
						Фото<br />
						<input type="file" name="photo" multiple accept="image/*,image/jpeg">
					</p>
					<p>
						Краткое описание<br />
						<textarea rows="4" cols="60" name="description" placeholder='Описание' required></textarea>
					</p>
					<p>
						Текст статьи<br />
						<textarea rows="10" cols="60" name="text" placeholder='Текст' required></textarea>
					</p>
					<p>
						Категория<br />
						<?php $query=mysql_query("SELECT * FROM category"); ?>
						<select name="categoryname">
							<?php while ($category = mysql_fetch_array($query)) { ?>
								<option value=<?php echo $category['id']?>><?php echo $category['categoryname']?></option>>
							<?php } ?>
						</select>
					</p>
					<br />
						<input class="btn-add" type="submit" value="Добавить" />
				</form>
			</div>
		</div>			
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>
	</body>
</html>