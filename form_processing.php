<!DOCTYPE html>
<html lang="en">
<head>
	<title>Form Processing</title>
</head>
<body>

<pre>
	<?php 
	print_r($_POST);
	?> 
</pre>
<br>
<?php 
	if (isset($_POST["username"])) {
		$username = $_POST["username"];
	} else {
		$username = "";
	}
	if (isset($_POST["password"])) {
	$password = $_POST["pass"];
	} else {
		$password = ""; 
	}
	$username = $_POST["username"];
	$password = $_POST["password"];
	echo "{$username}: {$password}";
 ?> 

</body>
</html>