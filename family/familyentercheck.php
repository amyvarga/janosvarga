<!--
	PHP Document for HappySlaks.com of Janos Varga	
	Developed by: V.Hohin 
	Script Date: June 19, 2016 
	Last modification: June 30, 2016	
-->

<?php
session_start();
include ("../blocks/db.php");	
if (isset($_SESSION['name'])) { $sessionName = $_SESSION['name']; if ($sessionName == '') { unset($sessionName);} } 
if (isset($_SESSION['psw'])) { $sessionPsw=$_SESSION['psw']; if ($sessionPsw =='') { unset($sessionPsw);} }

if (empty($sessionName) or empty($sessionPsw)){
	
	if (isset($_POST['name'])) { $login = $_POST['name']; if ($login == '') { unset($login);} } 
	if (isset($_POST['psw'])) { $password=$_POST['psw']; if ($password =='') { unset($password);} }
		
	if (empty($login) or empty($password)) 
		{
		/*header("Location:../family.php");*/
		echo ('<script> window.location="../family.php"; </script> ');
		exit ("Your information is not good");
		}
		
		$login = stripslashes($login);
		$login = htmlspecialchars($login);
		$password = stripslashes($password);
		$password = htmlspecialchars($password);
	
		$login = trim($login);
		$password = trim($password);
	
	//include ("../blocks/db.php");	 
	$result = mysql_query("SELECT psw FROM familylist WHERE name='$login'",$db);
	$myrow = mysql_fetch_array($result);
		if (empty($myrow['psw'])){
		/*header("Location:../family.php");*/
		echo ('<script> window.location="../family.php"; </script> ');
		exit ("You login is not good");
		}
		else {
	
		if ($myrow['psw']==$password) {
		
		//$_SESSION['name']=$myrow['name']; 
		$_SESSION["name"] = $login;
		$_SESSION["psw"] = $password;
		/*$_SESSION['id']=$myrow['id'];*/// vaxzxno
		//echo "Good enter! Session name is  ".session_name();//;print_r($_SESSION['name']);
			/*header("Location:index.php");*/
			echo ('<script> window.location="index.php"; </script> ');
			exit();
		
		}
	 else {
		//если пароли не сошлись
		
		//echo ("Login or password is bad.");
		/*header("Location:../family.php");*/
		echo ('<script> window.location="../family.php"; </script> ');
		//echo "<a href='../family.php'>Forgot password ?</a>";
		exit();
		}
		}
} else {
		 
	$result = mysql_query("SELECT psw FROM familylist WHERE name='$sessionName'",$db);
	$myrow = mysql_fetch_array($result);
	if (empty($myrow['psw']) or ($myrow['psw']!=$sessionPsw)){
		/*header("Location:../family.php");*/
		echo ('<script> window.location="../family.php"; </script> ');
		//echo "session not OK ".$sessionPsw.$myrow['psw'];
		exit();
	} else {
		//header("Location: http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']);
		//echo "session OK ".$sessionPsw." name ".$sessionName;
		return;
		exit();
		
	}
}
?>