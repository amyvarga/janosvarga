<!--
	PHP Document for HappySlaks.com of Janos Varga
	
	Developed by: V.Hohin 
	Script Date: July 29, 2016 
	Last modification: July 29, 2016	
-->

<?php 
include ("../blocks/db.php");
include ("blocks/lock.php");
	$pageName = "adminAdmin1";
	if (isset($_POST['editUser'])) 	{$name = $_POST['editUser'];
		if ($name == '') {unset($name);}
	}
	if (isset($_POST['edit'])) 	{$edit = $_POST['edit'];
		if ($edit == '') {unset($edit);}
	}
	
	if ((empty($name)) or (empty($edit))) {echo "<h3 style='color:red;'>No User or Type of Operation selected</h3>";
	$name="";
	$psw="";
	$email="";
	}
	else{
		if ($edit == 'remove'){
			$resultDelete=mysql_query("DELETE from familylist where name='$name'") or die(mysql_error());
			if ($resultDelete) {
				$delete="User was successfully removed.";				
			} else {
				$delete="User wasn't removed.";
			}
		}
		else {
			$resultSelect=mysql_query("SELECT name,psw,email  from familylist where name='$name'") or die(mysql_error());          
			$data = mysql_fetch_array($resultSelect);
			$name=$data[0];
			$psw=$data[1];
			$email=$data[2];
			$delete="";
		}
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
			<?php if ($edit == 'remove') {echo $delete;} 
			else {print('<h1>Edit Family  User "'); echo $name; print('"</h1>'); };?>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
	<div id="editSection">

<?php
	if ($edit == 'remove') { print('<form method="POST" action="updateFamilyUser.php"  class="hide">');} 
	else { print('<form method="POST" action="updateFamilyUser.php">');}
?>		
	<form method="POST" action="updateFamilyUser.php"  class="hide">
	<fieldset class="upper">	
					
					<div id="" class="edits">  
					  <label for="name">User name</label>
					  <input type='text' name='name' id='name' value="<?php echo $name;?>"  readonly>	  
					</div>
					
					<div id="" class="edits">  
					  <label for="psw">User password</label>
					  <input type='text' name='psw' id='psw' value="<?php echo $psw;?>">	  
					</div>
                    
                    <div id="" class="edits">  
					  <label for="email">User email</label>
					  <input type='text' name='email' id='email' value="<?php echo $email;?>">	  
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