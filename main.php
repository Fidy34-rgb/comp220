<?php 
require_once("include.php");
//Pair C function
function findTextInFile($sourceText, $targetString)
{
	$pos = 0;
	$outputString = ("String " . $targetString . " was not found.");
	$foundString = ($targetString . " was found at position ");
	$pos = strpos($sourceText, $targetString);
	if($pos >= 0)
		$outputString = $foundString . ($pos + 1);
	return $outputString;
}

//main
$mysqlObj = CreateConnectionObject();
$TableName = "fontNames";
//write headers with all student first and last names
//if (isset($_POST['f_Save']))saveFile($p));
// else if openFile();
//  else if findButton, findTextInFile($p1, $p2);
//else drawMenu();
if (isset($mysqlObj)) $mysqlObj->close();
//write footers
?>
