<?php session_start(); ?>
<?php
	include("blocks/connect.php");
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
                    include("blocks/connect.php");

                    	
                            $z=mysql_query("SELECT * FROM dich");
                             while($mas=mysql_fetch_array($z))
                            {   
                                echo "<ul>";
                                printf("<li><a href=edit_dich.php?id=%s>%s</a></li>",$mas['id'],$mas['dich']);
                                echo "</ul>";
                            }
                        
                    ?>
				</div>	
			</div>			
		<footer>
			<?php include("blocks/footer.php");  ?>
		</footer>				
	</body>
</html>