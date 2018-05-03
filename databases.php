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
 // 2. Perform Database query 
 $query = "SELECT * ";
 $query .= "FROM subjects ";
 $query .= "WHERE visible = 1 ";
 $query .= "ORDER BY position ASC";
 
 $result = mysqli_query($connection, $query);
 if (!$result) {
 	die("Database query failed!");
 }
  ?> 



<!DOCTYPE html>
<html lang="en">
<head>
	<title>Databases</title>
</head>
<body>
	<ul>
	<?php 
	//3. Use returned data 
	while ($row = mysqli_fetch_assoc($result)) {
		?>
		<li><?php echo $row["manu_name"];?></li>
		<?php   
		}
		?>
</ul>
<?php 
// 4. Release returned data
	mysqli_free_result($result);
 ?> 
</body>
</html>
<?php 
	// 5.Close database connection
	mysqli_close($connection);
	 ?> 