<!DOCTYPE html>
<html lang="en">
<head>
	<title>Validation errors</title>
</head>
<body>
<?php 
require_once('validation_function.php');
$errors = array();
$username = trim("kevin");
if (!has_presence($username)) {
	$errors['username'] = "Username can't be blank";
}
 ?>
 <?php echo form_errors($errors); ?> 



</body>
</html>