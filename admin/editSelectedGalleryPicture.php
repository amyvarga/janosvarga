<!--
	PHP Document for HappySlaks.com of Janos Varga
	Developed by: V.Hohin 
	Script Date: May 29, 2016 
	Last modification: July 10, 2016	
-->


<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminIndex1";
//	if (isset($_POST['gName'])) 		{$gName = $_POST['gName']; if ($gName == '') {unset($gName);}}
	if (isset($_POST['pictureId'])) 		{$pictureId = $_POST['pictureId']; if ($pictureId == '') {unset($pictureId);}}

	if (empty($pictureId)) {echo "<h3 style='color:red;'>No picture selected</h3>";
	$pictureName="";
	$pictureDescription="";
	$pictureDatas="";
	$portrait="";
	$fileName="";
	$indexOfPage="";	
	}
	else{
	$result=mysql_query("SELECT pictureName,pictureDescription,pictureDatas,portrait,fileName,indexOnPage,galleryName from gallery where id=$pictureId") or die(mysql_error());          
	$data = mysql_fetch_array($result);
	$pictureName=$data[0];
	$pictureDescription=$data[1];
	$pictureDatas=$data[2];
	$portrait=$data[3];
	$fileName=$data[4];
	$indexOnPage=$data[5];
	$galleryName=$data[6];
	}
	switch ($galleryName) {
    case "heritage":
        $folderName ='bbhs';
        break;
    case "canada":
        $folderName ='canada_wide';
        break;
    case "penink":
        $folderName ='pen_ink';
        break;
	case "montreal":
        $folderName ='montreal';
        break;
	case "worldwide":
        $folderName ='world_wide';
        break;
	case "toronto":
        $folderName ='toronto';
        break;
	case "figure":
        $folderName ='figure';
        break;
    default:
        $folderName ="";
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
  <script type="text/javascript" src="../js/confirmRemoving.js"></script>
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
			<h1>Edit Picture Gallery </h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
	<div id="editSection">
	
	<form method="POST" action="updatePicture.php" id="editForm" name="editForm" onSubmit="return validateForm();">
	
	<fieldset class="upper">	
					
                    <img src="../gallery/<?php echo $folderName;?>/thumbs/<?php echo $fileName;?>" alt="<?php echo $pictureName;?>">
                    
					<div id="" class="edits">  
					  <label for="pictureId">Picture ID</label>
					  <input type='text' name='pictureId' id='pictureId' value="<?php echo $pictureId;?>"  readonly>	  
					</div>
					
					<div id="" class="edits">  
					  <label for="pictureName">Picture Name</label>
					  <input type='text' name='pictureName' id='pictureName' value="<?php echo $pictureName;?>" style="width:465px;">	  
					</div>	
					
					<div id="" class="edits">
					  <label for="pictureDescription">Description</label>
					  <textarea rows="4" cols="50"  id = 'pictureDescription' name = 'pictureDescription'><?php echo $pictureDescription;?></textarea>
					</div>
					
					<div id="" class="edits">
					  <label for="pictureDatas">Datas</label>
					  <textarea rows="4" cols="50"  id = 'pictureDatas' name = 'pictureDatas'><?php echo $pictureDatas;?></textarea>
					</div>
					
					<div id="" class="edits">					
					  <label for="portrait">Portrait</label>
					  <input type="number"  min="0" max="1" name="portrait" id="portrait" value="<?php echo $portrait;?>">
					</div>
					
					<div id="" class="edits">
					  <label for="fileName">File Name</label>
					  <input type="text" name="fileName" id="fileName" value="<?php echo $fileName;?>" style="width:465px;">
					</div>
					
					<div id="" class="edits">					
					  <label for="indexOnPage">Index On Page</label>
					  <input type="number" name="indexOnPage" id="indexOnPage" value="<?php echo $indexOnPage;?>">
					</div>
					Edit&nbsp; <input type="radio" name="edit" value="edit" checked>
  					Remove&nbsp; <input type="radio" name="edit" value="remove" style="color:red;">
					<hr />

					<div id="submit" class="edits btn">
					  <input type="submit" value="submit" class="upper">				  
					</div>
					
				</fieldset> <!-- end of fieldset -->
			</form> <!-- end of form --> 
		</div> <!-- end of editSection -->
  
	</div><!-- end of PageContainer -->
 
</body>

</html>