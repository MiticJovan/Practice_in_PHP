<!DOCTYPE html>
<html lang="en">
<head>
	<title>Functions: Default Argument Values</title>
</head>
<body>
		<?php

		 function paint($room= "office", $color= "red") {
		 	return "The color in the {$room} is {$color}. <br />";
		 }
		 echo paint();
		 echo paint("bedroom", "blue");
		 echo paint("bedroom", null);
		 ?> 
</body>
</html>