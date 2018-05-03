<!DOCTYPE html>
<html lang="en">
<head>
	<title>booleans</title>
</head>
<body>
	<?php 
		$result1 = true;
		$result2 = false;
	 ?> 
	 Result 1: <?php echo $result1; ?><br>
	 Result 2: <?php echo $result2; ?><br>

	 Result 2 is boolean? <?php echo is_bool($result2); ?> <br>
</body>
</html>