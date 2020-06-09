<?php 
	$db = mysqli_connect ("localhost","root","") or die("Unable to connect to mysql server: ".mysql_error());
	mysqli_select_db($db, "happysla_happys") or die("Unable to select mysql database: ".mysql_error());
?>
