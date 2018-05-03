<!DOCTYPE html>
<html lang="en">
<head>
	<title>Functions: Arguments</title>
</head>
<body>

	<?php 
	function say_hello_to($word) {
		echo"Hello {$word}!<br />";
	}
	$name = "Jovan";
	say_hello_to($name);
	
	 ?> 

</body>
</html>