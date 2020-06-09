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
		</nav><!-- end of footer Nav --> 

	<!-- Start of footer Uncopyright -->
<!--		<div id="uncopyright">
			<p>Copyright &copy; 2016  
			<strong><a href="mailto:vhohin@gmail.com"> VHohin </a></strong>
			All Rights Reserved.
			</p>
		</div>--><!--  end of footer Uncopyright  -->
		
	</footer><!-- end of Footer  -->  