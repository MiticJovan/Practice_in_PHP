<!DOCTYPE html>
<html lang="en">
<head>
	<title>urlencode</title>
</head>
<body>
	<?php 
	$page = "Wiliam Shakespeare";
	$quote = "To be or not to be";
	$link1 = "/bio/" . rawurldecode($page) . "?quote=" . urldecode($quote);
	$link2 = "/bio/" . urlencode($page) . "?quote" . rawurlencode($quote);

	echo $link1 . "<br />"; 
	echo $link2 . "<br />"; 
	 ?> 

</body>
</html>