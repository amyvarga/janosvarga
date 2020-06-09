<!--
	PHP Document for HappySlaks.com of Janos Varga 
	footer.php - Footer of all pages
	Developed by: V.Hohin 
	Script Date: April 24, 2016 
	Last modification: May 01, 2016	
-->

<!-- Start of Footer  -->
	<footer>
	
	<!-- Start of footer Nav -->
		<nav>
			<ul>			   
<?php
	if ($pageName == "index") { print("<li><a href='index.php' class='checked'>Gallery</a></li>");}
	else { print("<li><a href='index.php'>Gallery</a></li>");}
	if ($pageName == "family") { print("<li><a href='family.php' class='checked'>Family</a></li>");}
	else { print("<li><a href='family.php'>Family</a></li>");}
?>				<li><a href="http://janosvarga.blogspot.com/" target="_blank">Wellness</a></li>
				<li><a href="http://vargajanos.blogspot.ca/" target="_blank">Travel</a></li>
				<li><a href="https://www.flickr.com/gp/janosvarga/wKw849" target="_blank">Photos</a></li>
<?php
	if ($pageName == "about") { print("<li><a href='about.php' class='checked'>About</a></li>");}
	else { print("<li><a href='about.php'>About</a></li>");}
	if ($pageName == "contact") { print("<li><a href='contact.php' class='checked'>Contact</a></li>");}
	else { print("<li><a href='contact.php'>Contact</a></li>");}	
?>
			</ul> 
		</nav><!-- end of footer Nav --> 

	<!-- Start of footer Uncopyright -->
		<div id="uncopyright">
			<p>Copyright &copy; 2016 J.Varga. Designed by   
			<strong><a href="mailto:vhohin@gmail.com"> VHohin. </a></strong>			
			</p>
		</div><!--  end of footer Uncopyright  -->
		
	</footer><!-- end of Footer  -->  