<!--
	PHP Document for HappySlaks.com of Janos Varga
	Developed by: V.Hohin 
	Script Date:  July 10, 2016 
	Last modification: July 10, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminGallery1";
	if (isset($_POST['pictureId'])) 		{$id = $_POST['pictureId'];  if ($id == '') {unset($id);}}
	if (isset($_POST['pictureName'])) 		{$name = mysql_real_escape_string($_POST['pictureName']); } else {$name = "";}
	if (isset($_POST['pictureDescription'])) 		{$description = mysql_real_escape_string($_POST['pictureDescription']);} else {$description = "";}
	if (isset($_POST['pictureDatas'])) 		 {$datas = mysql_real_escape_string($_POST['pictureDatas']);} else {$datas = "";}
	if (isset($_POST['portrait']))    	 {$portrait = $_POST['portrait'];} else {$portrait = "";}
	if (isset($_POST['fileName']))  {$fileName = $_POST['fileName'];} else {$fileName = "";}
	if (isset($_POST['indexOnPage']))  {$indexOnPage = $_POST['indexOnPage'];} else {$indexOnPage = "";}	
?>
<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <title>Admin | Gallery</title>
  <!-- Meta Description for Search Engine Results -->
	
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../css/main-admin.css">
    
  <!--  Modernizr allows HTML5 elements to work in older browsers: https://modernizr.com/-->
  <script src="../js/modernizr.js"></script>
  <script src="js/jquery-2.2.3.min.js"></script>
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
			<h1>Update Picture</h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
		<div id="editSection">
			<?php if (isset($id))
				{
				/*	$result = mysql_query("UPDATE `selected_works` SET `filename`='$filename',`name_en`='$name_en',`name_fr`='$name_fr',`datemade`='$description_en',`description_en`='$description_fr',`description_fr`='$datemade',`price`='$price' WHERE index='$index'");	
				*/
				
					$result = mysql_query("DELETE from gallery where WHERE id='$id'");	
					if ($result == 'true') {echo "<h3>You information is successfully removed.</h3>";}
					else {echo "<h3 style='color:red'>You information does not removed.</h3>";
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