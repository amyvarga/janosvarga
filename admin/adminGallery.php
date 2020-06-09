<!--
	PHP Document for HappySlaks.com of Janos Varga	
	Developed by: V.Hohin 
	Script Date: May 28, 2016 
	Last modification: July 10, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminGallery";
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <title>Admin | Gallery Pages</title>
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
			<h1>Selection Gallery For Edit</h1>
		</div><!-- end of Welcome Text -->
					
		<div id="editSection">
			<div id="" class="firstSelect"> 
			<!-- action="http://server.prokopski.com/html/receive.php"  selectGallery.php-->
			<form action="selectGallery.php" method="POST">
				<label for="page">Gallery name</label>
				<select id = "page" name='editPageName' style="width:150px">			
				<?php
					$result=mysql_query("SELECT DISTINCT galleryName from gallery where galleryName<>'gallery'") or die(mysql_error());          
					$data = mysql_fetch_array($result);
					do {
					{echo "<option id='pageName'  value=$data[0]>&nbsp;$data[0]</option>";}
					} while ($data = mysql_fetch_array($result)); 
				?>						
				</select>
				<div id="submitSelect" class="edits btn">
				<input type="submit" value="Select" id="selectPage"  class="upper">
				</div>
			</form>
		</div>
		</div> <!-- end of editSection -->
  
	</div><!-- end of PageContainer -->
 
</body>

</html>