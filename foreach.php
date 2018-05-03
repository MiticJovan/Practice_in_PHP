<!DOCTYPE html>
<html lang="en">
<head>
	<title>for each loop</title>
</head>
<body>

	<?php 
		$ages = array(4,8,12,15,16,23,42);

		foreach ($ages as $age) {
			echo "Age : {$age},<br />";
		}
	 ?> <br>
	 <?php //foreach using assoc. array
	 	 $person = array(
	 	 	"first_name" => "Jovan",
	 	 	"last_name" => "Mitic"
	 	 );
	 	 foreach ($person as $attribute => $data) {
	 	 	$attr_nice = ucwords(str_replace("_", " ", $attribute));
	 	 	echo "{$attr_nice}: {$data} <br />";
	 	 }
	  ?> 

</body>
</html>