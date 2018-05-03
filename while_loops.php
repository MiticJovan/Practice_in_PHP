<!DOCTYPE html>
<html lang="en">
<head>
	<title>while loops</title>
</head>
<body>

<?php  
	$count = 0;
	while ($count <= 10) {
		if ($count == 5) {
			echo "FIVE, ";
		} else {
			echo $count . ", ";
		}
	    
	    $count ++;//increment by 1
	}
	echo "<br/>";
	echo "Count: {$count}";

 ?> <br>
 <?php 

 	$count1 = 49;
 	    
 	while ($count1 >= 0) {
 		echo "$count1<br />";
 		$count1 -= 2;
 	}
 	
  ?> 

</body>
</html>