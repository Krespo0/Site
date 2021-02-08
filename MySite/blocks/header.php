<div>
	<?php
		include("blocks/connect.php");
		$res = mysql_query("SELECT * FROM dich WHERE id='1'"); 
		$mas=mysql_fetch_array($res); 
		echo "<h1>".$mas['dich']."</h1>";
	?>
	<?php if(isset($_SESSION['status'])) { ?>
		<a href="adminka/index.php" class="btn-red">Редактирование</a>
		<a href="logout.php" class="exit">Выход (<?php echo $_SESSION['firstname']?>)</a>
	<?php } else { ?>
		<a href="vhod.php" class="btn-register">Вход/Регистрация</a>
	<?php } ?>
	
</div>
<div class="nav">
	<div>
		<ul>
			<li><a href="index.php">Главная</a></li>
			<li><a href="category.php">Статьи</a></li>
			<li><a href="about.php">О нас</a></li>
		</ul>
	</div>
</div>