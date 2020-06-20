<?php 
	$db = mysql_connect ("localhost","amyvarga","0range") or die("Unable to connect to mysql server: ".mysql_error());
	mysql_select_db("janosvarga",$db) or die("Unable to select mysql database: ".mysql_error());
?>
