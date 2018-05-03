<?php 
// 1. Create a database connection
	$dbhost = "127.0.0.1";//if adress dont work you can try "localhost"
	$dbuser = "widget_cms";
	$dbpass = "secretpassword";
	$dbname = "widget_corp";
	$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
 //Test if connection occured.
	if (mysqli_connect_errno()) {
		die("Database connection failed " . 
		mysqli_connect_error() . " (" . mysqli_connect_errno() . ")"	
	);
	}
 ?>
 <?php 
 //Often these are form values in $_POST
 $manu_name = "Edit me";
 $position = 4;
 $visible = 1;

  // 2. Perform Database query
$query = "INSERT INTO subjects (manu_name, position, visible)
		VALUES ('{$manu_name}', {$position}, {$visible})";
 
 $result = mysqli_query($connection, $query);
 if ($result) {
 	//Success
 	//redirect to ("somepage.php");
 	echo "Success";
 	} else {
 		//Failure
 		//$message = "Subject creation failed";
 		die("Database query failed! " . mysqli_error($connection));
 	}
 	
  ?> 



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Databases</title>
</head>
<body>

</body>
</html>
<?php 
	// 5.Close database connection
	mysqli_close($connection);
	 ?> 