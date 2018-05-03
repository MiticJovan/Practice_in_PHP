	<?php 
	$name = "test";
	$value = "Hello";
	$expire = time() + (60*60*24*7);   //add seconds
	//setcookie($name, $value, $expire);
	//setcookie($name);
	//setcookie($name,null, $expire);
	//setcookie($name,$value, time() -3600);
	setcookie($name,null, time() -3600);
	 ?>  

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Cookies</title>
</head>
<body>
	
	<?php 
	$test = isset($_COOKIE['test']) ? $_COOKIE['test'] : "";
	 echo $test;
	?> 
	 
</body>
</html>