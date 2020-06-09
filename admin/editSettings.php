<!--
	PHP Document for HappySlaks.com of Janos Varga
	
	Developed by: V.Hohin 
	Script Date: May 22, 2016 
	Last modification: May 28, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminIndex1";
	if (isset($_POST['editPageName'])) 	{$idPageName = $_POST['editPageName'];
	if ($idPageName == '') {unset($idPageName);}
	}
	if (empty($idPageName)) {echo "<h3 style='color:red;'>No page selected</h3>";
	$pageId="";
	$pageName="";
	$titlePage="";
	$metaDescription="";
	$captionPage="";
	$imageLocation="";
	$header_1="";
	$header_2="";
	$header_3="";
	$text_1="";
	$text_2="";
	$text_3="";
	}
	else{
	$resultSelect=mysql_query("SELECT id,pageName,titlePage,metaDescription,captionPage,imageLocation,header_1,header_2 ,header_3,text_1,text_2,text_3  from settings where id=$idPageName") or die(mysql_error());          
	$data = mysql_fetch_array($resultSelect);
	$pageId=$data[0];
	$pageName=$data[1];
	$titlePage=$data[2];
	$metaDescription=$data[3];
	$captionPage=$data[4];
	$imageLocation=$data[5];
	$header_1=$data[6];
	$header_2=$data[7];
	$header_3=$data[8];
	$text_1=$data[9];
	$text_2=$data[10];
	$text_3=$data[11];
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
			<h1>Edit Settings "<?php echo $pageName; ?>" page</h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
	<div id="editSection">
	
	<form method="POST" action="updateSettings.php"><!-- action="http://server.prokopski.com/html/receive.php"  updateSettings.php-->
	<fieldset class="upper">	
					
					<div id="" class="edits">  
					  <label for="pageId">Page ID</label>
					  <input type='text' name='pageId' id='pageId' value="<?php echo $pageId;?>"  readonly>	  
					</div>
					
					<div id="" class="edits">  
					  <label for="name">Page name</label>
					  <input type='text' name='name' id='name' value="<?php echo $pageName;?>" style="width:465px;">	  
					</div>
					
					<div id="" class="edits">
					  <label for="title">Title of page</label>
					  <input type='text' name='title' id='title' value="<?php echo $titlePage;?>" style="width:465px;">					  
					</div>
					
					<div id="" class="edits">
					  <label for="description">Description of page</label>
					  <textarea rows="4" cols="50"  id = 'description' name = 'description'><?php echo $metaDescription;?></textarea>
					</div>
					
					<div id="" class="edits">					
					  <label for="caption">Caption of page</label>
					  <input type="text" name="caption" id="caption" value="<?php echo $captionPage;?>" style="width:465px;">
					</div>
					
					<div id="" class="edits">
					  <label for="imageLocation">Image location</label>
					  <input type="text" name="imageLocation" id="imageLocation" value="<?php echo $imageLocation;?>" style="width:465px;">
					</div>
					
					<div id="" class="edits">
					  <label for="header1">Header 1</label>
					  <input type="text" name="header1" id="header1" value="<?php echo $header_1;?>" style="width:465px;">
					</div>
					
					<div id="" class="edits">
					  <label for="header2">Header 2</label>
					  <input type="text" name="header2" id="header2" value="<?php echo $header_2;?>" style="width:465px;">
					</div>
					
					<div id="">
					  <label for="header3">Header 3</label>
					  <input type="text" name="header3" id="header3" value="<?php echo $header_3;?>" style="width:465px;">
					</div>
					
					<div id="" class="edits">
					  <label for="text1">Text 1</label>
					  <textarea rows="4" cols="50"  id = "text1" name = 'text1'><?php echo $text_1;?></textarea>
					</div>
					
					<div id="" class="edits">
					  <label for="text2">Text 2</label>
					  <textarea rows="4" cols="50"  id = "text2" name = 'text2'><?php echo $text_2;?></textarea>
					</div>
					
					<div id="" class="edits">
					  <label for="text3">Text 3</label>
					  <textarea rows="4" cols="50"  id = "text3" name = 'text3'><?php echo $text_3;?></textarea>
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