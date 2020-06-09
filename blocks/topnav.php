<!--
	PHP Document for HappySlaks.com of Janos Varga
	topnav.php - top navigation of all pages
	Developed by: V.Hohin 
	Script Date: April 24, 2016 
	Last modification: May 01, 2016	
-->

<nav class="no-gutter col-lg-9 col-md-8 navbar navbar-default col-sm-12 col-xs-12 topnav">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <?php $arrGalleries = ['heritage', 'penink', 'montreal', 'worldwide', 'figure', 'toronto', 'canada']; ?>
                <li class="<?php $pageName == 'index' ? print('active') : '' ?>"><a href="index.php">Home</a></li>
                <li class="<?php in_array($pageName,$arrGalleries) ? print('active') : '' ?> dropdown"><a id="dlabel" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                    <ul class="dropdown-menu" aria-labelledby="dLabel">
                        <li class="<?php $pageName == 'heritage' ? print('active') : '' ?>"><a href="bbhs.php">Heritage Homes</a></li>
                        <li class="<?php $pageName == 'penink' ? print('active') : '' ?>"><a href="penink.php">Pen &amp; Ink</a></li>
                        <li class="<?php $pageName == 'montreal' ? print('active') : '' ?>"><a href="montreal.php">Montreal</a></li>
                        <li class="<?php $pageName == 'worldwide' ? print('active') : '' ?>"><a href="worldwide.php">Around the world</a></li>
                        <li class="<?php $pageName == 'figure' ? print('active') : '' ?>"><a href="figure.php">Figure &amp; Still Life</a></li>
                        <li class="<?php $pageName == 'toronto' ? print('active') : '' ?>"><a href="toronto.php">Toronto</a></li>
                        <li class="<?php $pageName == 'canada' ? print('active') : '' ?>"><a href="canadawide.php">Canada Wide</a>
                    </ul>
                </li>
                <li class="<?php $pageName == 'family' ? print('active') : '' ?>"><a href="family.php">Family</a></li>
                <li><a href="http://janosvarga.blogspot.com/" target="_blank">Wellness blog</a></li>
                <li><a href="http://janos.calloftheforest.com/" target="_blank">Voiceover</a></li>
                <li><a href="https://www.flickr.com/photos/janosvarga/albums" target="_blank">Photos</a></li>
                <li class="<?php $pageName == 'about' ? print('active') : '' ?>"><a class="<?php echo($pageName); ?>" href="about.php">About me</a></li>
            </ul> 
            <p>Email me at <a href="mailto:janosvarga@gmail.com">janosvarga@gmail.com</a> or call  me on <a href="tel:+1 438 322 5552">+1 438 322 5552</a><p>
        </div>
    </div>
</nav><!-- end of top Nav --> 
