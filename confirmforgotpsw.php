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
	if (isset($_POST['email'])) {$email = $_POST['email'];if ($email == '') {unset($email);}}     
	if (empty($email)){exit ("Error input email");}
		$email = stripslashes($email);
		$email = htmlspecialchars($email);
		$email = trim($email);
	$result = mysqli_query($db, "SELECT * FROM familylist WHERE email='$email'");
	$myrow = mysqli_fetch_array($result);
	if (empty($myrow['name']) or empty($myrow['psw'])){
		$name="";
		$psw="";
		$result=0;
		$message="You are not registered";
	} else {
		$name=$myrow['name'];
		$psw=$myrow['psw'];
		$result=1;
		if (mail($email, "Password confirmation", "Your login: "+$name+"\nYour password: "+$psw,"From: janosvarga@gmail.com \r\n")) {
				$message="An email has been sent";
			} else {
				$message="We were unable to send an email";
			} 
	}
$pageName = "confirmforgotpsw";	//for top and  footer navigation (do not show navigation to self-page) 
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
            <?php	
                if ($result==1) {
                        print("<p>");echo $message; print("</p>");
                    } else {
                        print("<p>");echo $message; print("</p>");		
                    }	
            ?>
            </div>
        </div>
        <?php include("blocks/footer.php"); ?> 
    </body>
</html>
