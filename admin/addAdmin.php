<!--
	PHP Document for HappySlaks.com of Janos Varga
	
	Developed by: V.Hohin 
	Script Date: July 09, 2016 
	Last modification: July 09, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminAdminAdd";
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
			<h1>Edit Admin Addition New User </h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
	<div id="editSection">
	
	<form method="POST" action="confirmAddAdmin.php">
	<fieldset class="upper">	
					
					<div id="" class="edits">  
					  <label for="newUser">User name</label>
					  <input type='text' name='newUser' id='newUser'>	  
					</div>
                    
                    <div id="" class="edits">  
					  <label for="newPass">User password</label>
					  <input type='text' name='newPass' id='newPass'>	  
					</div>
			
					<hr \>

					<div id="submit" class="edits btn">
					  <input type="submit" value="submit" class="upper">				  
					</div>
					
				</fieldset> <!-- end of fieldset -->
			</form> <!-- end of form --> 
		</div> <!-- end of editSection -->
  
	</div><!-- end of PageContainer -->
 
</body>

</html>