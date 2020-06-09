<!--
	PHP Document for HappySlaks.com of Janos Varga	
	Developed by: V.Hohin 
	Script Date: July 10, 2016 
	Last modification: July 10, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminFamily1";
	if (isset($_POST['editPage'])) 	{$idPage = $_POST['editPage'];
	if ($idPage == '') {unset($idPage);}
	}
	if (empty($idPage)) {echo "<h3 style='color:red;'>No page selected</h3>";
	$id="";
	$namePage="";
	$caption1="";
	$caption2="";	
	$caption3="";	
	$text1="";	
	$text2="";
	$text3="";	
	$namePicture1="";
	$namePicture2="";	
	$namePicture3="";
	}
	else{
	$resultSelect=mysql_query("SELECT *  from family where id=$idPage") or die(mysql_error());          
	$data = mysql_fetch_array($resultSelect);
	$id=$data[0];
	$namePage=$data[1];
	$caption1=$data[2];
	$caption2=$data[3];	
	$caption3=$data[4];	
	$text1=$data[5];	
	$text2=$data[6];
	$text3=$data[7];	
	$namePicture1=$data[8];
	$namePicture2=$data[9];	
	$namePicture3=$data[10];
	}
?>


<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <title>Admin | Family</title>
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
			<h1>Edit Family Page "<?php echo $caption1; ?>"</h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
	<div id="editSection">
	
	<form method="POST" action="updateFamily.php"><!-- action="http://server.prokopski.com/html/receive.php"  updateSettings.php-->
	<fieldset class="upper">
                    
                    <div id="" class="edits">  
					  <label for="id">ID</label>
					  <input type='text' name='id' id='id' value="<?php echo $id;?>"  readonly>	  
					</div>
					
					<div id="" class="edits">  
					  <label for="namePage">Page name</label>
					  <input type='text' name='namePage' id='namePage' value="<?php echo $namePage;?>" style="width:465px;">	  
					</div>
                    
                    <div id="" class="edits">  
					  <label for="caption1">Caption 1</label>
					  <input type='text' name='caption1' id='caption1' value="<?php echo $caption1;?>" style="width:465px;">	  
					</div>
                    
                    <div id="" class="edits">  
					  <label for="caption2">Caption 2</label>
					  <input type='text' name='caption2' id='caption2' value="<?php echo $caption2;?>" style="width:465px;">	  
					</div>
                    
                    <div id="" class="edits">  
					  <label for="caption3">Caption 3</label>
					  <input type='text' name='caption3' id='caption3' value="<?php echo $caption3;?>" style="width:465px;">	  
					</div>                    
					
					<div id="" class="edits">
					  <label for="text1">Text 1</label>
					  <textarea rows="4" cols="50"  id = 'text1' name = 'text1'><?php echo $text1;?></textarea>
					</div>
                    
                    <div id="" class="edits">
					  <label for="text2">Text 2</label>
					  <textarea rows="4" cols="50"  id = 'text2' name = 'text2'><?php echo $text1;?></textarea>
					</div>
                    
                    <div id="" class="edits">
					  <label for="text3">Text 3</label>
					  <textarea rows="4" cols="50"  id = 'text3' name = 'text3'><?php echo $text3;?></textarea>
					</div>
                    
                    <div id="" class="edits">  
					  <label for="namePicture1">Picture 1 name</label>
					  <input type='text' name='namePicture1' id='namePicture1' value="<?php echo $namePicture1;?>" style="width:465px;">	  
					</div>
                    
                    <div id="" class="edits">  
					  <label for="namePicture2">Picture 2 name</label>
					  <input type='text' name='namePicture2' id='namePicture2' value="<?php echo $namePicture2;?>" style="width:465px;">	  
					</div>
                    
                    <div id="" class="edits">  
					  <label for="namePicture3">Picture 3 name</label>
					  <input type='text' name='namePicture3' id='namePicture3' value="<?php echo $namePicture3;?>" style="width:465px;">	  
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