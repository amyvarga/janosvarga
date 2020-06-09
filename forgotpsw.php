<!--
	PHP Document for HappySlaks.com of Janos Varga
	family.php page to get access to Family page
	Developed by: V.Hohin 
	Script Date: April 24, 2016 
	Last modification: July 30, 2016	
-->
<?php
    session_start();
?>

<?php include ("blocks/db.php");
$result = mysqli_query($db, "SELECT titlePage,metaDescription FROM settings WHERE pageName='family'") or die("SQL error: ".mysql_error());
$myrow = mysqli_fetch_array($result);
$pageName = "familyforgotpsw";	//for top and  footer navigation (do not show navigation to self-page) 
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
                <h2>Forgotten password</h2>
            </div>
            <div class="no-gutter col-lg-4 col-md-4 col-sm-4 col-xs-sm-6 col-xs-12">
			<form method="POST" action="confirmforgotpsw.php">
				<fieldset class="upper">
                    <div class="form-group has-feedback">  
                      <label for="email">Email</label>
                      <input type="text" name="email" id="email" class="form-control">
                      <span class="glyphicon glyphicon-ok form-control-feedback" aria-hidden="true"></span>
                      <span id="inputSuccess2Status" class="sr-only">(success)</span>
                      <span id="inputError2Status" class="sr-only">(error)</span>
                    </div>
                    <div class="form-group">
                      <button type="submit" id="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="form-group">
                        <a href="family.php">Return to log in</a>
                    </div>
                </fieldset> 
            </form> 
		</div>
        <?php include("blocks/footer.php"); ?> 
        <script src="js/form_validation.js"></script>
        <script>    
            $(function() {
                FormValidation(Array('email'));
            });
        </script>
    </body>
</html>
