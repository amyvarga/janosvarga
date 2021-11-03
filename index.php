<!--
	PHP Document for HappySlaks.com of Janos Varga 
	Index.php page - main page show all Gallerys and General information
	Developed by: V.Hohin 
	Script Date: April 24, 2016 
	Last modification: April 24, 2016	
-->

<?php include ("blocks/db.php");
$result = mysql_query("SELECT titlePage,metaDescription,header_1,text_1,header_2,text_2,header_3,text_3 FROM settings WHERE pageName='index'", $db) or die("SQL error: ".mysql_error());
$myrow = mysql_fetch_array($result);
$pageName = "index";	//for top and  footer navigation (do not show navigation to self-page) 
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<?php include("blocks/head.php"); ?> 	
</head>
<body>
	<?php include("blocks/header.php"); ?> 	
	<div id="pagecontainer" class="col-lg-9 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12">
       <div>
	       <h2>On a Whim</h2>
       </div>
       <ul class="minor-carousel-wrapper lightgallery">
           <?php 
               $galleryName = "heritage";
               $galleryLink = "bbhs";
               global $galleryName;
               global $galleryLink;
               include ("blocks/carousel.php"); 
           ?>
       </ul>
       <div>
	       <h2>Pen &amp; Ink</h2>
       </div>
       <ul class="minor-carousel-wrapper lightgallery">
           <?php 
               $galleryName = "penink";
               $galleryLink = "penink";
               include ("blocks/carousel.php"); 
           ?>
       </ul>
       <div>
            <h2>Montreal</h2>
       </div>
       <ul class="minor-carousel-wrapper lightgallery">
           <?php 
               $galleryName = "montreal";
               $galleryLink = "montreal";
               include ("blocks/carousel.php"); 
           ?>
       </ul>
       <div>
            <h2>World-Wide</h2>
       </div>
       <ul class="minor-carousel-wrapper lightgallery">
           <?php 
               $galleryName = "worldwide";
               $galleryLink = "worldwide";
               include ("blocks/carousel.php"); 
           ?>
       </ul>
       <div>
           <h2>Toronto</h2>
       </div>
       <ul class="minor-carousel-wrapper lightgallery">
           <?php 
               $galleryName = "toronto";
               $galleryLink = "toronto";
               include ("blocks/carousel.php"); 
           ?>
       </ul>
       <div>
           <h2>Canada-Wide</h2>
       </div>
       <ul class="minor-carousel-wrapper lightgallery">
           <?php 
               $galleryName = "canada";
               $galleryLink = "canadawide";
               include ("blocks/carousel.php"); 
           ?>
       </ul>
       <div>
           <h2>Figure, Still Life, Calligraphy</h2>
       </div>
       <ul class="minor-carousel-wrapper tall lightgallery">
           <?php 
               $galleryName = "figure";
               $galleryLink = "figure";
               include ("blocks/carousel.php"); 
           ?>
       </ul>
	</div>
	<?php include("blocks/footer.php"); ?>
</body>
</html>
