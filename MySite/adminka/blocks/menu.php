<div class= redact>
	<ul class=tab>
		<li><a href=new_stat.php>Добавить статью</a></li>
		<li><p></p></li>
		<li><a href=autor_stats.php>Редактировать статью</a></li>
		<li><p></p></li>
		<li><a href=del_stat.php>Удалить статью</a></li>
		<li><p></p></li>
        <li><a href=dich.php>Редактирование записей на странице</a></li>
		<?php
			include("blocks/connect.php");
			$id_user=$_SESSION['id'];
            $admin=mysql_query("SELECT * FROM admin where id='$id_user'");
            $admin=mysql_fetch_array($admin);
            $adminCheck=$admin['id'];
            $super_admin = $admin['super_admin'];
            if ($id_user==$adminCheck && $super_admin == 1) {
               	echo "<li><a href=new_admin.php>Добавить нового админа</a></li>";
               	echo "<li><p></p></li>";
               	echo "<li><a href=del_adm.php>Удалить админа</a></li>";
			}		
		?>
	</ul>
</div>