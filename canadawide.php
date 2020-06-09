<!--
	PHP Document for HappySlaks.com of Janos Varga
	Canada Wide Gallery page
	Developed by: V.Hohin
	Script Date: April 24, 2016
	Last modification: April 24, 2016
-->

<?php include ("blocks/db.php");
$result = mysqli_query($db, "SELECT titlePage, metaDescription, header_1, imageLocation FROM settings WHERE pageName='canadawide'") or die("SQL error: ".mysql_error());
$myrow = mysqli_fetch_array($result);
$header_1 = $myrow["header_1"];	//name of gallery on gallery pages
$galleryName = "canada";	//for side navigation on gallery pages
$pageName='canadawide';		//for top navigation
$imageLocation = $myrow["imageLocation"]; // to find images (for navigation)
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include("blocks/head.php"); ?>
    </head>
    <body>
        <?php include("blocks/header.php"); ?>
        <div id="pagecontainer" class="col-lg-9 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12">
            <?php include("blocks/contentgallery.php"); ?>
        </div>
        <?php include("blocks/footer.php"); ?>
    </body>
</html>
