<?php session_start(); ?>
<html>
	<head>
		<title>Мой Блог</title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	<body>
		<header>
			<?php include("blocks/header.php");  ?>
		</header>
		<div class="content">
			<h2>Выбор категории</h2>
		</div>
		<div class="main-content">
			<?php 
				include("blocks/connect.php");
				$res = mysql_query("SELECT * FROM category"); 
			?>
			<?php   while ($mas = mysql_fetch_array($res)) { ?>
				<div class=wrapper>
					<h1 class="text_center"><a href=<?php echo "singlecategory.php?id=".$mas['id'].""; ?>><?=$mas['categoryname'] ?></a></h1>
				</div>
			<?php } ?>
		</div>
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>
	</body>
</html>