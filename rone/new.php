<?php
    // ACTION: newSection, editTitle, deleteTitle, editNameValue, deleteNameValue, newNameValue

	// FORM VALIDATION
	$cancel = $_POST['cancel'];
	$save = $_POST['save'];

    $title = $_POST['title'];
    $name = $_POST['name'];
    $value = $_POST['value'];
    $sectionNum = $_POST['sectionNum'];
    $nameValueNum = $_POST['nameValueNum'];
    $action = $_POST['myaction'];
    $sectionNumMax = $_POST['sectionNumMax'];

	$s = 'SECTION';
	$t = 'TITLE';
    $n = 'NAME';
    $v = 'VALUE';

	//echo '<br>sectionNum: ' . $sectionNum;
    //echo '<br>nameValueNum: ' . $nameValueNum;
    //echo '<br>title: ' . $title;
    //echo '<br>name: ' . $name;
    //echo '<br>value: ' . $value;
    //echo '<br>action: ' . $action;

	// Check if cancel button clicked
	if( isset( $_POST['cancel'] ) ) {
    	//echo '<br>CANCEL';
		header("location: editdetails.php");
	}

	// Check if save button clicked
	if( isset( $_POST['save'] ) ) {
		if ( $action == 'newSection' ) {
			saveNewSection( $sectionNumMax, $title, $name, $value );
		} else if ( $action == 'editTitle' ) {
			editTitle( $sectionNum, $title );
		} else if ( $action == 'editNameValue' ) {
			editNameValue( $sectionNum, $nameValueNum, $name, $value );
		} else if ( $action == 'newNameValue' ) {
			newNameValue( $sectionNum, $nameValueNum, $name, $value );
		}
		// Redirect back to editdetails.php
		header("location: editdetails.php");
	}

	// Check for two delete actions
	if ( $action == 'deleteTitle' || $action == 'deleteNameValue' ) {
		if ( $action == 'deleteTitle' ) {
			deleteTitle( $sectionNum );
		} else {
			$count = countSectionPairs( $sectionNum );
			if ( $count == 1 ) {
				deleteTitle( $sectionNum );
			} else {
				deleteNameValue( $sectionNum, $nameValueNum );
			}
		}
		// Redirect back to editdetails.php
		header("location: editdetails.php");
	}
?>

<?php
	function saveNewSection( $sectionNumMax, $title, $name, $value ) {
		$s = 'SECTION';
		$t = 'TITLE';
	    $n = 'NAME';
	    $v = 'VALUE';

		$fileName = "details.txt";
    	$file = fopen($fileName, 'a');

		$sectionNum = $sectionNumMax + 1;
        if ( $sectionNum < 10 ) {
          $newSectionNum = '0' . $sectionNum;
        } else {
          $newSectionNum = $sectionNum;
        }

		$newNameValueNum = '01';

    	// Title
    	$output = $s . $newSectionNum . '.' . $t . '=' . $title;
    	//echo '<br>OUTPUT: ' . $output;
		fwrite($file, $output."\n"); // \r\n
		// Name
    	$output = $s . $newSectionNum . '.' . $n . $newNameValueNum . '=' . $name;
    	//echo '<br>OUTPUT: ' . $output;
		fwrite($file, $output."\n"); // \r\n
		// Value
    	$output = $s . $newSectionNum . '.' . $v . $newNameValueNum . '=' . $value;
    	//echo '<br>OUTPUT: ' . $output;
		fwrite($file, $output."\n"); // \r\n

		fclose($file);
	}

	function editTitle( $sectionNum, $title ) {
		// First prepare new title line
		$s = 'SECTION';
		$t = 'TITLE';
		
        if ( $sectionNum < 10 ) {
          $newSectionNum = '0' . $sectionNum;
        } else {
          $newSectionNum = $sectionNum;
        }

    	$output = $s . $newSectionNum . '.' . $t . '=' . $title;

		// Open the files
    	$oFile = fopen(currentFileName(), 'r');
    	$nFile = fopen(newFileName(), 'w');

		// Copy values across, edit title when we reach the correct point
		while ( !feof($oFile) ) {
        	// Read line and copy
            $line = fgets($oFile);
            if ( isLineSection( $line, $sectionNum ) == true ) {
				if ( isLineTitle( $line ) == true ) {
					// EDIT POINT
					fwrite($nFile, $output."\n"); // \r\n
				} else {
				    fwrite($nFile, $line);
				}
	        } else {
				fwrite($nFile, $line);
 			}
		}
		
		// Close files, delete old and rename new
		closeFinishFiles( $oFile, $nFile );
	}
	
	function deleteTitle( $sectionNum ) {
		// Open the files
    	$oFile = fopen(currentFileName(), 'r');
    	$nFile = fopen(newFileName(), 'w');

		// Copy values across, don't copy deleted section
		while ( !feof($oFile) ) {
        	// Read line and copy
            $line = fgets($oFile);
            if ( isLineSection( $line, $sectionNum ) == true ) {
				// This section has been deleted - don't copy the value across
	        } else {
				fwrite($nFile, $line);
 			}
		}
		
		// Close files, delete old and rename new
		closeFinishFiles( $oFile, $nFile );
	}

	function editNameValue( $sectionNum, $nameValueNum, $name, $value ) {
		// First prepare new name and value lines
		$s = 'SECTION';
	    $n = 'NAME';
	    $v = 'VALUE';
	    
        if ( $sectionNum < 10 ) {
          $newSectionNum = '0' . $sectionNum;
        } else {
          $newSectionNum = $sectionNum;
        }

        if ( $nameValueNum < 10 ) {
          $newNameValueNum = '0' . $nameValueNum;
        } else {
          $newNameValueNum = $nameValueNum;
        }

    	$outputName = $s . $newSectionNum . '.' . $n . $newNameValueNum . '=' . $name;
    	$outputValue = $s . $newSectionNum . '.' . $v . $newNameValueNum . '=' . $value;
    		
		// Open the files
    	$oFile = fopen(currentFileName(), 'r');
    	$nFile = fopen(newFileName(), 'w');

		// Copy values across, edit the name/value lines when we get to them
		while ( !feof($oFile) ) {
        	// Read line and copy
            $line = fgets($oFile);
            if ( isLineSection( $line, $sectionNum ) == true ) {
				if ( isLineName( $line, $nameValueNum ) == true ) {
					// Output the new name details
					fwrite($nFile, $outputName."\n"); // \r\n
				} else if ( isLineValue( $line, $nameValueNum ) == true ) {
					// Output the new value details
					fwrite($nFile, $outputValue."\n"); // \r\n
				} else {
					fwrite($nFile, $line);
				}
	        } else {
				fwrite($nFile, $line);
 			}
		}
		
		// Close files, delete old and rename new
		closeFinishFiles( $oFile, $nFile );
	}

	function deleteNameValue( $sectionNum, $nameValueNum ) {
		// Open the files
    	$oFile = fopen(currentFileName(), 'r');
    	$nFile = fopen(newFileName(), 'w');

		// Copy values across, don't copy name/value pair when we get there
		while ( !feof($oFile) ) {
        	// Read line and copy
            $line = fgets($oFile);
            if ( isLineSection( $line, $sectionNum ) == true ) {
				if ( isLineName( $line, $nameValueNum ) == true ) {
					// don't copy across name
				} else if ( isLineValue( $line, $nameValueNum ) == true ) {
					// don't copy across value
				} else {
					fwrite($nFile, $line);
				}
	        } else {
				fwrite($nFile, $line);
 			}
		}
		
		// Close files, delete old and rename new
		closeFinishFiles( $oFile, $nFile );
	}
	
	function newNameValue( $sectionNum, $nameValueNum, $name, $value ) {
		// First prepare new name and value lines
		$s = 'SECTION';
	    $n = 'NAME';
	    $v = 'VALUE';
	    $tmpNameValueNum = $nameValueNum + 1;
	    
        if ( $sectionNum < 10 ) {
          $newSectionNum = '0' . $sectionNum;
        } else {
          $newSectionNum = $sectionNum;
        }

        if ( $tmpNameValueNum < 10 ) {
          $newNameValueNum = '0' . $tmpNameValueNum;
        } else {
          $newNameValueNum = $tmpNameValueNum;
        }

    	$outputName = $s . $newSectionNum . '.' . $n . $newNameValueNum . '=' . $name;
    	$outputValue = $s . $newSectionNum . '.' . $v . $newNameValueNum . '=' . $value;
    	
		// Open the files
    	$oFile = fopen(currentFileName(), 'r');
    	$nFile = fopen(newFileName(), 'w');

		// Copy values across, add the name/value lines when we get to end of section
		while ( !feof($oFile) ) {
        	// Read line and copy
            $line = fgets($oFile);
            if ( isLineSection( $line, $sectionNum ) == true ) {
				if ( isLineValue( $line, $nameValueNum ) == true ) {
					// Last value in section - add our name and value after this one
					fwrite($nFile, $line);
					fwrite($nFile, $outputName."\n"); // \r\n
					fwrite($nFile, $outputValue."\n"); // \r\n
				} else {
					fwrite($nFile, $line);
				}
	        } else {
				fwrite($nFile, $line);
 			}
		}
		
		// Close files, delete old and rename new
		closeFinishFiles( $oFile, $nFile );
	}
	
	function countSectionPairs( $sectionNum ) {
		// Open the file
    	$oFile = fopen(currentFileName(), 'r');

		// Count name/value pairs for this section
		$count = 0;
		while ( !feof($oFile) ) {
        	// Read line
            $line = fgets($oFile);
            if ( isLineSection( $line, $sectionNum ) == true ) {
				if ( isLineAnyName( $line ) == true ) {
					$count++;
				}
 			}
		}

		fclose($oFile);
		return $count;
	}

	function currentFileName() {
		return "details.txt";
	}

	function newFileName() {
	    return "details_temp.txt";
	}

	function closeFinishFiles( $oFile, $nFile ) {
	    $origFile = currentFileName();
	    $newFile = newFileName();

		// Close the files
		fclose($oFile);
		fclose($nFile);

		// Delete old file
		unlink( $origFile );

		// Rename this file
		rename( $newFile, $origFile );
	}

	function isLineSection( $line, $sectionNum ) {
		$tmpLineSectionNum = substr($line, 7, 2);
        $lineSectionNum = (int)$tmpLineSectionNum;
		if ( $sectionNum == $lineSectionNum ) {
		   return true;
		} else {
			return false;
		}
	}

	function isLineTitle( $line ) {
		$t = 'TITLE';
		$index = strpos( $line, $t );
		if ( $index == false ) {
			return false;
		} else {
			return true;
		}
	}

	function isLineName( $line, $nameValueNum ) {
		// First check for NAME
		$n = 'NAME';
		$index = strpos( $line, $n );
		if ( $index == false ) {
			return false;
		} else {
			// Check number is correct
			$tmpLineNameValueNum = substr($line, 14, 2);
            $lineNameValueNum = (int)$tmpLineNameValueNum;
			if ( $nameValueNum == $lineNameValueNum ) {
				return true;
			} else {
			    return false;
			}
		}
	}

	function isLineAnyName( $line ) {
		// check for NAME
		$n = 'NAME';
		$index = strpos( $line, $n );
		if ( $index == false ) {
			return false;
		} else {
			return true;
		}
	}

	function isLineValue( $line, $nameValueNum ) {
		// First check for VALUE
		$v = 'VALUE';
		$index = strpos( $line, $v );
		if ( $index == false ) {
			return false;
		} else {
			// Check number is correct
			$tmpLineNameValueNum = substr($line, 15, 2);
            $lineNameValueNum = (int)$tmpLineNameValueNum;
			if ( $nameValueNum == $lineNameValueNum ) {
				return true;
			} else {
			    return false;
			}
		}
	}

?>

<html>
<head>
</head>
<body>
SAVE DETAILS
</body>
</html>