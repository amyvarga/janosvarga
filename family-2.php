<!--
	PHP Document for HappySlaks.com of Janos Varga
	family.php page to get access to Family page
	Developed by: V.Hohin 
	Script Date: April 24, 2016 
	Last modification: July 29, 2016	
-->

<?php 
session_start();
session_destroy(); 
include ("blocks/db.php");
$result = mysql_query("SELECT titlePage,metaDescription,header_1 FROM settings WHERE pageName='family'",$db) or die("SQL error: ".mysql_error());
$myrow = mysql_fetch_array($result);
$pageName = "family";	//for top and  footer navigation (do not show navigation to self-page) 
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <title><?php echo $myrow["titlePage"];?></title>
  <meta name="description" content="<?php echo $myrow["metaDescription"];?>"
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main-2.css">
  <link rel="stylesheet" type="text/css" href="css/libraries/slick.css">
  <link rel="stylesheet" type="text/css" href="css/libraries/slick-theme.css">
</head>
<body>
	<?php include("blocks/header-2.php"); ?> 	
	<div id="pagecontainer" class="col-lg-9 col-lg-offset-3 col-md-12 col-sm-12 col-xs-12">
        <div id="welcomtext">
            <h2><?php echo $myrow["header_1"];?></h2>
        </div>
        <div class="no-gutter col-lg-4 col-md-4 col-sm-4 col-xs-sm-6 col-xs-12">
            <form method="POST" action="family/familyentercheck.php">
                <fieldset class="upper">
                    <div class="form-group has-feedback">  
                      <label for="name">Name</label>
                      <input type="text" name="name" id="name" maxlength="10" class="form-control">
                      <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                      <span id="inputError2Status" class="sr-only">(error)</span>
                    </div>
                    
                    <div  class="form-group has-feedback">
                      <label for="psw">Password</label>
                      <input type="password" name="psw" id="psw" maxlength="10" class="form-control">
                      <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                      <span id="inputError2Status" class="sr-only">(error)</span>
                    </div>
                    
                    <div class="form-group">
                      <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                    </div>
                </fieldset> 
            </form> 
            <div class="form-group" id="forgotpsw">
                <a href="forgotpsw.php">Forgot password?</a>
            </div>    
        </div>    
	</div>
	<?php include("blocks/footer-2.php"); ?> 
</body>
<script src="js/form_validation.js"></script>
</html>
