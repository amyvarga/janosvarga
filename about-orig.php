<!--
	PHP Document for HappySlaks.com of Janos Varga
	family.php page to get access to Family page
	Developed by: V.Hohin 
	Script Date: May 01, 2016 
	Last modification: May 01, 2016	
-->

<?php include ("blocks/db.php");
$result = mysql_query("SELECT titlePage,metaDescription,header_1,text_1,header_2,text_2,header_3,text_3 FROM settings WHERE pageName='about'",$db) or die("SQL error: ".mysql_error());
$myrow = mysql_fetch_array($result);
$pageName = "about";	//for top and  footer navigation (do not show navigation to self-page) 
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <title><?php echo $myrow["titlePage"];?></title>
  <!-- Meta Description for Search Engine Results -->
  <meta name="description" content="<?php echo $myrow["metaDescription"];?>"
	
  <!-- Custom CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main.css">
    
  <!--  Modernizr allows HTML5 elements to work in older browsers: https://modernizr.com/-->
  <!--<script src="js/modernizr.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->
</head>

<body>
 
<!-- Start of pageHeader --> 
	<?php include("blocks/header.php"); ?> 	

<!-- Start of pageContainrt --> 	
	<div id="pagecontainer">	

	<!-- Start of Top navigation -->
		<?php include("blocks/topnav.php"); ?>
		
	<!-- Start of Welcome Text --> 		
		<div id="welcomtext">
		
			<h1><?php echo $myrow["header_1"];?></h1>
		</div><!-- end of Welcome Text -->	
		
		<article id="about">
		
			<p><?php echo $myrow["text_1"];?></p>
            
            <h2><?php echo $myrow["header_2"];?></h2>
			
			<p><?php echo $myrow["text_2"];?></p>
            
            <h2><?php echo $myrow["header_3"];?></h2>
			
			<p><?php echo $myrow["text_3"];?></p>
            
		</article><!-- end of Article About -->	
		
	</div><!-- end of PageContainer -->
  
<!-- Start of Footer  -->
	<?php include("blocks/footer.php"); ?> 

</body>

</html>