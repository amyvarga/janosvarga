<!--
	PHP Document for HappySlaks.com of Janos Varga 
	Index.php page - main page show all Gallerys and General information
	Developed by: V.Hohin 
	Script Date: April 24, 2016 
	Last modification: April 24, 2016	
-->

<?php include ("blocks/db.php");
$result = mysql_query("SELECT titlePage,metaDescription,header_1,text_1,header_2,text_2,header_3,text_3 FROM settings WHERE pageName='index'",$db) or die("SQL error: ".mysql_error());
$myrow = mysql_fetch_array($result);
$pageName = "index";	//for top and  footer navigation (do not show navigation to self-page) 
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
    
	<!-- Modernizer allows HTML5 elements to work in older browsers: https://modernizr.com/-->
<!--	<script src="js/modernizr.js"></script>  
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
			
			<p><?php echo $myrow["text_1"];?></p>
            
            <h2><?php echo $myrow["header_2"];?></h2>
			
			<p><?php echo $myrow["text_2"];?></p>
            
            <h2><?php echo $myrow["header_3"];?></h2>
			
			<p><?php echo $myrow["text_3"];?></p>			
			
		</div><!-- end of Welcome Text -->

	<!-- Start of Gallery -->
		<div id="gallery">
		
		<!-- Start of List Gallery Sections-->
			<ul>		    
				<li>
					<section>
						<figure>
							<a href="bbhs.php">
							<img src="images/383_lakeshore_001.highlight.jpg" alt="Heritage homes on the West Island" title="Enter to Gallery">
							<figcaption class="hidecaption">Heritage homes on the West Island</figcaption>
							</a>
						</figure>
						<div class="gallerydescription  fulline">
							<h2>Heritage homes on the West Island</h2>
							<p>The Société historique Beaurepaire-Beaconsfield Historical Society 
							commissioned me to do watercolour paintings of 12 historical homes 
							for a calendar project.
							</p>
							<p class="smollsize beige">This album contains 12 items.</p>
						</div><!-- end of Gallery Description -->
					</section><!-- end of Gallery Section -->
				</li>

				<li>
					<section>
						<figure>
							<a href="penink.php">
							<img src="images/23_pacific_senneville.highlight.jpg" alt="Pen &amp; Ink" title="Enter to Gallery">
							<figcaption  class="hidecaption">Pen &amp; Ink</figcaption>
							</a>
						</figure>
						<div class="gallerydescription  fulline">
							<h2>Pen &amp; Ink</h2>
							<p>Many people ask me to do a pen&ink rendering of their home for cards. 
							These are printed on 'peppercorn' paper, blank inside and supplied with 
							matching envelopes and cost 200$ for 80.<br />
							Pen&amp;Ink drawings are also very attractive framed - they have a stark 
							simplicity about them that is quite unique to this medium.
							</p>
							<p class="smollsize beige">This album contains 13 items.</p>
						</div><!-- end of Gallery Description -->
					</section><!-- end of Gallery Section -->
				</li>				
				
				<li>
					<section>
						<figure>
							<a href="montreal.php">
							<img src="images/ragapple_hudson.highlight.jpg" alt="Montreal" title="Enter to Gallery">
							<figcaption class="hidecaption">Montreal</figcaption>
							</a>
						</figure>
						<div class="gallerydescription  fulline">
							<h2>Montreal</h2>
							<p>I really love the Montréal architecture; we have so many beautiful houses, 
							each so different yet many with a common thread ... a strong sense of family 
							and belonging and the home being the centre of it all.
							</p>
							<p class="smollsize beige">This album contains 21 items.</p>
						</div><!-- end of Gallery Description -->
					</section><!-- end of Gallery Section -->
				</li>
				
				<li>
					<section>
						<figure>
							<a href="worldwide.php">
							<img src="images/luna_de_luz_web.highlight.jpg" alt="Around the world" title="Enter to Gallery">
							<figcaption class="hidecaption">Around the world</figcaption>
							</a>
						</figure>
						<div class="gallerydescription  fulline">
							<h2>Around the world</h2>
							<p>You'll notice that I am using a range of medium - a lot depends what I have 
							with me at the time. Often it was only children's pencil crayons that I would 
							buy at a local toy store. Please bear in mind the evironmental factors. 
							The Everest Region gets very cold, and drawing outside with your hands 
							freezing is no fun :-) and not conducive to good artwork.
							</p>
							<p class="smollsize beige">This album contains 25 items.</p>
						</div><!-- end of Gallery Description -->
					</section><!-- end of Gallery Section -->
				</li>				
				
				<li>
					<section>
						<figure>
							<a href="figure.php">
							<img src="images/woman_effigy.highlight.jpg" alt="Figure, Still Life, Calligraphy" title="Enter to Gallery">
							<figcaption class="hidecaption">Figure, Still Life, Calligraphy</figcaption>
							</a>
						</figure>
						<div class="gallerydescription  fulline">
							<h2>Figure, Still Life, Calligraphy</h2>
							<p>Most of these were done for pleasure. I love to draw the human figure, 
							though I find it quite challanging.
							</p>
							<p class="smollsize beige">This album contains 19 items.</p>
						</div><!-- end of Gallery Description -->
					</section><!-- end of Gallery Section -->
				</li>
				
				<li>
					<section>
						<figure>
							<a href="toronto.php">
							<img src="images/avenue_road_guache.jpg" alt="Toronto" title="Enter to Gallery">
							<figcaption class="hidecaption">Toronto</figcaption>
							</a>
						</figure>
						<div class="gallerydescription  fulline">
							<h2>Toronto</h2>
							<p>The Société historique Beaurepaire-Beaconsfield Historical Society 
							commissioned me to do watercolour paintings of 12 historical homes 
							for a calendar project to be completed soon. I did paintings in many parts of 
							the city but I particularly remember Hogs Hollow - an area in the city where I had order after order, 
							going down the street. So many beautiful houses and the owners were justifiably proud of them.  
							</p>
							<p class="smollsize beige">This album contains 12 items.</p>
						</div><!-- end of Gallery Description -->
					</section><!-- end of Gallery Section -->
				</li>
				
				<li>
					<section>
						<figure>
							<a href="canadawide.php">
							<img src="images/cove_stanley_park.jpg" alt="Canada Wide" title="Enter to Gallery">
							<figcaption class="hidecaption">Canada Wide</figcaption>
							</a>
						</figure>
						<div class="gallerydescription  fulline">
							<h2>Canada Wide</h2>
							<p>The Société historique Beaurepaire-Beaconsfield Historical Society 
							commissioned me to do watercolour paintings of 12 historical homes 
							for a calendar project to be completed soon. This was a lot of fun and so diverse! I had orders from people to do a painting of their cottages, arbours, an airplane, did some work at a treeplanting camp and much more.  
							</p>
							<p class="smollsize beige">This album contains 12 items.</p>
						</div><!-- end of Gallery Description -->
					</section><!-- end of Gallery Section -->
				</li>
			
			</ul><!-- end of List Gallery Sections -->	
		
		</div><!-- end of Gallery -->
	
	</div><!-- end of PageContainer -->
  
<!-- Start of Footer  -->
	<?php include("blocks/footer.php"); ?>

</body>

</html>