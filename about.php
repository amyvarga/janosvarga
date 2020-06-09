<!--
	PHP Document for HappySlaks.com of Janos Varga
	family.php page to get access to Family page
	Developed by: V.Hohin 
	Script Date: May 01, 2016 
	Last modification: May 01, 2016	
-->

<?php include ("blocks/db.php");
$result = mysqli_query($db, "SELECT titlePage,metaDescription,header_1,text_1,header_2,text_2,header_3,text_3 FROM settings WHERE pageName='about'") or die("SQL error: ".mysql_error());
$myrow = mysqli_fetch_array($result);
$pageName = "about";	//for top and  footer navigation (do not show navigation to self-page) 
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
                <h2><?php echo $myrow["header_1"];?></h2>
                <p><?php echo $myrow["text_1"];?></p>
                <h2><?php echo $myrow["header_2"];?></h2>
                <p><?php echo $myrow["text_2"];?></p>
                <h2><?php echo $myrow["header_3"];?></h2>
                <p><?php echo $myrow["text_3"];?></p>
            </div>
        </div>
        <?php include("blocks/footer.php"); ?> 
    </body>
</html>
