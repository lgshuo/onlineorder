<?php
    header("content-type:text/html;charset=utf-8");
	include"conn.php";
	mysql_select_db("login",$link);
	$q=mysql_query("select z_name from fenzu",$link);
	while($zname=mysql_fetch_array($q)){
		$z_name[]=$zname['z_name'];
	};
    $c=implode("#", $z_name);
	echo $c;
	?>