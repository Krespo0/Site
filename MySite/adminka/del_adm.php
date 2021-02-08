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
            <h2>Удаление Админа</h2>
            <div class="main-content">
    			<form action=del_admobr.php method=POST>
                    <?php
                        include("blocks/connect.php");
                        
                        $id_user=$_SESSION['id'];
                        $z=mysql_query("SELECT * FROM users JOIN admin WHERE users.id = admin.id AND users.id IN (SELECT id FROM admin)");
                        while($mas=mysql_fetch_array($z)) 
                        {   
                            if($mas['super_admin'] !=1){
                                printf("<input type=checkbox name=id[] value=%s>%s<br><br>",$mas['id'],$mas['login']);
                            }              
                        }
                    ?>
                    <input type="submit" name="submit" class="button" value="Удалить админа">
                </form> 
    		</div>
        </div>
        <footer>
            <?php include("blocks/footer.php");  ?>
        </footer>
    </body>     
</html>
