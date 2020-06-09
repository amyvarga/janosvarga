<!--
	PHP Document for HappySlaks.com of Janos Varga
	family/index.php first page Varge Family
	Developed by: V.Hohin 
	Script Date: June 19, 2016 
	Last modification: June 29, 2016	
-->
<?php
    require "familyentercheck.php";
	//session_start();
	$sessionName=$_SESSION["name"];
?>
<?php include ("../blocks/db.php");
//require "blocks/auth.php";

$result = mysql_query("SELECT * FROM family WHERE namePage='familytree'",$db) or die("SQL error: ".mysql_error());
$myrow = mysql_fetch_array($result);
$pageName = "familytree";	//for top and  footer navigation (do not show navigation to self-page) 
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <title>Varga Family Tree</title>
  <!-- Meta Description for Search Engine Results -->
  <meta name="description" content="Varga Family Tree">
	
  <!-- Custom CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="../css/main.css">
    
  <!--  Modernizr allows HTML5 elements to work in older browsers: https://modernizr.com/-->
  <!--<script src="../js/modernizr.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->
 
</head>

<body>
 
<!-- Start of pageHeader --> 
	<?php include("blocks/header.php"); ?> 	

<!-- Start of pageContainrt --> 	
	<div id="familycontainer">	

	<!-- Start of Top navigation -->
		<?php include("blocks/topnav.php"); ?>
		
	<!-- Start of Welcome Text --> 		
		<div id="welcomtext">
			<h1><?php echo $myrow["caption1"];?></h1>
		</div><!-- end of Welcome Text -->
		
		<div id="content_family">  
        	<h2><?php echo $myrow["caption2"];?></h2>  
		  	
       <?php   if($myrow["namePicture1"]!=""){ 
          		   print('<img src="../images/'); echo $myrow["namePicture1"]; print('" width="100%" alt="Varga family tree">');
			   }
		?>

		</div> <!-- end of content_family -->
  
	</div><!-- end of PageContainer -->
  
<!-- Start of Footer  -->
	<?php include("blocks/footer.php"); ?> 

</body>

</html>