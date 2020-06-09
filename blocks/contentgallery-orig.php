<!--
	PHP Document for HappySlaks.com of Janos Varga 
	contentgallery.php - Content all Gallery pages
	Developed by: V.Hohin 
	Script Date: April 24, 2016 
	Last modification: April 24, 2016	
-->

<!-- Start of Welcome Text --> 		
		<div id='welcomtext'>		
			<h1><?php echo $header_1 ?></h1>
		</div> 
		<!-- end of Welcome Text -->
		
	<!-- Start of Gallery -->
		<div id="gallerysection">
		
		<!-- Start of Navigation of Gallers -->
			<div id="navgallery">
				<ul id="menu">
<?php				
	if ($galleryName != "heritage") { print("<li><a href='bbhs.php'>Heritage Homes</a></li>");}
	if ($galleryName != "penink") { print("<li><a href='penink.php'>Pen &amp; Ink</a></li>");}
	if ($galleryName != "montreal") { print("<li><a href='montreal.php'>Montreal</a></li>");}
	if ($galleryName != "worldwide") { print("<li><a href='worldwide.php'>Around the world</a></li>");}
	if ($galleryName != "figure") { print("<li><a href='figure.php'>Figure &amp; Still Life</a></li>");}
	if ($galleryName != "toronto") { print("<li><a href='toronto.php'>Toronto</a></li>");}
	if ($galleryName != "canada") { print("<li><a href='canadawide.php'>Canada Wide</a></li>");}					
?>
					</ul>
			</div><!-- end of Navigation of Gallers -->
			
			<!-- Start of List Gallery Sections -->
			<article>
			<ul>
			
<?php
	// number of pictures in Gallery for navigation
	$num_posts=mysql_fetch_array(mysql_query("SELECT COUNT(*) FROM gallery WHERE galleryName='$galleryName'")) or die(mysql_error());
    $num_posts = $num_posts["COUNT(*)"];
	
	// get datas of pictures from database
	$resultPicture = mysql_query("Select pictureName, pictureDescription, pictureDatas, portrait, fileName  
	from gallery where galleryName = '$galleryName' order by indexOnPage") or die(mysql_error());
	$data = mysql_fetch_array($resultPicture);	
	
	//number of picture and numbers Next and Prev pictures for navigation
	$num_image = 0;

	do {
		$num_image = $num_image+1;

			if ($num_image == 1) {
				$num_prev = $num_posts;
			} else {
				$num_prev = $num_image-1;
			}			
			if ($num_image == $num_posts) {
				$num_next = 1;
			} else {
				$num_next = $num_image+1;
			}	
	
	// separate landscape and portrait pictures
	if ($data["portrait"] == 1) { print("<li><section class='portrait'>");}
	else { print("<li><section>");}	
	
	// output pictures to page
	printf("<figure>
							<a href='#%s'>
							<img src='gallery/%s/thumbs/%s' alt='%s' class='thumb'>
							<figcaption>%s</figcaption>
							</a>
						</figure>
						<div class='gallerydescript'>							
							<p>%s</p>
							<p class='smollsize beige'>%s</p>
						</div><!-- end of Gallery Description -->
						<div class='pic-overlay' id='%s'>
							<img src='gallery/%s/watercolour/%s' alt='%s' />
							<a href='#%s' class='pic-left' style='color:white; font-size:1.1em; font-weight:bold; padding-bottom:10px;'><</a>
							<a href='#page' class='pic-close' style='color:white;'>CLOSE</a> 
							<a href='#%s' class='pic-right' style='color:white; font-size:1.1em; font-weight:bold; padding-bottom:10px;'>></a> 						
						</div><!--- end of max picture   -->	
					</section><!-- end of Gallery Section -->
				</li>", $num_image, $imageLocation, $data["fileName"], $data["pictureName"], $data["pictureName"],  
				$data["pictureDescription"], $data["pictureDatas"], $num_image, $imageLocation, $data["fileName"],
				$data["pictureName"],$num_prev,$num_next);
	}
	while ( $data = mysql_fetch_array($resultPicture));
	
?>							

			</ul>			
			</article><!-- end of List Gallery Sections -->		
		</div><!-- end of Gallery -->	
