<!--
	PHP Document for HappySlaks.com of Janos Varga	
	Developed by: V.Hohin 
	Script Date: July 10, 2016 
	Last modification: July 10, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminHome1";
	if (isset($_POST['editSection'])) 	{$idSection = $_POST['editSection'];
	if ($idSection == '') {unset($idSection);}
	}
	if (empty($idSection)) {echo "<h3 style='color:red;'>No section selected</h3>";
	$id="";
	$pictureName="";
	$pictureDescription="";
	$pictureDatas="";	
	$portrait="";	
	$fileName="";	
	$indexOnPage="";
	}
	else{
	$resultSelect=mysql_query("SELECT id,pictureName,pictureDescription,pictureDatas,portrait,fileName,indexOnPage  from gallery where id=$idSection") or die(mysql_error());          
	$data = mysql_fetch_array($resultSelect);
	$id=$data[0];
	$pictureName=$data[1];
	$pictureDescription=$data[2];
	$pictureDatas=$data[3];	
	$portrait=$data[4];	
	$fileName=$data[5];	
	$indexOnPage=$data[6];
	}
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
			<h1>Edit Gallery Section "<?php echo $pictureName; ?>" page</h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
	<div id="editSection">
	
	<form method="POST" action="updateHome.php"><!-- action="http://server.prokopski.com/html/receive.php"  updateSettings.php-->
	<fieldset class="upper">	
					
					<img src="../<?php echo $fileName;?>" alt="image">
                    
                    <div id="" class="edits">  
					  <label for="id">ID</label>
					  <input type='text' name='id' id='id' value="<?php echo $id;?>"  readonly>	  
					</div>
					
					<div id="" class="edits">  
					  <label for="name">Picture name</label>
					  <input type='text' name='name' id='name' value="<?php echo $pictureName;?>" style="width:465px;">	  
					</div>
					
					<div id="" class="edits">
					  <label for="description">Description of picture</label>
					  <textarea rows="4" cols="50"  id = 'description' name = 'description'><?php echo $pictureDescription;?></textarea>
					</div>
                    
                    <div id="" class="edits">
					  <label for="datas">Datas of picture</label>
					  <textarea rows="4" cols="50"  id = 'datas' name = 'datas'><?php echo $pictureDatas;?></textarea>
					</div>
                    
					
					<div id="" class="edits">					
					  <label for="portrait">Portrait</label>
					  <input type="text" name="portrait" id="portrait" value="<?php echo $portrait;?>">
					</div>
					
					<div id="" class="edits">
					  <label for="fileName">File Name</label>
					  <input type="text" name="fileName" id="fileName" value="<?php echo $fileName;?>" style="width:465px;">
					</div>
					
					<div id="" class="edits">
					  <label for="indexOnPage">Index On Page</label>
					  <input type="text" name="indexOnPage" id="indexOnPage" value="<?php echo $indexOnPage;?>">
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