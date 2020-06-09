<?php
	// Check if session is not registered , redirect back to login page.
    session_start();
	if(!isset($_SESSION['username'])) {
		header("location:login.php");
	}
?>


<?php
	 function getLastNameValueNum() {
	 	return 1;
	 }
?>

<html>

<head>
	<meta content="Site developed by EyesWideWeb"></meta>
	<!-- TODO: Set the page title -->
	<title>Kazzabean - Edit Details</title>
	<LINK REL=stylesheet HREF="style/Master.css">
	
	<script type="text/javascript">
	
	function setSubmitDetails( myaction, sectionNum, nameValueNum, title, name, value ) {
		//alert("setNumbers: " + sectionNum + " & " + nameValueNum );
		document.myform.myaction.value = myaction;
		document.myform.sectionNum.value = sectionNum;
		document.myform.nameValueNum.value = nameValueNum;
		document.myform.title.value = title;
		document.myform.name.value = name;
		document.myform.value.value = value;
		return true;
	}
	
	function confirmSubmit() {
		action = document.myform.myaction.value;
		//alert( "action: " + action );

		if ( action == "deleteTitle" ) {
			response = confirm( "Are you sure you want to delete the title?  All name/value pairs under this title will be deleted." );
			if ( response == true ) {
				document.myform.action = "new.php";
				document.myform.submit();
				return true;
			} else {
				return false;
		    }
		} else if ( action == "deleteNameValue" ) {
			response = confirm( "Are you sure you want to delete the name/value pair?  Both name and value will be deleted.\n\nNOTE: If this is the only name/value pair in the section then the section will be deleted." );
			if ( response == true ) {
				document.myform.action = "new.php";
				document.myform.submit();
				return true;
			} else {
				return false;
		    }
		}

		return true;
	}
	</script>

</head>

<body>

<form name="myform" action="inputdetail.php" method="post" onSubmit="return confirmSubmit();">

<!-- Main page table -->
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
        
        <!-- Switch to view details -->
        <tr>
          <td align="left" width="50%">
        		<a href="viewdetails.php">Switch to View Details</a>
          </td>
          <td align="right" width="50%">
        		<a href="logout.php">Log Out</a>
          </td>
        </tr>
        <tr><td>&nbsp;</td></tr>

        <input type="hidden" name="myaction" value="">
        <input type="hidden" name="sectionNum" value="">
        <input type="hidden" name="nameValueNum" value="">
        <input type="hidden" name="title" value="">
        <input type="hidden" name="name" value="">
        <input type="hidden" name="value" value="">

        <!-- Add new section -->
        <tr><td colspan="2">
        <table class="cb1a" cellpadding="0" cellspacing="0">
	        <tr><td><input name="action" type="submit" id="action" value="[ New Section ]" onclick="setSubmitDetails('newSection', '', '', '', '', '')"></td></tr>
        </table>
        </tr></td>
        
        <tr><td>&nbsp;</td></tr>

		<!-- Display existing sections -->
		<?php
            $fileName = "details.txt";
            $file = fopen($fileName, 'r');

            // Read number and title
            $line = fgets($file);
            $tmpCurrSectionNum = substr($line, 7, 2);
            $currSectionNum = (int)$tmpCurrSectionNum;
            $length = (strlen( $line ) - 1) - 16;
            $title = substr($line,16, $length);
            echo '<tr><td colspan="2">';
            echo '<table class="cb1a" cellpadding="0" cellspacing="0">';
            echo '<tr>';
            echo '<td class="heading" colspan="2">' . $title . '</td>';
            ?>
            <td class="content" width="10%"><input name="action" type="submit" id="action" value="[ Edit ]" onclick="setSubmitDetails('editTitle', '<?php echo $currSectionNum; ?>', '', '<?php echo $title; ?>', '', '')"></td>
            <td class="content" width="10%"><input name="action" type="submit" id="action" value="[ Delete ]" onclick="setSubmitDetails('deleteTitle', '<?php echo $currSectionNum; ?>', '', '<?php echo $title; ?>', '', '')"></td>
            <?php
            echo '</tr>';

            while (!feof($file)) {
               // Read next line
               $line = fgets($file);
               if ( strlen($line) == 0 ) {
			   	  continue;
   	           }

                // Read next number
                $tmpNextSectionNum = substr($line, 7, 2);
                $nextSectionNum = (int)$tmpNextSectionNum;
                if ( $currSectionNum == $nextSectionNum ) {
                    // Read name and value and number
                    $tmpNameValueNum = substr($line, 14, 2);
                    $nameValueNum = (int)$tmpNameValueNum;
            		$length = (strlen( $line ) - 1) - 17;
                    $name = substr($line, 17, $length);
                    $line = fgets($file);
                    if ( strlen($line) == 0 ) {
						continue;
              		}

            		$length = (strlen( $line ) - 1) - 18;
                    $value = substr($line, 18, $length);
                    echo '<tr>';
                    echo '<td class="content" width="30%" colspan=1>' . $name . '</td>';
                    echo '<td class="content" width="50%" colspan=1>' . $value . '</td>';
                    ?>
                    <td class="content" width="10%"><input name="action" type="submit" id="action" value="[ Edit ]" onclick="setSubmitDetails('editNameValue', '<?php echo $currSectionNum; ?>', '<?php echo $nameValueNum; ?>', '<?php echo $title; ?>', '<?php echo $name; ?>', '<?php echo $value; ?>')"></td>
                    <td class="content" width="10%"><input name="action" type="submit" id="action" value="[ Delete ]" onclick="setSubmitDetails('deleteNameValue', '<?php echo $currSectionNum; ?>', '<?php echo $nameValueNum; ?>', '<?php echo $title; ?>', '<?php echo $name; ?>', '<?php echo $value; ?>')"></td>
                    <?php
                    echo '</tr>';
                } else {
                    // Add new name/value pair for previous section
                    ?><tr><td colspan=2><input name="action" type="submit" id="action" value="[ New Name/Value ]" onclick="setSubmitDetails('newNameValue', '<?php echo $currSectionNum; ?>', '<?php echo $nameValueNum; ?>', '<?php echo $title; ?>', '', '')"></td></tr><?php

                    // Read title
                    $currSectionNum = $nextSectionNum;
            		$length = (strlen( $line ) - 1) - 16;
                    $title = substr($line, 16, $length);
                    echo '</table></td></tr>';
                    echo '<tr><td>&nbsp;</td></tr>';
                    echo '<tr><td colspan="2">';
                    echo '<table class="cb1a" cellpadding="0" cellspacing="0">';
		            echo '<td class="heading" colspan="2">' . $title . '</td>';
		            ?>
		            <td class="content" width="10%"><input name="action" type="submit" id="action" value="[ Edit ]" onclick="setSubmitDetails('editTitle', '<?php echo $currSectionNum; ?>', '', '<?php echo $title; ?>', '', '')"></td>
		            <td class="content" width="10%"><input name="action" type="submit" id="action" value="[ Delete ]" onclick="setSubmitDetails('deleteTitle', '<?php echo $currSectionNum; ?>', '', '<?php echo $title; ?>', '', '')"></td>
		            <?php
		            echo '</tr>';
                }
            }
            // Add new name/value pair for previous section
            ?><tr><td colspan=2><input name="action" type="submit" id="action" value="[ New Name/Value ]" onclick="setSubmitDetails('newNameValue', '<?php echo $currSectionNum; ?>', '<?php echo $nameValueNum; ?>', '<?php echo $title; ?>', '', '')"></td></tr><?php
            echo '</table></td></tr>';
            echo '<tr><td>&nbsp;</td></tr>';
            fclose($file);
        ?>
        <input type="hidden" name="sectionNumMax" value="<?php echo $currSectionNum; ?>">
        </td></tr>
        
        <!-- Switch to view details -->
        <tr><td>&nbsp;</td></tr>
        <tr>
          <td align="left" width="50%">
        		<a href="viewdetails.php">Switch to View Details</a>
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

</form>

</body>

</html>

