<?php session_start(); ?>
<html>
	<head>
		<title>Мой Блог</title>
		<link rel="stylesheet" type="text/css" href="css/style2.css">
	</head>
	<body>
		<header>
			<?php include("blocks/header.php"); ?>
		</header>
		<div class="content">
			<h2>Главная</h2>
		</div>
		<div class="main-content">
			<?php include("blocks/connect.php"); ?>
			<?php $id= $_GET['id'];
			$res = mysql_query("SELECT * FROM articles  JOIN users  ON users.id = articles.id_user JOIN category ON category.id = articles.id_category WHERE articles.id_st=$id");
			?>
			<?php ($mas = mysql_fetch_array($res)); ?>
			<article class="post">
  				<div class="stat">
                  	<a class="img"><img src="image/<?php echo $mas['photo']?>"></a>
				</div>
                    <div class="post-content">
                        <header class="text_center">
                            <h6><a href="#"></a></h6>
							<h1 class="text_center"><?=$mas['title'] ?></a></h1>
						</header>
                        <div class="text-left">
                            <pre><p><?=$mas['text'] ?></p></pre>
                        </div>
                        <div class="social-share">
                            <span class="social-share-title"><a><?= $mas['firstname']?></a> <?= $mas['data'] ?></span>
                        </div>
                    </div>
            </article>	
		</div>
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>
	</body>
</html>