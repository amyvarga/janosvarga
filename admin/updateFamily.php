<!--
	PHP Document for HappySlaks.com of Janos Varga
	Developed by: V.Hohin 
	Script Date:  July 10, 2016 
	Last modification: July 10, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminHome1";
	if (isset($_POST['id'])) 		{$id = $_POST['id'];  if ($id == '') {unset($id);}}
	if (isset($_POST['namePage'])) 		{$namePage = mysql_real_escape_string($_POST['namePage']); } else {$namePage = "";}	
	if (isset($_POST['caption1'])) 		{$caption1 = mysql_real_escape_string($_POST['caption1']);} else {$caption1 = "";}
	if (isset($_POST['caption2'])) 		{$caption2 = mysql_real_escape_string($_POST['caption2']);} else {$caption2 = "";}
	if (isset($_POST['caption3'])) 		{$caption3 = mysql_real_escape_string($_POST['caption3']); } else {$caption3 = "";}
	if (isset($_POST['text1'])) 		 {$text1 = mysql_real_escape_string($_POST['text1']);} else {$text1 = "";}
	if (isset($_POST['text2'])) 		 {$text2 = mysql_real_escape_string($_POST['text2']);} else {$text2 = "";}
	if (isset($_POST['text3'])) 		 {$text3 = mysql_real_escape_string($_POST['text3']); } else {$text3 = "";}	
	if (isset($_POST['namePicture1'])) 		 {$namePicture1 = mysql_real_escape_string($_POST['namePicture1']);} else {$namePicture1 = "";}
	if (isset($_POST['namePicture2'])) 		 {$namePicture2 = mysql_real_escape_string($_POST['namePicture2']);} else {$namePicture2 = "";}
	if (isset($_POST['namePicture3'])) 		 {$namePicture3 = mysql_real_escape_string($_POST['namePicture3']);} else {$namePicture3 = "";}
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
			<h1>Update Gallery Page</h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
		<div id="editSection">
			<?php if (isset($id))
				{
				/*	$result = mysql_query("UPDATE `selected_works` SET `filename`='$filename',`name_en`='$name_en',`name_fr`='$name_fr',`datemade`='$description_en',`description_en`='$description_fr',`description_fr`='$datemade',`price`='$price' WHERE index='$index'");	
				*/
				
					$result = mysql_query("UPDATE family SET namePage='$namePage',caption1='$caption1',caption2='$caption2',caption3='$caption3',text1='$text1',text2='$text2',text3='$text3',namePicture1='$namePicture1',namePicture2='$namePicture2',namePicture3='$namePicture3' WHERE id='$id'");	
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