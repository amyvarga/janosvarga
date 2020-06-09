<!--
	PHP Document for HappySlaks.com of Janos Varga	
	Developed by: V.Hohin 
	Script Date: May 28, 2016 
	Last modification: May 28, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminIndex1";
	if (isset($_POST['pageId'])) 		{$pageId = $_POST['pageId'];  if ($pageId == '') {unset($pageId);}}
	if (isset($_POST['name'])) 		{$name = mysql_real_escape_string($_POST['name']); } else {$name = "";}
	if (isset($_POST['title'])) 		{$title = mysql_real_escape_string($_POST['title']);} else {$title = "";}
	if (isset($_POST['description'])) 		 {$description = mysql_real_escape_string($_POST['description']);} else {$description = "";}
	if (isset($_POST['caption']))    	 {$caption = mysql_real_escape_string($_POST['caption']);} else {$caption = "";}
	if (isset($_POST['imageLocation']))  {$imageLocation = $_POST['imageLocation'];} else {$imageLocation = "";}
	if (isset($_POST['header1']))  {$header1 = mysql_real_escape_string($_POST['header1']);} else {$header1 = "";}
	if (isset($_POST['header2'])) 		{$header2 = mysql_real_escape_string($_POST['header2']);} else {$header2 = "";}
	if (isset($_POST['header3'])) 		   {$header3 = mysql_real_escape_string($_POST['header3']);} else {$header3 = "";}
	if (isset($_POST['text1'])) 		   {$text1 = mysql_real_escape_string($_POST['text1']);} else {$text1 = "";}
	if (isset($_POST['text2'])) 		   {$text2 = mysql_real_escape_string($_POST['text2']);} else {$text2 = "";}
	if (isset($_POST['text3'])) 		   {$text3 = mysql_real_escape_string($_POST['text3']);} else {$text3 = "";}
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
			<h1>Update Settings</h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
		<div id="editSection">
			<?php if (isset($pageId))
				{
				/*	$result = mysql_query("UPDATE `selected_works` SET `filename`='$filename',`name_en`='$name_en',`name_fr`='$name_fr',`datemade`='$description_en',`description_en`='$description_fr',`description_fr`='$datemade',`price`='$price' WHERE index='$index'");	
				*/
					$result = mysql_query("UPDATE settings SET pageName='$name',titlePage='$title',metaDescription='$description',captionPage='$caption',imageLocation='$imageLocation',header_1='$header1',header_2='$header2',header_3='$header3',text_1='$text1',text_2='$text2',text_3='$text3' WHERE id='$pageId'");	
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