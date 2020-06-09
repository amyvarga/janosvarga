<!--
	PHP Document for HappySlaks.com of Janos Varga
	Developed by: V.Hohin 
	Script Date: July 15, 2016 
	Last modification: July 15, 2016	
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
  
  <title>Admin | Picture</title>
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
			<h1>Add New Picture To Gallery </h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
	<div id="editSection">
    <form action="uploadPicture.php" method="post" enctype="multipart/form-data">
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
                
                <hr /><br/><br/>
                
                <label for="fileToUpload">Select image</label>
                <input type="file" name="fileToUpload" id="fileToUpload">
                
                Full Size&nbsp; <input type="radio" name="pictureSize" value="fullSize" checked>
  				Thumbs&nbsp; <input type="radio" name="pictureSize" value="thumbsSize">
                
                <div id="submit" class="edits btn">
                    <input type="submit" value="Upload" class="upper" name="submit">				  
                </div>
        </fieldset> <!-- end of fieldset -->
	</form>
   
		</div> <!-- end of editSection -->
  
	</div><!-- end of PageContainer -->
 
</body>

</html>
