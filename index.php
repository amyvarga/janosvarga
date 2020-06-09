<!--
	PHP Document for HappySlaks.com of Janos Varga 
	Index.php page - main page show all Gallerys and General information
	Developed by: V.Hohin 
	Script Date: April 24, 2016 
	Last modification: April 24, 2016	
-->

<?php include ("blocks/db.php");
$result = mysqli_query($db, "SELECT titlePage,metaDescription,header_1,text_1,header_2,text_2,header_3,text_3 FROM settings WHERE pageName='index'") or die("SQL error: ".mysql_error());
$myrow = mysqli_fetch_array($result);
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
            <h2>Heritage homes on the West Island</h2>
            <p>Commissioned by <a href="http://www.hist-beaurepaire-beaconsfield.com/" target="_blank">Société historique Beaurepaire-Beaconsfield</a> for a calendar featuring historical homes.
            </p>
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
            <p>Many people ask me to do a pen &amp; ink rendering of their home for cards. These are printed on 'peppercorn' paper, blank inside and supplied with matching envelopes and cost 200$ for 80.</p>
            <p>Pen &amp; ink drawings are also very attractive framed - they have a stark simplicity about them that is quite unique to this medium.</p>
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
            <p>I really love the Montréal architecture; we have so many beautiful houses, each so different yet many with a common thread ... a strong sense of family and belonging and the home being the centre of it all.</p>
       </div>
       <ul class="minor-carousel-wrapper lightgallery">
           <?php 
               $galleryName = "montreal";
               $galleryLink = "montreal";
               include ("blocks/carousel.php"); 
           ?>
       </ul>
       <div>
            <h2>Around The World</h2>
            <p>You'll notice that I am using a range of medium - a lot depends what I have with me at the time. Often it was only children's pencil crayons that I would buy at a local toy store. Please bear in mind the evironmental factors. The Everest Region gets very cold, and drawing outside with your hands freezing is no fun :-) and not conducive to good artwork.
            </p>
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
           <p>The Société historique Beaurepaire-Beaconsfield Historical Society commissioned me to do watercolour paintings of 12 historical homes for a calendar project to be completed soon. I did paintings in many parts of the city but I particularly remember Hogs Hollow - an area in the city where I had order after order, going down the street. So many beautiful houses and the owners were justifiably proud of them.  
           </p>
       </div>
       <ul class="minor-carousel-wrapper lightgallery">
           <?php 
               $galleryName = "toronto";
               $galleryLink = "toronto";
               include ("blocks/carousel.php"); 
           ?>
       </ul>
       <div>
           <h2>Canada Wide</h2>
           <p>The Société historique Beaurepaire-Beaconsfield Historical Society commissioned me to do watercolour paintings of 12 historical homes for a calendar project to be completed soon. This was a lot of fun and so diverse! I had orders from people to do a painting of their cottages, arbours, an airplane, did some work at a treeplanting camp and much more.</p>
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
           <p>Most of these were done for pleasure. I love to draw the human figure, though I find it quite challanging.
           </p>
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
