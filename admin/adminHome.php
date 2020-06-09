<!--
	PHP Document for HappySlaks.com of Janos Varga	
	Developed by: V.Hohin 
	Script Date: July 10, 2016 
	Last modification: July 10, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminHome";
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
			<h1>Edit Gallery Page</h1>
		</div><!-- end of Welcome Text -->
					
		<div id="editSection">
			<div id="" class="firstSelect"> 
			<form action="editHome.php" method="POST">
				<label for="page">Section</label>
				<select id = "page" name='editSection' style="width:300px">			
				<?php
					$result=mysql_query("SELECT id,pictureName from gallery where galleryName = 'gallery'") or die(mysql_error());          
					$data = mysql_fetch_array($result);
					do {
					{echo "<option id='user'  value=$data[0]>&nbsp;$data[1]</option>";}
					} while ($data = mysql_fetch_array($result)); 
				?>						
				</select>&nbsp;
               <!-- Edit&nbsp; <input type="radio" name="edit" value="edit" checked>
  				Remove&nbsp; <input type="radio" name="edit" value="remove">-->
                
				<div id="submitSelect" class="edits btn">
				<input type="submit" value="Edit" id="editPage"  class="upper edits btn">
				
				<!--<button id="delete" name = "delete" value = "delete" class="upper" >delete</button>-->
				</div>
			</form>
            <a href="addAdmin.php"><button id="new" name = "new" value = "new" class="upper edits btn hide" >ADD NEW</button></a>
		</div>
		</div> <!-- end of editSection -->
  
	</div><!-- end of PageContainer -->
 
</body>

</html>