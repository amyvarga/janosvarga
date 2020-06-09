<!--
	PHP Document for HappySlaks.com of Janos Varga
	adminTopnav.php - top navigation of all pages
	Developed by: V.Hohin 
	Script Date: May 22, 2016 
	Last modification: May 23, 2016	
-->

		<nav id="topnav">
			<ul class="container ">
<?php
	if ($pageName == "adminIndex") { print("<li><a href='index.php' class='checked'>Settings</a></li>");}
	else { print("<li><a href='index.php'>Settings</a></li>");}
	if ($pageName == "adminHome") { print("<li><a href='adminHome.php' class='checked'>Home</a></li>");}
	else { print("<li><a href='adminHome.php'>Home</a></li>");}
	if ($pageName == "adminGallery") { print("<li><a href='adminGallery.php' class='checked'>Gallery pages</a></li>");}
	else { print("<li><a href='adminGallery.php'>Gallery pages</a></li>");}
	if ($pageName == "adminFamily") { print("<li><a href='adminFamily.php' class='checked'>Family</a></li>");}
	else { print("<li><a href='adminFamily.php'>Family</a></li>");}
	if ($pageName == "adminAdmin") { print("<li><a href='adminAdmin.php' class='checked'>Admin</a></li>");}
	else { print("<li><a href='adminAdmin.php'>Admin</a></li>");}
/*	if ($pageName == "adminAbout") { print("<li><a href='adminAbout.php' class='checked'>About</a></li>");}
	else { print("<li><a href='adminAbout.php'>About</a></li>");}
	if ($pageName == "adminContact") { print("<li><a href='adminContact.php' class='checked'>Contact</a></li>");}
	else { print("<li><a href='adminContact.php'>Contact</a></li>");}*/
?>	
			</ul> 
		</nav><!-- end of top Nav --> 

	