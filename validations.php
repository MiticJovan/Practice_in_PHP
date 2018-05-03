<!DOCTYPE html>
<html lang="en">
<head>
	<title>Validations</title>
</head>
<body>
<?php 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
// * presence
$value = "";
if (!isset($value) || empty($value)) {
	echo "Validation failed. <br />";
}
// * string length
// minimum length
$value = "";
$min = 3;
if (strlen($value) < $min) {
	echo "VAlidation failed. <br />";
} 
//max length
$max = 6;
if (strlen($value) > $max) {
	echo "Validation failed.<br / >";
} 

// * type
$value = "";
if (!is_string($value)) {
	echo "Validation failed: number is not a string.<br />";
}

// * inclusion in a set
$value = "1";
$set = array("1", "2", "3", "4");
if (!in_array($value, $set)){
	echo "Validation failed. <br/>";
}
// * uniqueness
// uses a database to check uniqueness


// * format
//use a regex on a string
//preg_match($regex, $subject)
if (preg_match("/PHP/", "PHP is fun.")) {
	echo "A match was found <br />";
	} else {
		echo "A match was not found. <br />";
	}
$value = "nobody@nowhere.com";
if (!preg_match("/@/", "$value")) {
		echo "Validation failed. <br />";
	}	
if (strpos($value, "@") === false)  {
		echo "Validation failed <br />";
	}	
 ?>


</body>
</html>