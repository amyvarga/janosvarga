<?php

	session_start();
	
	// username and password sent from signup form
	$username=$_POST['username'];
	$password=$_POST['password'];

	// check valid according to file
    $fileName = "info.txt";
    $file = fopen($fileName, 'r');

    $found = false;

    // Read line
    while (!feof($file)) {
       // Read next line
       $line = fgets($file);
       if ( strlen($line) == 0 ) {
	   	  break;
       }

       $n = '=';
		$index = strpos( $line, $n );
		if ( $index == false ) {
			$found = false;
		} else {
			// get name and pw
			$name = substr($line, 0, $index);
			$s = '*';
			$next= strpos( $line, $s );
			$length = $next - $index - 1 ;
			$start = $index + 1;
			$pw = substr($line, $start, $length);
		 
		    //echo 'NAME: ' . $name . '<br>';
		    //echo 'PW: ' . $pw . '<br>';
		    //echo 'USERNAME: ' . $username . '<br>';
		    //echo 'password: ' . $password . '<br>';
		    
			if ( $name == $username && $pw == $password ) {
                $found = true;
                break;
                }
		}
    }

    fclose($file);

	// If result matched username and password, table row must be 1 row
	if( $found==true ) {
		// Register user and redirect to view details page
		$_SESSION['username']= "username"; 
		$_SESSION['password']= "password"; 
		header("location:viewdetails.php");
	}
	else {
		header("location:login.php?error");
	}
?>

