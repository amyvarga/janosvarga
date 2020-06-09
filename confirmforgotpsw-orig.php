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
	$result = mysql_query("SELECT * FROM familylist WHERE email='$email'",$db);
	$myrow = mysql_fetch_array($result);
	if (empty($myrow['name']) or empty($myrow['psw'])){
		/*exit ("You are not registered");*/
		$name="";
		$psw="";
		$result=0;
		$message="You are not registred.";
	} else {
		$name=$myrow['name'];
		$psw=$myrow['psw'];
		$result=1;
		/*echo $email."  ".$name."  ".$psw;*/
		if (mail($email, "Password confirmation", "Your login: "+$name+"\nYour password: "+$psw,"From: janosvarga@gmail.com \r\n")) {
				/*echo "messege acepted for delivery";*/
				$message="Your information was sent to your email.";
			} else {
				/*echo "some error happen";*/
				$message="Some sending error happen.";
			} 
	}
$pageName = "confirmforgotpsw";	//for top and  footer navigation (do not show navigation to self-page) 
?>

<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <title>Family</title>
  <!-- Meta Description for Search Engine Results -->
  <meta name="description" content=""
	
  <!-- Custom CSS -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="css/main.css">
    
  <!--  Modernizr allows HTML5 elements to work in older browsers: https://modernizr.com/-->
 <!-- <script src="js/modernizr.js"></script>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>-->
 
</head>

<body>
 
<!-- Start of pageHeader --> 
	<?php include("blocks/header.php"); ?> 	

<!-- Start of pageContainrt --> 	
	<div id="pagecontainer">	

	<!-- Start of Top navigation -->
		<?php include("blocks/topnav.php"); ?>
		
	<!-- Start of Welcome Text --> 		
		<div id="welcomtext">
			<h1>Family page</h1>
		</div><!-- end of Welcome Text -->
		
		<div id="content_family">    
	<?php	
        /*echo "User ".$name." Password ".$psw;*/
        if ($result==1) {
                print("<h3>");echo $message; print("</h3>");
            } else {
                print("<h3  style='color:red' >");echo $message; print("</h3>");		
            }	
    ?>
        
		</div> <!-- end of content_family -->
  		<!--<div id="forgotpsw">
            <a href="family.php">Return to the Family page.</a>
        </div>-->    
	</div><!-- end of PageContainer -->
  
<!-- Start of Footer  -->
	<?php include("blocks/footer.php"); ?> 

</body>

</html>