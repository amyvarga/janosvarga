<!--
	PHP Document for HappySlaks.com of Janos Varga
	family.php page to get access to Family page
	Developed by: V.Hohin 
	Script Date: July 29, 2016 
	Last modification: July 29, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminAdmin1";
	if (isset($_POST['name'])) 		{$name = $_POST['name'];  if ($name == '') {unset($name);}}
	if (isset($_POST['psw'])) 		{$psw = mysql_real_escape_string($_POST['psw']); } else {$psw = "";}
	if (isset($_POST['email'])) 		{$email = mysql_real_escape_string($_POST['email']);} else {$email = "";}	
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
			<h1>Update Family User</h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
		<div id="editSection">
			<?php if (isset($name))
				{
				/*	$result = mysql_query("UPDATE `selected_works` SET `filename`='$filename',`name_en`='$name_en',`name_fr`='$name_fr',`datemade`='$description_en',`description_en`='$description_fr',`description_fr`='$datemade',`price`='$price' WHERE index='$index'");	
				*/
					$result = mysql_query("UPDATE familylist SET email='$email',psw='$psw' WHERE name='$name'");	
					if ($result == 'true') {echo "<h3>You information is successfully updated.</h3>";}
					else {echo "<h3 style='color:red'>You information does not updated.</h3>";
					}
				}
				else
				{
					echo "<h3  style='color:red'>Do not enaugh dates.</h3>";
				}
				?>

		</div> <!-- end of editSection -->
  
	</div><!-- end of PageContainer -->
 
</body>

</html>