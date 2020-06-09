<!--
	PHP Document for HappySlaks.com of Janos Varga
	family.php page to get access to Family page
	Developed by: V.Hohin 
	Script Date: April 24, 2016 
	Last modification: July 30, 2016	
-->
<?php
    session_start();
?>

<?php include ("blocks/db.php");
/*$result = mysql_query("SELECT titlePage,metaDescription FROM settings WHERE pageName='family'",$db) or die("SQL error: ".mysql_error());
$myrow = mysql_fetch_array($result);*/
$pageName = "familyforgotpsw";	//for top and  footer navigation (do not show navigation to self-page) 
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <title>Family</title>
  <!-- Meta Description for Search Engine Results -->
  <meta name="description" content=""
	
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

<!-- Start of pageContainrt --> 	
	<div id="pagecontainer">	

	<!-- Start of Top navigation -->
		<?php include("blocks/topnav.php"); ?>
		
	<!-- Start of Welcome Text --> 		
		<div id="welcomtext">
			<h1>Family page</h1>
		</div><!-- end of Welcome Text -->
		
		<div id="content_family">    
		  
			<form method="POST" action="confirmforgotpsw.php"><!--action="http://server.prokopski.com/html/receive.php"-->
				<fieldset class="upper">
				
				<!--	<legend align="left">Enter</legend> -->					
					<div id="email">  
					  <label for="email">Enter Email</label>
					  <input type="text" name="email" id="email">
					</div>					
					
					<hr />

					<div id="sub">
					  <input type="submit" value="Send" class="upper">				  
					</div>
				</fieldset> <!-- end of fieldset -->
                
                
			</form> <!-- end of form --> 
        
            
            
		</div> <!-- end of content_family -->
  		<!--<div id="forgotpsw">
            <a href="family.php">Return to the Family page.</a>
        </div>-->    
	</div><!-- end of PageContainer -->
  
<!-- Start of Footer  -->
	<?php include("blocks/footer.php"); ?> 

</body>

</html>