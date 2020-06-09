<?php 
	$db = mysql_connect ("localhost","happysla_happysl","Se14C1hlj6") or die("Unable to connect to mysql server: ".mysql_error());
	mysql_select_db("happysla_happys",$db) or die("Unable to select mysql database: ".mysql_error());
?>