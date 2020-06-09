<html>

<head>
	<meta content="Site developed by EyesWideWeb"></meta>
	<!-- TODO: Set the page title -->
	<title>Kazzabean - Login</title>
	<LINK REL=stylesheet HREF="style/Master.css">
</head>

<body>

<form name="myform" method="post" action="checklogin.php">

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

    <!-- page content -->
    <tr><td>
        <table class="content" cellpadding="0" cellspacing="0"><tr><td>
			<table class="cb1a" cellpadding="0" cellspacing="0">

				<?php
					  if ( isset( $_GET[error] ) ) {
				   		echo '<tr><td colspan="2" class="heading">Invalid username or password.  Please try again.</td></tr>';
		   				echo '<tr><td>&nbsp;</td></tr>';
					  }
				?>
				<tr>
					<td width="30%" align="right" class="content">Username&nbsp;&nbsp;</td>
					<td width="70%" class="content"><input name="username" type="text" id="username" maxlength="20" value=""></td>
				</tr>
				<tr>
					<td width="30%" align="right" class="content">Password&nbsp;&nbsp;</td>
					<td width="70%" class="content"><input name="password" type="password" id="password" maxlength="20" value=""></td>
				</tr>
		   		<tr><td>&nbsp;</td></tr>
				<tr>
					<td class="content"&nbsp;</td>
					<td class="content"><input type="submit" name="Login" value="[ Login ]"></td>
				</tr>
          	</table>
		</td></tr></table>
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

