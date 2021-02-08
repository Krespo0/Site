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

                    $id_user=$_SESSION['id'];
                    $z=mysql_query("SELECT * FROM articles WHERE id_user = $id_user");
                    if (mysql_num_rows($z) !=0){
                        $admin=mysql_query("SELECT id FROM admin WHERE id = $id_user");
                        $admin=mysql_fetch_array($admin);
                        $admin=$admin['id'];
                        if ($id_user==$admin) {
                            $p=mysql_query("SELECT * FROM articles");
                             while($mas=mysql_fetch_array($p))
                            {   
                                echo "<ul>";
                                printf("<li><a href=edit_stat.php?id=%s>%s</a></li>",$mas['id_st'],$mas['title']);
                                echo "</ul>";
                            }
                        }
                        else 
                        {
                             while($mas=mysql_fetch_array($z))
                            {   
                                echo "<ul>";
                                printf("<li><a href=edit_stat.php?id=%s>%s</a></li>",$mas['id_st'],$mas['title']);
                                echo "</ul>";
                            }
                        }
                    }
                    else
                    {
                        echo "Вы не написали ни одной статьи<br><br>";
                        echo "<br><button class=button><a href='index.php'> Вернуться к администрированию </button>";
                    }
                ?>
            </div>
        </div>
        <footer>
            <?php include("blocks/footer.php");  ?>
        </footer>
    </body>     
</html>
