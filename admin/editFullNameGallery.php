<!--
	PHP Document for HappySlaks.com of Janos Varga
	family.php page to get access to Family page
	Developed by: V.Hohin 
	Script Date: May 28, 2016 
	Last modification: May 28, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminIndex1";
	if (isset($_POST['gName'])) 		{$gName = $_POST['gName'];  if ($gName == '') {unset($gName);}}
	if (isset($_POST['fullName'])) 		{$fullName = $_POST['fullName']; } else {$fullName = "";}
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  
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
			<h1>Update Gallery Full Name</h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
		<div id="editSection">
			<?php if (isset($gName))
				{
				/*	$result = mysql_query("UPDATE `selected_works` SET `filename`='$filename',`name_en`='$name_en',`name_fr`='$name_fr',`datemade`='$description_en',`description_en`='$description_fr',`description_fr`='$datemade',`price`='$price' WHERE index='$index'");	
				*/
				//echo "$fullName   $gName";
					$result = mysql_query("UPDATE gallery SET fullGalleryName='$fullName' WHERE galleryName='$gName'");	
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