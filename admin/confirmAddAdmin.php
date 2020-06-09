<!--
	PHP Document for HappySlaks.com of Janos Varga
	
	Developed by: V.Hohin 
	Script Date: July 09, 2016 
	Last modification: July 09, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminAdmin1";
	if (isset($_POST['newUser'])) 	{$newUser = $_POST['newUser'];
		if ($newUser == '') {unset($newUser);}
	}
	if (isset($_POST['newPass'])) 	{$newPass = $_POST['newPass'];
		if ($newPass == '') {unset($newPass);}
	}
?>


<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <title>Admin</title>
  <!-- Meta Description for Search Engine Results -->
	
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../css/main-admin.css">
    
  <!--  Modernizr allows HTML5 elements to work in older browsers: https://modernizr.com/-->
  <script src="../js/modernizr.js"></script>
  <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>
</head>

<body>
 
<!-- Start of pageHeader --> 
	<?php include("blocks/adminHeader.php"); ?> 	

<!-- Start of pageContainrt --> 	
	<div id="pagecontainer">	

	<!-- Start of Top navigation -->
		<?php include("blocks/adminTopnav.php"); ?>
		
	<!-- Start of Welcome Text --> 		
		<div id="welcomtext">
			<h1>Addition New  User</h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
	<div id="editSection">
<?php	
	echo "New user ".$newUser." New pass ".$newPass;
	if ((empty($newUser)) or (empty($newPass))) {
			//echo "<h3 style='color:red;'>No New User or Password selected</h3>";
			$newUser="";
			$newPass="";
		} else {
			$result=mysql_query("INSERT INTO userlist (user,pass)  values ('$newUser','$newPass')") or die(mysql_error());          
			if ($result == 'true') {echo "<h3>User is successfully added.</h3>";}
			else {echo "<h3 style='color:red'>User is not added.</h3>";}		
		}	
?>
		</div> <!-- end of editSection -->
  
	</div><!-- end of PageContainer -->
 
</body>

</html>