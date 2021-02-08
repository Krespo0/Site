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

					$rez=mysql_query("SELECT * FROM articles WHERE id_st='$id'");

					$mas=mysql_fetch_array($rez);
				?>
				<form action=upd_stat.php method=POST>
					<p>Название </br><input type=text name=title value="<?php echo $mas['title']; ?>"></p>
					<p>Фото </br><input type="file" name="photo" multiple accept="image/*,image/jpeg" value="<?php echo $mas['photo']; ?>"></p>
					<p>Краткое описание </br><textarea type=text rows="4" cols="60" name=description><?php echo $mas['description']; ?></textarea></p>
					<pre><p>Текст </br><textarea type=text rows="4" cols="60" name=text><?php echo $mas['text']; ?></textarea></p></pre>
					<p>Категория </br>
						<?php $query=mysql_query("SELECT * FROM category"); ?>
							<select name="categoryname">
								<?php while ($category = mysql_fetch_array($query)) { ?>
									<option value=<?php echo $category['id']?>><?php echo $category['categoryname']?></option>
								<?php } ?>
							</select>
					</p>
					<input type=hidden name=id value="<?php echo $mas['id_st']; ?>">
					<input type=submit value="Изменить">
				</form>
			</div>
		</div>			
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>
	</body>
</html>