<?php
	// Check if session is not registered , redirect back to login page.
    session_start();
	if(!isset($_SESSION['username'])) {
		header("location:login.php");
	}
?>


<?php
    // ACTION: newSection, editTitle, deleteTitle, editNameValue, deleteNameValue, newNameValue

    $title = $_POST['title'];
    $name = $_POST['name'];
    $value = $_POST['value'];
    $sectionNum = $_POST['sectionNum'];
    $nameValueNum = $_POST['nameValueNum'];
    $myaction = $_POST['myaction'];
    $sectionNumMax = $_POST['sectionNumMax'];

	//echo '<br>sectionNum: ' . $sectionNum;
    //echo '<br>nameValueNum: ' . $nameValueNum;
    //echo '<br>title: ' . $title;
    //echo '<br>name: ' . $name;
    //echo '<br>value: ' . $value;
    //echo '<br>myaction: ' . $myaction;

	 $e1 = 'N';
	 $e2 = 'N';
	 $e3 = 'N';
?>


<html>

<head>
	<meta content="Site developed by EyesWideWeb"></meta>
	<!-- TODO: Set the page title -->
	<title>SupaDry - Input Detail</title>
	<LINK REL=stylesheet HREF="style/Master.css">
	
	<script>
	function checkForm() {
		if ( document.myform.saveOrCancel.value == "cancel" ) {
			return true;
		}

		if (document.myform.title.value=="") {
			alert( "The title cannot be blank." );
			return false;
		}

		var myaction = document.myform.myaction.value;
	 	if ( myaction == "newSection" || myaction == "editNameValue" || myaction == "newNameValue" ) {
			if (document.myform.name.value=="") {
				alert( "The name cannot be blank." );
				return false;
			}
		}

	 	if ( myaction == "newSection" || myaction == "editNameValue" || myaction == "newNameValue" ) {
	        if (document.myform.value.value=="") {
				alert( "The value cannot be blank." );
				return false;
			}
		}

		return true;
	}
	
	function setSaveOrCancel( value ) {
		document.myform.saveOrCancel.value = value;
	}

	</script>

</head>

<body onLoad="document.myform.title.focus()">


<form name="myform" action="new.php" method="post" onSubmit="return checkForm();" >

<!-- Main page table -->
<table class="main" align="center" cellspacing="0" cellpadding="0">

	<!-- BANNER -->
	<tr><td>
		<table width="100%" cellpadding="0" cellspacing="0"><tr>
			<!-- TODO -->
            <td width="100%">
			<img class="banner" width="800" height="200" name="home" src="images/supadry.gif"/>
			</td>
		</tr></table>
	</td></tr>

    <!-- page content -->
    <tr><td>
        <table class="content" cellpadding="0" cellspacing="0"><tr><td>
			<table class="cb1a" cellpadding="0" cellspacing="0">

            	<!-- Section -->
				<input type="hidden" name="sectionNum" value="<?php echo $sectionNum; ?>">
				<input type="hidden" name="sectionNumMax" value="<?php echo $sectionNumMax; ?>">
				<input type="hidden" name="nameValueNum" value="<?php echo $nameValueNum; ?>">
				<input type="hidden" name="myaction" value="<?php echo $myaction; ?>">
				<input type="hidden" name="saveOrCancel" value="">

           		<!-- Errors -->
				<?php
					 $displayedError = 'N';
					 if ( $e1 == 'Y' ) {
				 	 	echo '<tr><td class="content" colspan=2>The <b>title</b> cannot be blank.</td></tr>';
				 	 	$displayedError = 'Y';
					 }
					 if ( $e2 == 'Y' ) {
				 	 	echo '<tr><td class="content" colspan=2>The <b>name</b> cannot be blank.</td></tr>';
				 	 	$displayedError = 'Y';
					 }
					 if ( $e3 == 'Y' ) {
				 	 	echo '<tr><td class="content" colspan=2>The <b>value</b> cannot be blank.</td></tr>';
				 	 	$displayedError = 'Y';
					 }
					 if ( $displayedError == 'Y' ) {
					 	echo '<tr><td>&nbsp;</td></tr>';
					 }
				?>

				<!-- Title -->
				<tr>
                	<td class="content">Title</td>
			            <?php
			                if ( ( $myaction == 'newSection' ) || ( $myaction == 'editTitle' ) ) {
			                    // Editable title value
			                    echo '<td class="content"><input type="text" name="title" value="' . $title . '" size="100" tabindex=1></td>';
			                } else {
			                    // Non-editable title value
			                    echo '<td class="heading">' . $title;
			                    echo '<input type="hidden" name="title" value="' . $title . '" tabindex=1></td>';
			                }
			            ?>
               	</tr>

				<tr><td>&nbsp;</td></tr>

           		<!-- Name -->
            	<tr>
                	<td class="content">Name</td>
                	<td class="content">
		                <?php
		                    if ( $myaction == 'editTitle' ) {
		                        // Non-editable name
		                        echo '<input type="text" name="myname" value="' . $name . '" size="100" readonly tabindex=2>';
		                        echo '<input type="hidden" name="name" value="' . $name . '">';
		                    } else {
		                        // Editable name
		                        echo '<input type="text" name="name" value="' . $name . '" size="100" tabindex=2>';
		                    }
		                ?>
					</td>
               	</tr>

				<tr><td>&nbsp;</td></tr>

           		<!-- Value -->
            	<tr>
                	<td class="content">Value</td>
                	<td class="content">
		                <?php
		                    if ( $myaction == 'editTitle' ) {
		                        // Non-editable value
		                        echo '<input type="text" name="myvalue" value="' . $value . '" size="100" readonly tabindex=3>';
		                        echo '<input type="hidden" name="value" value="' . $value . '">';
		                    } else {
		                        // Editable value
		                        echo '<input type="text" name="value" value="' . $value . '" size="100" tabindex=3>';
		                    }
		                ?>
					</td>
               	</tr>

           		<!-- Separator -->
               	<tr><td>&nbsp;</td></tr>

           		<!-- Buttons -->
               	<tr><td colspan=2>
						<input name="save" type="submit" id="save" value="[ Save ]" onclick="setSaveOrCancel( 'save' );">
						<input name="cancel" type="submit" id="cancel" value="[ Cancel ]" onclick="setSaveOrCancel( 'cancel' );">
				</td></tr>

          	</table>
		</td></tr></table>
    </td></tr>
    
	<!-- BOTTOM IMAGE -->
	<tr><td>
		<table width="100%" cellpadding="0" cellspacing="0"><tr>
            <td width="100%">
				<img class="banner" width="800" height="35" name="bottom" src="images/bottom-image.gif"/>
			</td>
		</tr></table>
	</td></tr>

</table>

</form>

</body>

</html>