<?php
	// Check if session is not registered , redirect back to login page.
    session_start();
	if(!isset($_SESSION['username'])) {
		header("location:login.php");
	}
?>


<html>

<head>
	<meta content="Site developed by EyesWideWeb"></meta>
	<!-- TODO: Set the page title -->
	<title>Kazzabean - View Details</title>
	<LINK REL=stylesheet HREF="style/Master.css">
</head>

<body>

<!-- Main page table -->
<table class="main" align="center" cellspacing="0" cellpadding="0">

	<!-- BANNER -->
	<!--
	<tr><td>
		<table width="100%" cellpadding="0" cellspacing="0"><tr>
            <td width="100%">
			<img class="banner" width="800" height="200" name="home" src="images/supadry.gif"/>
			</td>
		</tr></table>
	</td></tr>
	-->

    <tr><td>
        <!-- page content -->
        <table class="content" cellpadding="0" cellspacing="0">
        
        <!-- Switch to edit details -->
        <tr>
          <td align="left" width="50%">
        		<a href="editdetails.php">Switch to Edit Details</a>
          </td>
          <td align="right" width="50%">
        		<a href="logout.php">Log Out</a>
          </td>
        </tr>
        <tr><td>&nbsp;</td></tr>

        <?php
            $fileName = "details.txt";
            $file = fopen($fileName, 'r');

            // Read number and title
            $line = fgets($file);
            if ( strlen($line) == 0 ) {
				continue;
			}

            $tmpCurrNum = substr($line, 7, 2);
            $currNum = (int)$tmpCurrNum;
            $title = substr($line,16);
            echo '<tr><td colspan="2">';
            echo '<table class="cb1a" cellpadding="0" cellspacing="0">';
            echo '<tr><td class="heading" colspan="2">' . $title . '</td></tr>';

            while (!feof($file)) {
               // Read next line
               $line = fgets($file);
               if ( strlen($line) == 0 ) {
			   	  continue;
	           }

                // Read next number
                $tmpNextNum = substr($line, 7, 2);
                $nextNum = (int)$tmpNextNum;
                if ( $currNum == $nextNum ) {
                    // Read name and value
                    $name = substr($line, 17);
                    $line = fgets($file);
                    $value = substr($line, 18);
                    echo '<tr>';
                    echo '<td class="content" width="30%" colspan=1>' . $name . '</td>';
                    echo '<td class="content" width="70%" colspan=1>' . $value . '</td>';
                    echo '</tr>';
                } else {
                    // Read title
                    $currNum = $nextNum;
                    $title = substr($line, 16);
                    echo '</table></td></tr>';
                    echo '<tr><td>&nbsp;</td></tr>';
                    echo '<tr><td colspan="2">';
                    echo '<table class="cb1a" cellpadding="0" cellspacing="0">';
                    echo '<tr><td class="heading" width="100%" colspan=2>' . $title . '</td></tr>';
                }
            }
            echo '</table></td></tr>';
           	echo '<tr><td>&nbsp;</td></tr>';

            fclose($file);
        ?>
        </td></tr>
        
      <!-- Switch to edit details -->
      <tr><td>&nbsp;</td></tr>
      <tr>
        <td align="left" width="50%">
      		<a href="editdetails.php">Switch to Edit Details</a>
        </td>
        <td align="right" width="50%">
      		<a href="logout.php">Log Out</a>
        </td>
      </tr>

        </table>
    </td></tr>
    

	<!-- BOTTOM IMAGE -->
	<!--
	<tr><td>
		<table width="100%" cellpadding="0" cellspacing="0"><tr>
            <td width="100%">
				<img class="banner" width="800" height="35" name="bottom" src="images/bottom-image.gif"/>
			</td>
		</tr></table>
	</td></tr>
	-->

</table>


</body>

</html>