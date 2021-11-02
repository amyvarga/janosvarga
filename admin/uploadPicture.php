<!--
	PHP Document for HappySlaks.com of Janos Varga
	Developed by: V.Hohin 
	Script Date: July 15, 2016 
	Last modification: July 16, 2016	
-->
<!DOCTYPE html>

<html lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

	<link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
	<link rel="icon" href="favicon.ico" type="image/x-icon">
  
  <title>Admin | Picture</title>
  <!-- Meta Description for Search Engine Results -->
	
  <!-- Custom CSS -->
  <link rel="stylesheet" type="text/css" href="../css/main-admin.css">
    
  <!--  Modernizr allows HTML5 elements to work in older browsers: https://modernizr.com/-->
  <script src="../js/modernizr.js"></script>
  <script type="text/javascript" src="../js/jquery-2.2.3.min.js"></script>
</head>

<body>
<!-- Start of pageHeader --> 
	<?php include("blocks/adminHeader.php"); ?> 	

<!-- Start of pageContainrt --> 	
	<div id="pagecontainer">	

	<!-- Start of Top navigation -->
		<?php /*?><?php include("blocks/adminTopnav.php"); ?><?php */?>
		
	<!-- Start of Welcome Text --> 		
		<div id="welcomtext">
			<h1>Add New Picture To Gallery </h1>
		</div><!-- end of Welcome Text -->
				<!--	<legend align="left">Enter</legend> -->					
					
	<div id="editSection">
    
<?php

$target_dir = "../gallery/";
if (isset($_POST['galleryName'])) {$galleryName = $_POST['galleryName']; if ($galleryName == '') {unset($galleryName);}}
if (isset($_POST['pictureSize'])) {$pictureSize = $_POST['pictureSize']; if ($pictureSize == '') {unset($pictureSize);}}
if ($galleryName == ''){
	$resultText="No Gallery Selected";
	echo "No Gallery Selected";
} else {
	switch ($galleryName) {
    case "heritage":
        $folderName ='bbhs/';
        break;
    case "canada":
        $folderName ='canada_wide/';
        break;
    case "penink":
        $folderName ='pen_ink/';
        break;
	case "montreal":
        $folderName ='montreal/';
        break;
	case "worldwide":
        $folderName ='world_wide/';
        break;
	case "toronto":
        $folderName ='toronto/';
        break;
	case "figure":
        $folderName ='figure/';
        break;
    default:
        echo "Folder Picture problem!";
	}
}

if ($pictureSize=="thumbsSize"){
	$folderName=$folderName."thumbs/";
} else if ($pictureSize=="fullSize"){
	$folderName=$folderName."watercolour/";
} else {
	$resultText="No Size Picture Selected";
	echo "No Size Picture Selected";
}
//$target_dir = "uploads/";
$target_file = basename($_FILES["fileToUpload"]["name"]);
//$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
$target_dir = $target_dir.$folderName.basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

//echo "Target_dir: ".$target_dir." Target_file ".$target_dir." ImageFile type ".$imageFileType;

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if($check !== false) {
        $resultText="File is an image - " . $check["mime"] . ".";
		//echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        $resultText="File is not an image.";
		echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    $resultText="Sorry, file already exists.";
	echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
//echo "Your file is ".$_FILES["fileToUpload"]["size"];
if ($_FILES["fileToUpload"]["size"] > 500000) {
    $resultText="Sorry, your file is too large.";
	echo "Sorry, your file is too large.";
    $uploadOk = 0;
}
// Allow certain file formats
$imageFileType = strtolower($imageFileType);
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    $resultText="Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    $resultText="Sorry, your file was not uploaded.";
	echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
$target_dir = "/vagrant/janosvarga/gallery/bbhs/watercolour/".$_FILES["fileToUpload"]["name"];
echo "attempting to move uploaded file";
echo "file to move".$_FILES["fileToUpload"]["tmp_name"];
	echo "target dir".$target_dir;
	
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir)) {
        $resultText="The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
		
    } else {
        $resultText="Sorry, there was an error uploading your file.";
		echo "Sorry, there was an error uploading your file.";
    }
}
?>
		</div> <!-- end of editSection -->
  
	</div><!-- end of PageContainer -->
</body>

</html>

