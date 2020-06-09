<!--
	PHP Document for HappySlaks.com of Janos Varga
	Developed by: V.Hohin 
	Script Date: May 29, 2016 
	Last modification: July 10, 2016	
-->


<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminPicture1";
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
			<h1>Edit Picture Gallery </h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
	<div id="editSection">
    <!--<form enctype="multipart/form-data" method="post">
   <p><b>Select image:</b>
   <input type="file" size="30"></p>
  <input type="submit" value="Upload" class="upper edits btn" style="width:200px;">
  </form> -->
    <a href="addNewPicture.php" target="_blank" ><button id="newPicture" name = "new" value = "new" class="upper edits btn" style="width:200px;">ADD NEW PICTURE</button></a>
	
	<form method="POST" action="confirmAddPicture.php">
	
	<fieldset class="upper">	
				<br/>	
                <label for="galleryName">Select Gallery</label>
				<select id = "galleryName" name='galleryName' style="width:150px">			
				<?php
					$result=mysql_query("SELECT DISTINCT galleryName from gallery where galleryName<>'gallery'") or die(mysql_error());          
					$data = mysql_fetch_array($result);
					do {
					{echo "<option id='pageName'  value=$data[0]>&nbsp;$data[0]</option>";}
					} while ($data = mysql_fetch_array($result)); 
				?>						
				</select><br/><br/>
                
                <hr />
                    
					<!--<div id="" class="edits">  
					  <label for="pictureId">Picture ID</label>
					  <input type='text' name='pictureId' id='pictureId' value=""  readonly>	  
					</div>-->
					
					<div id="" class="edits">  
					  <label for="pictureName">Picture Name</label>
					  <input type='text' name='pictureName' id='pictureName' value="" style="width:465px;">	  
					</div>	
					
					<div id="" class="edits">
					  <label for="pictureDescription">Description</label>
					  <textarea rows="4" cols="50"  id = 'pictureDescription' name = 'pictureDescription'></textarea>
					</div>
					
					<div id="" class="edits">
					  <label for="pictureDatas">Datas</label>
					  <textarea rows="4" cols="50"  id = 'pictureDatas' name = 'pictureDatas'></textarea>
					</div>
					
					<div id="" class="edits">					
					  <label for="portrait">Portrait (0 or 1)</label>
					  <input type="number"  min="0" max="1" name="portrait" id="portrait" value="">
					</div>
					
					<div id="" class="edits">
					  <label for="fileName">File Name</label>
					  <input type="text" name="fileName" id="fileName" value="" style="width:465px;">
					</div>
					
					<div id="" class="edits">					
					  <label for="indexOnPage">Index On Page</label>
					  <input type="number" name="indexOnPage" id="indexOnPage" value="">
					</div>
					
					<hr />

					<div id="submit" class="edits btn">
					  <input type="submit" value="add" class="upper">				  
					</div>
					
				</fieldset> <!-- end of fieldset -->
			</form> <!-- end of form --> 
            
            
		</div> <!-- end of editSection -->
  
	</div><!-- end of PageContainer -->
 
</body>

</html>