<!--
	PHP Document for HappySlaks.com of Janos Varga
	topnav.php - top navigation of all pages
	Developed by: V.Hohin 
	Script Date: June 19, 2016 
	Last modification: June 19, 2016	
-->

		<nav id="topnav">
			<ul class="container ">
<?php
	if ($pageName == "familyindex") { print("<li><a href='index.php' class='checked'>Home</a></li>");}
	else { print("<li><a href='index.php'>Home</a></li>");}
	if ($pageName == "familytree") { print("<li><a href='familytree.php' class='checked'>Family tree</a></li>");}
	else { print("<li><a href='familytree.php'>Family tree</a></li>");}
	if ($pageName == "aaaaaa") { print("<li><a href='#' class='checked'>aaaaaa</a></li>");}
	else { print("<li><a href='#'>aaaaaa</a></li>");}
	if ($pageName == "bbbbbb") { print("<li><a href='#' class='checked'>bbbbbb</a></li>");}
	else { print("<li><a href='#'>bbbbbb</a></li>");}	
?>			

			</ul> 
		</nav><!-- end of top Nav --> 

	