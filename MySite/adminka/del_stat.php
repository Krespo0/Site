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
            <h2>Удаление Статьи</h2>
            <div class="main-content">
    			<form action=del_obr.php method=POST>
    				<?php
    					include("blocks/connect.php");
    					
                        $id_user=$_SESSION['id'];
                        $z=mysql_query("SELECT * FROM articles WHERE id_user=$id_user");
                        $admin=mysql_query("SELECT id FROM admin");
                        $admin=mysql_fetch_array($admin);
                        $admin=$admin['id'];
                        if ($id_user==$admin)
                        {
                            $p=mysql_query("SELECT * FROM articles");
                            while($mas=mysql_fetch_array($p))
        				    {
        						printf("<input type=checkbox name=id[] value=%s>%s<br><br>",$mas['id_st'],$mas['title']);
                            }
                        } 
                        else 
                        {
                            while($mas=mysql_fetch_array($z))
                            {
                                printf("<input type=checkbox name=id[] value=%s>%s<br><br>",$mas['id_st'],$mas['title']);                           
                            }
                        }
                    ?>
    				<input type=submit class=button value="Удалить статью">
    			</form>
    		</div>
        </div>
        <footer>
            <?php include("blocks/footer.php");  ?>
        </footer>
    </body>     
</html>
