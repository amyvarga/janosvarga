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
$result = mysqli_query($db, "SELECT titlePage,metaDescription,header_1 FROM settings WHERE pageName='family'") or die("SQL error: ".mysql_error());
$myrow = mysqli_fetch_array($result);
$pageName = "family";	//for top and  footer navigation (do not show navigation to self-page) 
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <?php include("blocks/head.php"); ?> 	
</head>
<body>
	<?php include("blocks/header.php"); ?> 	
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
	<?php include("blocks/footer.php"); ?> 
    <script src="js/form_validation.js"></script>
    <script>    
        $(function() {
            FormValidation(Array('name', 'psw'));
        });
    </script>
</body>
</html>
