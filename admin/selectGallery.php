<!--
	PHP Document for HappySlaks.com of Janos Varga
	
	Developed by: V.Hohin 
	Script Date: May 28, 2016 
	Last modification: May 29, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminGallery1";
	if (isset($_POST['editPageName'])) 	{$idPageName = $_POST['editPageName'];
	if ($idPageName == '') {unset($idPageName);}
	}
	if (empty($idPageName)) {echo "<h3 style='color:red;'>No page selected</h3>";
	}
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <title>Select Gallery</title>
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
			<h1>Edit Gallery "<?php echo $idPageName; ?>"</h1>
		</div><!-- end of Welcome Text -->
					
		<div id="editSection">
			<div id="" class="firstSelect"> 
			<!-- action="http://server.prokopski.com/html/receive.php"  editSelectedGalleryPicture.php-->
			<form action="editSelectedGalleryPicture.php" method="POST">
				<!--<div id="" class="edits">  
					  <label for="galeryName"  style="width:200px">Gallery Name</label>
					  <input type='text' name='gName' id='galeryName' value="<?php echo $idPageName;?>"  readonly>	  
				</div>-->
				
				<label for="page"   style="width:200px">Select Picture For Edit</label>
				<select id = "page" name="pictureId" style="width:350px">			
				<?php	
					//SELECT `pictureName` FROM `gallery` WHERE `galleryName`='heritage'	
					$result=mysql_query("SELECT id, pictureName, fullGalleryName FROM gallery WHERE galleryName='$idPageName'") or die(mysql_error());          
					$data = mysql_fetch_array($result);
					do {
					{echo "<option id='pageName'  value=$data[0]>&nbsp;$data[1]</option>";}
					$fName=$data[2];
					} while ($data = mysql_fetch_array($result));  
				?>						
				</select>
				<div id="submitSelect" class="edits btn">
				<input type="submit" value="Edit" id="selectPage"  class="upper">
				</div>
			</form>
            <hr />
            <a href="addPicture.php"><button id="new" name = "new" value = "new" class="upper edits btn"  style="width:220px;">ADD NEW PICTURE</button></a>
            <!--<a href=removeSelectedGalleryPicture.php><button id="new" name = "new" value = "new" class="upper edits btn" >REMOVE</button></a>-->
		</div>
		</div> <!-- end of editSection -->
  
	</div><!-- end of PageContainer -->
 
</body>

</html>