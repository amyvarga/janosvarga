<!--
	PHP Document for HappySlaks.com of Janos Varga 
	Montreal Gallery page
	Developed by: V.Hohin 
	Script Date: April 24, 2016 
	Last modification: April 25, 2016	
-->

<?php include ("blocks/db.php");
$result = mysql_query("SELECT titlePage, metaDescription, header_1, imageLocation FROM settings WHERE pageName='montreal'",$db) or die("SQL error: ".mysql_error());
$myrow = mysql_fetch_array($result);
$header_1 = $myrow["header_1"];	//name of gallery on gallery pages
$galleryName = "montreal";	//for side navigation on gallery pages
$pageName = "montreal";		//for top navigation
$imageLocation = $myrow["imageLocation"]; // to find images (for navigation)
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

  <title><?php echo $myrow["titlePage"];?></title>
  <!-- Meta Description for Search Engine Results -->
  <meta name="description" content="<?php echo $myrow["metaDescription"];?>"
	
  <!-- Custom CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main.css">
    
  <!--  Modernizr allows HTML5 elements to work in older browsers: https://modernizr.com/-->
 <!-- <script src="js/modernizr.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->
 
</head>

<body>
 
<!-- Start of pageHeader --> 
	<?php include("blocks/header.php"); ?> 	
		
<!-- Start of pageContainer --> 	
	<div id="pagecontainer">
   
	<!-- Start of Top navigation -->
		<?php include("blocks/topnav.php"); ?>

	<!-- Start of Gallery -->
		<?php include("blocks/contentgallery.php"); ?>
	
	</div><!-- end of PageContainer -->
  
<!-- Start of Footer  -->
	<?php include("blocks/footer.php"); ?>

</body>

</html>